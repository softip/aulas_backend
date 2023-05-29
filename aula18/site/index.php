<?php
    include_once "../template/cabecalho.php";
    include_once "../produto/consultar_todos.php";
?>


<!-- Inicio do Menu -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
    
        <?php 
          $categorias = [];
          foreach($produtos as $key => $value): 
            if(!in_array($value["categoria"], $categorias)): 
              $categorias[] = $value["categoria"];
        ?>
          <li class="nav-item">
            <a class="nav-link" href="#">
               <?php echo $value["categoria"]; ?>
            </a>
          </li>

        <?php 
           endif;
           endforeach; 
       ?>

        <li class="nav-item">
            <a class="nav-link" href="../produto/index.php">
               Acesso Restrito
            </a>
        </li>
        
      
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
     <!-- Final do Menu -->

<hr>

<!-- Lista de Produtos -->
<div class="container">
    <div class="row row-cols-4 g-3">

    <?php foreach($produtos as $key => $produto):  ?> 
      <div class="col">
        <div class="card">
          <img src="../uploads/<?php echo $produto["foto"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title" ><?php echo $produto["nome"]; ?></h5>
              <a href="#" class="btn btn-primary">Ver produto</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    </div>
</div>
<!-- Final da Lista de Produtos -->

<hr>


<?php
    include_once "../template/rodape.php";
?>
