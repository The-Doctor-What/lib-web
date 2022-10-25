<?php
$title = "Главная";
require 'header.php';
?>
    <main id="main">
        <section class="mini-header" xmlns="http://www.w3.org/1999/html">
            <h1>Добро пожаловать на Dev Library</h1>
            <p>Здесь вы можете получить доступ к библиотеке с книгами для разработчика</p>
        </section>
        <section class="main-auth">
            <div class="auth">
                <h2>Авторизация</h2>
                <form id="auth-form">
                    <div>
                        <label for="login">Логин</label>
                        <input id="login" type="text" placeholder="Введите ваш логин" required>
                    </div>
                    <div>
                        <label for="password">Пароль</label>
                        <input id="password" type="password" placeholder="Введите ваш пароль" required>
                    </div>
                    <div>
                        <a href="register">Нет аккаунта? Зарегистрируйтесь</a>
                        <button type="submit">Войти</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="scripts/auth.js"></script>
<?php
require 'footer.php';
?>