<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sobre nós</title>

  <!--implementação bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <!--css-->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/termos_uso_profissional.css">

  <!--favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
  <header class="cabecalho">
    <div class="container-fluid" id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-light flex-md-row bd-navbar">

        <!--logo-->
        <a href="index.html" class="navbar-brand ml-5">
          <img class="logo" src="assets\img\logo-liame-branca.png" alt="Liame">
        </a>
        <!--botão para menu hamburguer mobile-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target-"#linksnavbar" aria-controls="liksnavbar" aria-expanded="false" aria-label="toggle">
          <span class="uil uil-bars"></span>
        </button>
        <!--link cabeçalho-->
        <div class="collapse navbar-collapse" id="linksnavbar">
          <div class="navbar-nav navbar-collapse justify-content-center">
            <a class="nav-item nav-link" id="especialistas-menu" href="php/especialistas.php">Especialistas</a>
            <a class="nav-item nav-link" id="consultas-menu" href="php/consultas.php">Consultas</a>
            <a class="nav-item nav-link" id="diário-de-bordo-menu" href="php/diario-de-bordo.php">Diário de Bordo</a>
            <a class="nav-item nav-link" id="quem-somos-menu" href="php/especialistas.php">Quem Somos</a>
            <a class="nav-item nav-link" id="planos-menu" href="php/planos.php">Planos para Especialistas</a>
          </div>
          <!--entrar/cadastro-->
          <div id="login" class="nav navbar-nav mr-5">
            <div class="nav-item">
              <a class="nav-item nav-link" href="layouts/entrar.html">
                <i class="uil uil-user"></i>
                Entrar
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="container content shadow-lg mt-5 mb-5">
      <h4 class="mb-4">Sobre nós</h4>

      <p> Os desenvolvedores da plataforma Liame estavam cursando o último ano do ensino médio
        quando iniciaram o desenvolvimento da mesma, para a efetivação do Trabalho de Conclusão de
        Curso (TCC), do curso de Informática para a Internet na Etec Santa Isabel, localizada na
        cidade de Santa Isabel no estado de São Paulo, Brasil.</p>

        <p> O projeto surgiu após a análise de informações, pois segundo o levantamento de dados do
            IBGE que houve em 2018, 15% de todas as gravidezes daquele ano eram de jovens entre 15 e
            19 anos e em 2019 37,4% de todas as gravidezes no Brasil eram de mulheres acima de 30 anos.
            Sendo assim com a plataforma é possível levar conhecimento, auxílio e orientação de forma
            totalmente gratuita e acessível para as mães e gestantes, desta forma é possível que elas se
            familiarizem com os novos procedimentos que sugiram nos últimos anos devido ao avanço da
            tecnologia.</p>

        <p> A plataforma Liame tem como missão auxiliar mães e gestantes, principalmente acima dos 30 anos
            e adolescentes no dia a dia, além de disponibilizar um diário de bordo desde o início da gestação
            até o primeiro ano de vida da criança, pois assim a mãe e a criança podem ter esses registros como
            uma forma de recordação.</p>

        <p> Consequentemente é possível atingir mais um público além das gestantes, os especialistas dessa
            área como ginecologistas, obstetras, doulas, psicólogos, entre outros, que podem se cadastrar
            na plataforma por um plano pago a partir de R$29,90, com esse valor é possível permitir que
            eles tenham um espaço para a divulgação do seu trabalho, possibilitando que as gestantes e
            mães marquem consultas com os mesmos.</p>
            <br><br>

  </main>

  <footer class="footer mt-5">
    <div class="container conteudo-footer">
      <div class="row">
        <div class="#">
          <a href="index.html"><img src="assets/img/logo.png" class="img-fluid logo-footer" alt="logo liame"></a>
        </div>
        <div class="col">
          <h5 class="text-uppercase">Mães</h5>
          <ul class="list-unstyled">
            <li class=""><a href="php/marcar_consultas.php">Agendar consulta</a></li>
            <li class=""><a href="php/especialistas.php">Especialistas</a></li>
            <li class=""><a href="php/diario_bordo_gestante.php">Diário de bordo</a></li>
            <li class=""><a href="php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
          </ul>
        </div>
        <div class="col">
          <h5 class="text-uppercase">Especialistas</h5>
          <ul class="list-unstyled">
            <li class=""><a href="php/planos.php">Planos para especialistas</a></li>
            <li class=""><a href="php/central_ajuda.php">Central de ajuda</a></li>
            <li class=""><a href="termos_uso_profissional.html">Termos de uso de profissional</a></li>
          </ul>
        </div>
        <div class="col">
          <h5 class="text-uppercase">Serviços</h5>
          <ul class="list-unstyled">
            <li class=""><a href="php/quem_somos.php">Quem somos</a></li>
            <li class=""><a href="php/contato.php">Contato</a></li>
            <li class=""><a href="php/privacidade_cookie.php">Privacidade e cookies</a></li>
            <li class=""><a href="termos_condicoes_uso.html">Termos e condições de uso</a></li>
          </ul>
        </div>
        <div class="col">
          <div class="social-links">
            <a class="nav-item nav-link" href="https://www.instagram.com/projeto_liame/">
              <i class="uil uil-instagram"></i>
            </a>
            <a class="nav-item nav-link" href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
              <i class="uil uil-facebook"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
