<?php

$login = $_POST['login'];
$password = $_POST['password'];

if (isset($login) || isset($password)) {
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
        if ($user['password'] === $password) {
            echo json_encode([
                'status' => 'success',
                'message' => 'Вы успешно авторизовались'
            ]);
        } else {
            echo json_encode([
                'status' => 'error',
                'message' => 'Неверный пароль'
            ]);
        }
        exit;
    }
}

echo json_encode([
    'status' => 'error',
    'message' => 'Пользователь не найден'
]);