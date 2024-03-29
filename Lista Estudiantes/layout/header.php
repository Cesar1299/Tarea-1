<?php

$header = <<<EOF
<header>
<div class="collapse bg-dark" id="navbarHeader">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-7 py-4">
        <h4 class="text-white">Sobre esta web</h4>
        <p class="text-muted">Registros de Estudiante</p>
      </div>
      <div class="col-sm-4 offset-md-1 py-4">
        <h4 class="text-white">Contacto</h4>
      </div>
    </div>
  </div>
</div>
<div class="navbar navbar-dark bg-dark shadow-sm">
  <div class="container d-flex justify-content-between">
    <a href="../index.php" class="navbar-brand d-flex align-items-center">
      <i class="fa fa-address-card"></i>&nbsp;&nbsp;
      <strong>Estudiante</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</div>
</header>
EOF;

function printHeader(){
    echo $GLOBALS['header'];
}