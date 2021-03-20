<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

 <!-- Css e js -->
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/gerenciadorVagas.css">

 <!-- bootstrap local -->
 <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
 <script src="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>


<div class="container  mt-5 d-flex justify-content-between">

    <div class="mb-3 ml-1">
      <h3 id="title">Solicitações matrículas</h3>
    </div>
    <div class="mb-3">
     
    </div>
   
  
    
</div>

<div id="subBarra" class="container">

  <div class="mb-3 ml-1">
     <label><span><?php echo count($data['solicitacoesVagas']); ?></span> registros</label>
  </div>
  

</div>

<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Data nascimento</th>
      <th scope="col">Série escolar</th>
      <th scope="col">Nível escolar</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data['solicitacoesVagas'] as $vagas): ?>
    <tr>
      <td><?php echo $vagas['nome']; ?></td>
      <td><?php echo $vagas['cpf']; ?></td>
      <td><?php echo $vagas['dataNascimento']; ?></td>
      <td><?php echo $vagas['serieEscolar']; ?></td>
      <td><?php echo $vagas['nivelEscolar']; ?></td>
      <td><a type="button" class="btn btn-primary btn-sm">Liberar</a></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>



<script src="<?php echo URL_BASE; ?>Resource/javascript/postarVagas.js" type="text/javascript"></script>