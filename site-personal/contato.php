<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Personal Trainer</title>
  </head>
  <body>
 <?php 
          include 'header.php';
    ?>

    <main class="container mt-4">
      <h2>Entre em Contato!</h2>
      <form data-aos="zoom-in" id="formulario-contato">
        <div class="mb-3">
          <label class="form-label">Nome:</label>
          <input
            type="text"
            class="form-control"
            id="nome"
            placeholder="Digite seu Nome"
          />

          <label class="form-label">Sobrenome:</label>
          <input
            type="text"
            class="form-control"
            id="sobrenome"
            placeholder="Digite seu Sobrenome"
          />

          <label class="form-label">Sexo:</label>
          <select class="form-select" id="sexo" required>
            <option value="" selected disabled>Selecione o sexo</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
          </select>

          <label class="form-label">Email:</label>
          <input
            type="email"
            class="form-control"
            id="email"
            placeholder="Digite seu E-mail"
          />

          <label class="form-label">Telefone:</label>
          <input
            type="text"
            class="form-control"
            id="telefone"
            placeholder="Digite seu Telefone"
          />

          <label class="form-label">Endereço:</label>
          <input
            type="text"
            class="form-control"
            id="endereco"
            placeholder="Digite seu Endereço"
          />
        </div>

        <div class="mb-3">
          <label class="form-label">Mensagem:</label>
          <textarea
            class="form-control"
            id="mensagem"
            rows="5"
            placeholder="Digite sua mensagem"
          ></textarea>
        </div>

        <button type="button" class="btn btn-danger" id="botao">
          Enviar <i class="fa-solid fa-check"></i>
        </button>
      </form>

      <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-dark text-white p-4 shadow">
                <h2 class="text-center mb-4 text-warning">Calculadora de IMC</h2>
                
                <div class="mb-3">
                    <label class="form-label">Altura (cm):</label>
                    <input type="number" id="altura" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Peso (kg):</label>
                    <input type="number" id="peso" class="form-control">
                </div>
                
                <button id="btnCalcular" class="btn btn-warning w-100 mt-3">
                    <i class="fas fa-calculator me-2"></i> Calcular
                </button>
                
                <div id="resultado" class="mt-4 p-3 rounded bg-secondary" style="display:none;">
                    <h4 class="text-center text-warning mb-3">Seu Resultado</h4>
                    <div id="resultadoDetalhes"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('btnCalcular').addEventListener('click', async function() {
    const altura = document.getElementById('altura').value;
    const peso = document.getElementById('peso').value;
    
    if (!altura || !peso) {
        alert('Preencha todos os campos!');
        return;
    }

    try {
        const response = await fetch('api/imc.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                peso: parseFloat(peso),
                altura: parseFloat(altura)
            })
        });
        
        const data = await response.json();
        
        if (data.erro) {
            throw new Error(data.erro);
        }
        
        document.getElementById('resultadoDetalhes').innerHTML = `
            <p><strong>IMC:</strong> ${data.imc}</p>
            <p><strong>Classificação:</strong> ${data.classificacao}</p>
            <p><strong>Recomendação:</strong> ${data.dica}</p>
            <p class="mt-3"><strong>${data.contato}</strong></p>
        `;
        
        document.getElementById('resultado').style.display = 'block';
        
    } catch (error) {
        console.error('Erro:', error);
        alert('Erro ao calcular IMC');
    }
});
</script>

      <div class="maps mt-5">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d322.8193895070314!2d-52.36388127957979!3d-24.030360769892205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1749680682160!5m2!1spt-BR!2sbr"
          width="100%"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </main>

    <?php 
          include 'footer.php';
    ?>

    <!-- Bootstrap e Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/83f4c4a578.js" crossorigin="anonymous"></script>

    <!-- Script de Validação -->
    <script>
      document.getElementById("telefone").addEventListener("input", function () {
        this.value = this.value.replace(/\D/g, "");
      });

      document.getElementById("botao").addEventListener("click", function () {
        const nome = document.getElementById("nome").value.trim();
        const sobrenome = document.getElementById("sobrenome").value.trim();
        const sexo = document.getElementById("sexo").value;
        const email = document.getElementById("email").value.trim();
        const telefone = document.getElementById("telefone").value.trim();
        const endereco = document.getElementById("endereco").value.trim();
        const mensagem = document.getElementById("mensagem").value.trim();

        const dominiosValidos = [
          "gmail.com",
          "hotmail.com",
          "outlook.com",
          "yahoo.com",
          "icloud.com",
          "live.com",
        ];
        let erro = false;

        // Se TODOS os campos estiverem vazios, alerta e para
        if (
          !nome &&
          !sobrenome &&
          !sexo &&
          !email &&
          !telefone &&
          !endereco &&
          !mensagem
        ) {
          alert("Preencha todos os campos.");
          return;
        }

        // Validações individuais
        if (!nome) {
          alert("Informe o nome.");
          erro = true;
        } else if (nome.length < 2) {
          alert("Nome inválido.");
          erro = true;
        }

        if (!sobrenome) {
          alert("Informe o sobrenome.");
          erro = true;
        } else if (sobrenome.length < 2) {
          alert("Sobrenome inválido.");
          erro = true;
        }

        if (!sexo) {
          alert("Selecione o Sexo.");
          erro = true;
        }

        if (!email) {
          alert("Informe o email.");
          erro = true;
        } else if (!email.includes("@")) {
          alert("O email deve conter '@'.");
          erro = true;
        } else {
          const partesEmail = email.split("@");
          if (
            partesEmail.length !== 2 ||
            !dominiosValidos.includes(partesEmail[1].toLowerCase())
          ) {
            alert(
              "Email inválido. Use um domínio conhecido (ex: gmail.com)."
            );
            erro = true;
          }
        }

        const telefoneNumerico = telefone.replace(/\D/g, "");
        if (!telefoneNumerico) {
          alert("Informe o telefone.");
          erro = true;
        } else if (telefoneNumerico.length !== 11) {
          alert("O telefone deve conter 11 dígitos (ex: DDD + 9 + número).");
          erro = true;
        } else {
          const ddd = telefoneNumerico.slice(0, 2);
          const primeiroDigito = telefoneNumerico.slice(2, 3);
          const primeiraParte = telefoneNumerico.slice(3, 7);
          const segundaParte = telefoneNumerico.slice(7);
          const telefoneFormatado = `(${ddd}) ${primeiroDigito} ${primeiraParte}-${segundaParte}`;
          document.getElementById("telefone").value = telefoneFormatado;
        }

        if (!endereco) {
          alert("Informe o endereço.");
          erro = true;
        } else if (endereco.length < 5) {
          alert("Endereço inválido.");
          erro = true;
        }

        if (!mensagem) {
          alert("Informe a mensagem.");
          erro = true;
        } else if (mensagem.length < 5) {
          alert("A mensagem deve ter pelo menos 5 caracteres.");
          erro = true;
        }

        if (!erro) {
          alert("Formulário enviado com sucesso!");
          document.getElementById("formulario-contato").reset();
        }
      });
    </script>
    <script>
  AOS.init();
</script>
  </body>
</html>