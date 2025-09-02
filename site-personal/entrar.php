<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/entrar.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Edu+VIC+WA+NT+Hand:wght@400..700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&family=Edu+VIC+WA+NT+Hand:wght@400..700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <title>Personal Trainer</title>

  </head>
  <body>
    <main class="container">
        <form action="index.php" method="post">
            <h1>Login</h1>
            <div class="input-box"><input placeholder="Usuário" type="text"><i class="fa-solid fa-user"></i></div>
            <div class="input-box"><input placeholder="Senha" type="password"><i class="fa-solid fa-lock"></i></div>
            <!--<div class="remember-forgot"><label><input type="checkbox"> Lembrar senha</label><a href="#">Esqueci a senha</a></div>!-->
            <button type="submit" class="login">Login</button>
            <div class="register-link">
                <p>Não tem uma conta?<a href="cadastrar.php"> Cadastre-se<a></p>
            </div>
        </form>
    </main>
    <!--<?php 
          include 'footer.php';
    ?>!-->
    <script src="https://kit.fontawesome.com/83f4c4a578.js" crossorigin="anonymous"></script>
    <script>
  AOS.init();
</script>
  </body>
</html>
