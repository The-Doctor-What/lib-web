<?php
$title = "Регистрация";
require 'header.php';
?>
    <main>
        <section class="mini-header">
            <h1>Регистрация</h1>
            <p>Здесь вы можете зарегистрироваться на сайте</p>
        </section>
        <section class="main-auth">
            <div class="auth">
                <form id="register-form">
                    <div>
                        <label for="name">Имя</label>
                        <input id="name" type="text" placeholder="Mary Benson" required>
                    </div>
                    <div>
                        <label for="login">Логин</label>
                        <input id="login" type="text" placeholder="otomir23" required>
                    </div>
                    <div>
                        <label for="password">Пароль</label>
                        <input id="password" type="password" placeholder="********" required>
                    </div>
                    <div>
                        <label for="password2">Повторите пароль</label>
                        <input id="password2" type="password" placeholder="********" required>
                    </div>
                    <div class="approve">
                        <label for="approve">Согласие на передачи нам вашей души</label>
                        <input id="approve" type="checkbox" required>
                    </div>
                    <div>
                        <a href="/">Уже есть аккаунт? Войдите</a>
                        <button type="submit">Зарегистрироваться</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="scripts/register.js"></script>
<?php
require 'footer.php';
?>