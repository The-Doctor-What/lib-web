<?php

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];

if (isset($name) || isset($login) || isset($password)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Не все поля заполнены'
    ]);
    exit;
}

if (!file_exists('users.json')) file_put_contents('users.json', json_encode([]));

$users = file_get_contents('users.json');
$users = json_decode($users, true);

foreach ($users as $user) {
    if ($user['login'] === $login) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Пользователь с таким логином уже существует'
        ]);
        exit;
    }
}

$users[] = [
    'name' => $name,
    'login' => $login,
    'password' => $password
];

file_put_contents('users.json', json_encode($users));

echo json_encode([
    'status' => 'success',
    'data' => [
        'name' => $name,
        'login' => $login,
        'password' => $password
    ]
]);