<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

 <!-- Css e js -->
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/gerenciadorVagas.css">

 <!-- bootstrap local -->
 <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
 <script src="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>


<div class="container  mt-5 d-flex justify-content-between">

    <div class="mb-3 ml-1">
      <h3 id="title">Vagas</h3>
    </div>
    <div class="mb-3">
     
    </div>
    <div class="mb-3 ml-1">
    <a type="button"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" class="btn btn-success">Adicionar vaga</a>
    </div>
  
    
</div>

<div id="subBarra" class="container">

  <div class="mb-3 ml-1">
     <label><span><?php echo count($data['VagasEscolas']); ?></span> registros</label>
  </div>
  

</div>

<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serie</th>
      <th scope="col">Modalidade</th>
      <th scope="col">Quantidade</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data['VagasEscolas'] as $vagas): ?>
    <tr>
      <td><?php echo $vagas['serie']; ?></td>
      <td><?php echo $vagas['modalidade']; ?></td>
      <td><?php echo $vagas['quantidade']; ?></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar vagas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo URL_BASE; ?>admin/cadastrarVagas" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Série:</label>
            <input type="text" name="serie" class="form-control" id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Modalidade:</label>
            <select name="modalidade" id="modalidade" class="form-select" id="" required>
                <option onselect value="">Selecionar...</option>
                <option>Ensino fundamental</option>
                <option>Ensino médio</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Quantidade:</label>
            <input type="number" name="quantidade" class="form-control" id="recipient-name">
          </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Cadastrar vaga</button>
        </form>
      </div>
    </div>
  </div>
</div>


<script>

    $(document).ready(function() {

      $("#modalidade").select2();

    });

</script>
<script src="<?php echo URL_BASE; ?>Resource/javascript/postarVagas.js" type="text/javascript"></script>