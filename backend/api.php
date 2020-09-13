<?php
session_start([
    'cookie_lifetime' => 300400,
]);
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once "vendor/autoload.php";

use DigitalStars\DataBase\DB;
use DigitalStars\SimpleAPI;

header('Access-Control-Expose-Headers: Access-Control-Allow-Origin', false);
header('Access-Control-Allow-Origin: *', false);
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept', false);
header('Access-Control-Allow-Credentials: true');

$db_name = '';
$login = '';
$pass = '';

$db = new DB("mysql:host=localhost;dbname=$db_name", $login, $pass,
    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]
);

$is_auth = $_SESSION['auth'] ?? false;

$api = new SimpleAPI();
switch ($api->module) {
    case 'reg':
        $data = $api->params(['first_name', 'last_name', 'middle_name', 'number', 'date', 'email', 'sex']);
        $check = $db->row("SELECT email FROM users WHERE email = ?s", [$data['email']])['email'] ?? null;
        if(!$check) {
            $db->query("INSERT INTO users(first_name, last_name, middle_name, number, `date`, email, sex)
                VALUES (?s, ?s, ?s, ?i, ?s, ?s, ?i)",
                [$data['first_name'], $data['last_name'], $data['middle_name'], (int)$data['number'], $data['date'], $data['email'], $data['sex']]);
            $_SESSION['auth'] = true;
            $api->answer['auth'] = true;
        } else {
            $api->error('Такой email же существует');
        }
        break;
    case 'auth':
        $data = $api->params(['login', 'password']);
        $_SESSION['auth'] = true;
        $api->answer['auth'] = ($data['login'] == 'admin' && $data['password'] == 'admin');
        break;
    case 'get_course':
        if ($is_auth) {
            $data = $api->params([]);
            $api->answer = $db->rows("SELECT name, id, img, time_learning, category FROM course");
        } else {
            $api->error('Не авторизован');
        }
        break;
    case 'course_info':
        if ($is_auth) {
            $data = $api->params(['id']);
            $api->answer = getCourseInfo($data['id']);
        } else {
            $api->error('Не авторизован');
        }
        break;
}

function getCourseInfo($id) {
    global $db;
    $rows = $db->rows("SELECT course.name,
                           course.description as description_c,
                           course.header_img,
                           course.count_lesson_all,
                           course.category,
                    
                           category_course.name as c_name,
                           category_course.count_lesson,
                           category_course.description,
                           category_course.time_learning
                    
                    FROM course
                             JOIN category_course
                                  ON course.id = category_course.id_course WHERE id_course = ?i", [$id]);
    $return = [];
    $return['name'] = $rows[0]['name'];
    $return['description'] = $rows[0]['description_c'];
    $return['header_img'] = $rows[0]['header_img'];
    $return['count_lesson_all'] = $rows[0]['count_lesson_all'];
    $return['category'] = $rows[0]['category'];
    foreach ($rows as $row) {
        $return['course_program'][] = [
            'name' => $row['c_name'],
            'count_lesson' => $row['count_lesson'],
            'description' => $row['description'],
            'time' => $row['time_learning'],
        ];
    }
    return $return;
}