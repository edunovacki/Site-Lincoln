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
   <?php 
          include 'header.php';
    ?>
    <div class="row">
      <div data-aos="fade-right" class="col">
        <img
        src="imagens/imagem_teste.webp"
        class="col"
        alt="..."
      />
      </div>
      <div data-aos="fade-left" class="col">
        <h1>
          Cansado de Treinar sem <strong class="resultado">Resultados?</strong>
        </h1>
        <p>Chega de perder tempo com treinos genéricos. Você já tentou de tudo e mesmo assim não vê resultados? A culpa não é sua. Muita gente como você já passou por isso: treinar por meses e ainda sentir que está estagnado. Aqui cada treino é feito para você - de verdade. Com acompanhamento próximo, ajustes constantes e um plano que respeita o seu ritmo, seu corpo e seus objetivos, você finalmente vai sentir que está avançando. Chega de frustação. Vamos juntos conquistar o corpo e a confiança que você merece!
        </p>
      </div>
    </div>
      <!--<img
        src="https://pratiquefitness.com.br/blog/wp-content/uploads/2023/08/Como-mensurar-os-resultados-da-academia-de-forma-sensata-1.jpg"
        class="col"
        alt="..."
      />-->
       <!--col-md-6 float-md-start mb-3 ms-md-3-->
    <h1>Quem somos?</h1>
    <div class="row">
      <div data-aos="fade-right" class="col">
        <p class="fs-5">Somos uma consultoria especializada em transformar treinos em resultados reais. Com treinos personalizados, acompanhamento individual e foco total em cada aluno, ajudamos pessoas comuns a conquistarem energia, autoestima e o corpo que sempre quiseram - de forma saudável, consistente e com orientação de verdade!</p>
      </div>
      <div data-aos="fade-left" class="col">
        <img
        src="imagens/imagem_teste.webp"
        class="col"
        alt="..."
      />
      </div>
    </div>
      <h1>Planos</h1>
      <div class="planos">
      <div class="row">
        <div data-aos="zoom-in" class="col">
          <h3>Plano Essencial</h3>
          <p>--------------------------------------------------</p>
          <h4><strong>R$ 119,90</strong> <small>/Mês</small></h4>
          <p>--------------------------------------------------</p>
          <ul>
            <li>Treinos eficientes e acompanhamento direto.</li>
          </ul>
          <p></p>
          <p>--------------------------------------------------</p>
          <a href="planos.php" title="Assinar" class="btn btn-warning"> Saiba Mais <i class="fa-solid fa-circle-info"></i> </a>
        </div>
        <div data-aos="zoom-in" class="col">
          <h3>Plano Avançado</h3>
          <p>--------------------------------------------------</p>
          <h4><strong>R$ 99,90</strong> <small>/Mês</small></h4>
          <p>--------------------------------------------------</p>
          <ul>
          <li>Resultados mais rápidos e acompanhamento extra.</li>
        </ul>
        <p>--------------------------------------------------</p>
        <a href="planos.php" title="Assinar" class="btn btn-warning"> Saiba Mais <i class="fa-solid fa-circle-info"></i> </a>
        <p></p>
        </div>
        <div data-aos="zoom-in" class="col">
          <h3 >Plano Premium</h3>
          <p>--------------------------------------------------</p>
          <h4><strong>$ 79,90</strong> <small>/Mês</small> <span class="badge bg-warning">Mais Popular</span></h4>
          <p>--------------------------------------------------</p>
          <ul>
          <li>Tudo o que você precisa em um só plano.</li>
          </ul>
          <p>--------------------------------------------------</p>
          <a href="planos.php" title="Assinar" class="btn btn-warning"> Saiba Mais <i class="fa-solid fa-circle-info"></i> </a>
          <p></p>
        </div>
      </div>
    </div>
  </div>        
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
