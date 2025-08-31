<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Personal Trainer</title>
  </head>
  <body>
    <?php 
          include 'header.php';
    ?>
    <h1>Persona</h1>
      <div class="row personal">
        <div data-aos="fade-right" class="col">
          <p class="fs-5">Nome: Lucas Ribeiro</br>Idade: 28 Anos</br>Profissão: Analista de TI</br></br>Histórico: Lucas já se matriculou na academia várias vezes, mas sempre abandona</br> depois de 2 ou 3 meses por não ver resultados. Sente insegurança com o próprio corpo e que alguém o acompanhe.</br></br>Dores:<li style="color: #f8f6ec;">Frustação por falta de resultados</li><li style="color: #f8f6ec;">Inseguraça com o corpo</li><li style="color: #f8f6ec;">Falta de orientação individualizada</li><li style="color: #f8f6ec;">Cansaço de treinos repetitivos</li><li style="color: #f8f6ec;">Perda de motivação rápida</li></p>
        </div>
  </section>         
 <?php 
          include 'footer.php';
    ?>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous"
  ></script>
  <script src="https://kit.fontawesome.com/83f4c4a578.js" crossorigin="anonymous"></script>
  <script>
  AOS.init();
</script>
  </body>
</html>