<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://kit.fontawesome.com/449a3898b7.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/login.css">
    <title>Cadastro</title>
</head>
<body>

    <header>

        <div class="container">
            <div class="logo"><img src="imagens/Logo.png"></div>
            <div class="menu">
                <nav>
                    <a href="Home.html">Home</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="#">Sobre</a>
                    <a href="#">Contatos</a>
                </nav>

            </div>
            <div class="btn-menu">
                
                <button><i class="fa-solid fa-user-plus"></i> <Br> <a href="cadastro.php">  Cadastre-se  </a>  </button>
                <button><i class="fa-solid fa-right-to-bracket"></i> <Br> <a href="login.php">  Entrar  </a>  </button>

            </div>
        </div>
        

    </header>
    <main>
        <form class="cadastro" action="Conexao/login_conexao.php" method="POST" >
            <br>
            <h1 id="titulo">Login</h1>
            <br>
            <!--aqui começam os formulários-->
            <div class="form" id="primeiro"> 
               
            </div>
            <div class="form">
                <label for="email" >E-mail</label>
                <input type="text" name="email" id="email" >
            </div>
            <div class="form">
                <label for="senha" >Senha</label>
                <input type="password" name="senha" id="senha" >   
            </div>
            <button type="submit" class="btn_login" value="Enviar" name="submit" > Entrar </button>
            <p id="redc_cadastro">Ainda não possui cadastro? <a href="cadastro.php" >Cadastre-se</a></p>  
        </form>
    </main >

    <footer>
        <!-- Container principal -->
    <div id="conteudo-rodape">
    <!-- Contatos e redes sociais -->
        <div id="contatos-rodape">
            <img src="imagens/Logo.png" alt="Logo Total Esporte">
            <p>Nossas redes sociais</p>
            <div id="redes-sociais-rodape">
            <a href="#" class="footer-link" id="instagram">
            <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="footer-link" id="facebook">
            <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="#" class="footer-link" id="whatsapp">
            <i class="fa-brands fa-whatsapp"></i>
            </a>
      </div>
    </div>

    <!-- Listas de serviços e produtos -->
    <ul class="lista-rodape">
      <li><h3>Serviços</h3></li>
      <li><p>Entrega grátis a partir de R$ 200,00</p></li>
      <li><p>30 dias para trocas e devoluções</p></li>
      <li><p>Atendimento online 24 horas</p></li>
    </ul>
    <ul class="lista-rodape">
      <li><h3>Produtos</h3></li>
      <li><p>Chuteira Futsal</p></li>
      <li><p>Chuteira Society</p></li>
      <li><p>Chuteira Campo</p></li>
    </ul>

    <!-- Suporte online -->
    <div id="suporte-rodape">
      <h3>Suporte Online</h3>
      <p>
        A Total Esporte oferece suporte online pelo e-mail suporte@totalesporte.com.
        Nossa equipe está pronta para ajudá-lo!
      </p>
      <div id="email-suporte">
        <a>
          <i class="fa-regular fa-envelope"></i>
        </a>
        <h1>suporte@totalesporte.com</h1>
      </div>
    </div>
  </div>

  <!-- Direitos autorais -->
  <div id="direitos-autorais-rodape">
    &#169; 2024 Total Esporte
  </div>
    </footer>
    
</body>
</html>