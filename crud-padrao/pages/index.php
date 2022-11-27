<?php include 'header.php' ?>

<body>

    <!--Header-->
<div id="header">

    <div class="container">

    </head>
    <body>
      <!--HEADER-->
      <div id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                  <a class="navbar-brand" href="img-fluid">
                    <img src="../assets/img/lista.png" width="50" class="img-fluid"  />
              </a>
              
            
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarNav"
              aria-controls="navbarNav"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
              <li class="nav-item">
          <a class="nav-link active" href="<?=URL_BASE.'/pages'?>">Home</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link active" href="sobrenos.html">
                    Sobre Nos</a>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="isessao.html">
                    Iniciar Sessao</a>
                  </a>
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URL_BASE.'pages/tarefas/'?>">Tarefas</a>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../pages/tipousuario/">Tipo Usuario</a>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../pages/usuario/">Usuario</a>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--//HEADER-->

      <!--SLIDER-->
       <div id="slider">
           <div class="container">
               <div class="row">
                   <div class="col-md-4 align-self-center text-left"> 
                    <h1>VOCE DESEJA UM OTIMO GERENCIADOR PARA SUAS TAREFAS?</h1>
                    <H3>Deixar em ordem suas tarefas e compromissos nunca foi tao facil!!</H3>
                    <a href="cadastro.html" class="btn btn-warning"> COMECE JA</a>
                    </div>
                   <div class="col-md-8 align-self-center text-center">
                       <img src="../assets/img/home.png" alt="" srcset="">
                   </div>
               </div>
           </div>
       </div>
      <!--SLIDER-->
 




   <!--JS-->
   <script
   src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
   integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
   crossorigin="anonymous"
 ></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="js/owl.carousel.min.js"></script>
 <script src="js/isotope.pkgd.min.js"></script>
 <script src="js/magnify/jquery.magnific-popup.min.js"></script>
 <script src="js/main.js"></script>
</body>

<?php include 'footer.php' ?>
