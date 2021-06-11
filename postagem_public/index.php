<?php
$acao = 'salvar';
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


   
    
    


    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mb-2">

    	<a href="" class="navbar-brand">LOGO</a>

    	<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
    			<a href="listagem.php" class="nav-link">Listar</a>
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

 <body id="corpo1" class="bg-light">
 
  
   
  <?php if(isset($_GET['salvo'] ) && $_GET['salvo'] == 1) { ?>


      <div class="bg-success pt-2 text-white d-flex justify-content-center">
      <h5>Tarefa inserida com sucesso!</h5>

    </div>     

        <?php } ?>

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
        <h2 id="mensagem" ></h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="removerSucesso()">Close</button>
        
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle">Notificação</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="info" >
        <h4> <strong id="del1">ID:</strong></h4> <p class="d-block" id="idPostagem"></p>
        <h4 ><strong id="del2">Titulo:</strong></h4> <p id="idTitulo"></p>
        <h4 ><strong id="del3">Texto:</strong></h4> <p id="idTexto"></p>
        <div id=""></div>
        <!--  data-dismiss="modal" -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"  id="cancelar">Cancelar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="recuperarValor()"  id="gravar" data-toggle="modal" data-target="#modalLoadiing" >Gravar</button>
      </div>
    </div>
  </div>
</div>



   
  
      <div  class="card-columns "> <!-- columns -->
      
   
  <?php foreach($postApi as $index => $obj)  { ?>
    <div class="card bg-dark text-white " style="box-shadow: 5px 5px 5px black;">
      <div class="card-header">
        Postagem Nº <?= $obj->id ?>
        
      </div>
      <div class="card-body" >
        <h4 id="<?= $obj->id ?>" class="card-title"><?= $obj->title ?></h4>
        <br>
        <h6 class="card-subtitle">Subtítulo do cartão</h6>
        <br>
        <p id="id<?= $obj->id ?>" class="card-text"><?= $obj->body ?></p>
       <button class="btn btn-info"  data-toggle="modal" data-target="#exampleModalCenter" onclick="pegar(<?= $obj->id ?>,'<?= $obj->title ?>')">Salva no banco </button>
      </div>
    </div>
    <!-- fim cartao -->



    
  <?php } ?>
    </div><!-- columns -->
      
   
  <nav>
      <ul class="pagination justify-content-center">
        <li class="page-item ">
          <a href="?pagina=1" class="page-link">Primeira</a>
        </li>
        <?php for($i=1 ; $i<=$totalDePaginasApi ; $i++ ) { ?>
          
        <li class="page-item  <?= $paginaAtiva == $i ? 'active' : '' ?>">
          <a href="?pagina=<?=$i?>" class="page-link "><?= $i ?></a>
        </li>
       
      <?php } ?>
        <li class="page-item">
          <a href="?pagina=<?=$totalDePaginasApi ?>" class="page-link">Última</a>
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