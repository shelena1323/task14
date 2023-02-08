<?php 
$title = 'Регистрация';
require "../blocks/header3.php";
?>
    <form action="users.php" method="post">
    <div class="form-group mt-4" align="center">
        <p>
        <label for="login">Логин  </label>
        <input type="text" name="login" id="login" minlength="2" maxlength="10" required="required" placeholder="Придумайте логин">
        </p>
        <p>
        <label for="password">Пароль</label>
        <input type="password" name="password" id="password" minlength="6" maxlength="20" required="required" placeholder="Придумайте пароль">
        </p>
        <p>
        <label for="password">Пароль</label>
        <input type="date" name="birthday" id="birthday" min="1953-01-01" max="2007-01-01" placeholder="Ваша дата рождения">
        </p>
        <p>       
        <button type="submit" class="btn btn-info">Регистрация</button>
        </p>
        <p> Уже есть аккаунт? <a href="login.php" class="btn btn-outline-danger btn-sm" role="button" aria-pressed="true">Войти</a></p>
    </div>
    </form>
     <br>
     <br>
     <br>
     <br> 
     <br>
     <br>
   
<?php 
require "../blocks/footer.php";
?>