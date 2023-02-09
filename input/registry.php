<?php
session_start();
$title ='Регистрация';
require "../blocks/header3.php";
?>
    <form action="users.php" method="post">
    <div class="form-group mt-4" align="center">
        <p>
        <label for="login">Логин  </label>
        <input type="text" name="login" id="login" minlength="2" maxlength="15" required="required" placeholder="Придумайте логин">
        </p>
        <p>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" minlength="6" maxlength="20" required="required" placeholder="Придумайте пароль">
        </p>
        <p>
        <label for="password">Пароль</label>
        <input type="password" name="pass" id="pass" required="required" placeholder="Введите пароль еще раз">
        </p>
        <p>       
        <button type="submit" class="btn btn-info">Регистрация</button>
        </p>
        <p> Уже есть аккаунт? <a href="login.php" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Войти</a></p>
    </div>
    </form>
    <?php 
    if(isset($_SESSION['message'])){
        echo '<div class="alert alert-danger" role="alert" align="center">'. $_SESSION['message'] . '</div>';
    }
    unset($_SESSION['message']);
    ?>
     <br>
     <br>
     <br>
     <br> 
     <br>
     <br>
   
<?php 
require "../blocks/footer.php";
?>