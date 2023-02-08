<?php 
$title = 'Вход в ЛК';
require "..\blocks\header3.php";
?>

    <form action="process.php" method="post">
    <div class="form-group mt-4" align="center">
        <p>
        <label for="login">Логин  </label>
        <input type="text" name="login" id="login" required="required" placeholder="Введите свой логин">
        </p>
        <p>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" required="required" placeholder="Введите свой пароль">
        </p>
        <p>       
        <button type="submit" class="btn btn-info">Войти</button>
        </p>
        <p> Впервые у нас? <a href="registry.php" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Регистрация</a></p>
    </div>
    </form>

    <?php 
    


    ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php 
require "../blocks/footer.php";
?>