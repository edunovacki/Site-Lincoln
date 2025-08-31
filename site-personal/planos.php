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
  
      <!--<img
        src="https://pratiquefitness.com.br/blog/wp-content/uploads/2023/08/Como-mensurar-os-resultados-da-academia-de-forma-sensata-1.jpg"
        class="col"
        alt="..."
      />-->
       <!--col-md-6 float-md-start mb-3 ms-md-3-->
      <h1>Planos</h1>
      <div class="planos">
      <div class="row">
        <div data-aos="zoom-in" class="col">
          <h3> Plano Essencial</h3>
          <p>--------------------------------------------------</p>
          <h4><strong>R$ 119,90</strong> <small>/Mês</small></h4>
          <p>--------------------------------------------------</p>
          <ul>
            <li>Treino Personalizado</li>
            <li>Acompanhamento Semanal</li>
            <li>Grupo Exclusivo de WhatsApp</li>
          </ul>
          <p>--------------------------------------------------</p>
          <a href="contato.php" title="Assinar" class="btn btn-warning"> Assinar este Plano <i class="fa-solid fa-file-signature"></i></a>
          <p></p>
        </div>
        <div data-aos="zoom-in" class="col">
          <h3>Plano Avançado</h3>
          <p>--------------------------------------------------</p>
          <h4><strong>R$ 99,90</strong> <small>/Mês</small></h4>
          <p>--------------------------------------------------</p>
          <ul>
            <li>Treino Personalizado + Atualizações Mensais</li>
            <li>Consultoria Nutricional Básica</li>
            <li>Relatórios de Evolução</li>
        </ul>
        <p>--------------------------------------------------</p>
        <a href="contato.php" title="Assinar" class="btn btn-warning"> Assinar este Plano <i class="fa-solid fa-file-signature"></i> </a>
        <p></p>
        </div>
        <div data-aos="zoom-in" class="col">
          <h3 >Plano Premium</h3>
          <p>--------------------------------------------------</p>
          <h4><strong>$ 79,90</strong> <small>/Mês</small> <span class="badge bg-warning">Mais Popular</span></h4>
          <p>--------------------------------------------------</p>
          <ul>
            <li>Treino 100% Personalizado e Atualizado</li>
            <li>Consultoria Nutricional Completa</li>
            <li>Suporte Diário</li>
          </ul>
          <p>--------------------------------------------------</p>
          <a href="contato.php" title="Assinar" class="btn btn-warning"> Assinar este Plano <i class="fa-solid fa-file-signature"></i></a>
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