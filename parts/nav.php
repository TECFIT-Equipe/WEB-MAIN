<?php

include_once (__DIR__ .'/../links/head.php');

?>
<style>
   .site-navbar {
    position: fixed; 
    top: 0; 
    left: 0;
    width: 100%; 
    background-color: #333; 
    overflow: hidden; 
    z-index: 1000; 
}
body {
  padding-top: 125px; 
}
</style>
<header class="site-navbar site-navbar-target" style="background-color: #001620;" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active"><a href="../index.php" class="nav-link">Home</a></li>
                  <li><a href="../cliente/index.php" class="nav-link">Assinar</a></li>
                  <li><a href="../servicos/servicos.php" class="nav-link">Serviços</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="../index.php"><img src="/logosemfundocletra.png"></a>
              </div>
              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3 text-black"></span></a></div>
            </div>
            <div class="col-lg-4">
              <nav class="site-navigation text-left mr-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="../sobre/sobre.php" class="nav-link">Sobre</a></li>
                  <li><a href="../contato/contato.php" class="nav-link">Contato</a></li>
                </ul>
              </nav>
            </div>
            

          </div>
        </div>

      </header>