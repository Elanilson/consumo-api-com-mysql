<?php
$acao = 'listar';
require 'postagem_Controller.php';
   
?>
<html lang="pt-br">
  <head>

    <title>Bootstrap - botões</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

   
  <!--  <script src="js/jquery-3.6.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript">
      
    </script>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-2">

      <a href="" class="navbar-brand">LOGO</a>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">Home</a>
        </li>
      </ul>
    </nav>

  </head>

 <body id="corpo" class="bg-light">
 
          <!-- Modal -->
<div class="modal fade" id="modalLoadiing" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="loadingModal" style="text-align: center;">
        <h2> Removido com sucesso!</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Notificação</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4> Deseja realmente remover ?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <button type="button" class="btn btn-danger" onclick="remover()" data-dismiss="modal"
        data-toggle="modal" data-target="#modalLoadiing">Sim</button>
      </div>
    </div>
  </div>
</div>

 
  
      <div  class="card-columns "> <!-- columns -->
      
   <?php foreach($postagem as $index => $obj)  { ?>
  
    <div class="card bg-dark text-white " style="box-shadow: 5px 5px 5px black;">
      <div id="post<?= $obj->id ?>" class="card-header">
        Postagem Nº <?= $obj->id ?>
        
      </div>
      <div class="card-body">
        <h4 id="Subtítulo do cartão" class="card-title"><?= $obj->titulo ?></h4>
        <br>
        <h6 class="card-subtitle">Subtítulo do cartão</h6>
        <br>
        <p id="Subtítulo do cartão" class="card-text"><?= $obj->texto ?></p>
       <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" onclick="pegarID(<?= $obj->id ?>)" >Remover </button>
      </div>
    </div>
    <!-- fim cartao -->



 <?php } ?>
    </div><!-- columns -->
      
   
        <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item ">
          <a href="?pagina=1" class="page-link">Primeirra</a>
        </li>
        <?php for($i=1 ; $i<=$total_de_pagina ; $i++ ) { ?>
          
        <li class="page-item  <?= $paginaAtiva == $i ? 'active' : '' ?>">
          <a href="?pagina=<?=$i?>" class="page-link "><?= $i ?></a>
        </li>
       
      <?php } ?>
        <li class="page-item">
          <a href="?pagina=<?=$total_de_pagina ?>" class="page-link">Última</a>
        </li>
      </ul>
    </nav>  
 

  



    
 
       
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> -->
    <script src="js/bootstrap.min.js"></script>
  </body>


</html>