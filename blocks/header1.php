<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
    <link rel="stylesheet" href="style.css"> 
</head>

<body>
<header>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #63DD8D;">
  <a class="navbar-brand" href="index.php">Welcome to SPA!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="promo.php">Акции</a>
      </li>         
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Наш номер: 8-800-000-01-01</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"> 
    <a href="input/login.php" class="btn btn-warning" role="button" aria-pressed="true">Личный кабинет</a> 
    </form>
  </div>
</nav>
</header>

