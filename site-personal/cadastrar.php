<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/cadastrar.css" />
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
<div class="nav">
  <p>Já possui uma conta? <a href="entrar.php">Login <i class="fa-solid fa-arrow-right"></i></a></p>
</div>

<body>
  <main class="container">
    <form action="index.php" method="post">
      <h1>Cadastre-se</h1>
      <div class="input-box"><input placeholder="E-mail" type="email" required><i class="fa-solid fa-at"></i></div>
      <div class="input-box"><input placeholder="Senha" type="password" minlength="4" required><i class="fa-solid fa-lock"></i></div>
      <div class="input-box"><input placeholder="Nome Completo" type="text" required><i class="fa-solid fa-user"></i></div>
      <div class="input-box"><input placeholder="Idade" type="text" maxlength="3" required><i class="fa-solid fa-calendar-days"></i></div>
      <div class="input-box"><input placeholder="Sexo(M/F)" type="text" pattern="[MF]" maxlength="1" id="sexo" required><i class="fa-solid fa-venus-mars"></i></div>
      <button type="submit" class="login" href="index.php">Criar conta</button>
    </form>
  </main>
  <!--<?php
      include 'footer.php';
      ?>!-->
  <script src="https://kit.fontawesome.com/83f4c4a578.js" crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
  <script>
      const sexoInput = document.getElementById("sexo");

      sexoInput.addEventListener("input", () => {
        let value = sexoInput.value.toUpperCase(); // força maiúscula
        if (value !== "M" && value !== "F") {
          sexoInput.value = ""; // limpa se não for M ou F
        } else {
          sexoInput.value = value; // mantém válido
        }
      });
    </script>
</body>

</html>