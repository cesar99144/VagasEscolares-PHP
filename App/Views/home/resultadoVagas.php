<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

 <!-- Css e js -->
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/resultadoVagas.css">

 <!-- bootstrap local -->
 <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
 <script src="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="container  mt-5 d-flex justify-content-between">

    <div class="mb-3 ml-1">
      <h3 id="title">Vagas</h3>
    </div>
    <div class="mb-3">
        <form action="<?php echo URL_BASE; ?>educacional/buscarVagasEscolas" method="POST">
              <select class="" id="escolas" name="escolas">
                 <option onselect="" value="">Selecionar escola...</option>
                 <?php foreach($data['vagasEscolas'] as $escolas): ?>
                     <option value="<?php echo $escolas['id']; ?>"><?php echo $escolas['razaoSocial']; ?></option>
                  <?php endforeach; ?>
              </select><br>
              <input type="submit" name="buscar" value="Buscar" id="buscarButton">
        </form>
    </div>
    <div class="mb-3 ml-1">
    <a type="button" href="<?php echo URL_BASE; ?>educacional/home" class=" btn btn-danger">Voltar ao menu</a>
    </div>
  
    
</div>

<div id="subBarra" class="container">

  <div class="mb-3 ml-1">
     <label><span><?php echo count($data['vagasEscolas']); ?></span> registros</label>
  </div>
  

</div>

<table class="table mt-2">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Escola</th>
      <th scope="col">Serie</th>
      <th scope="col">Modalidade</th>
      <th scope="col">Quantidade vagas</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data['vagasEscolas'] as $vagas): ?>
    <tr>
      <td><?php echo $vagas['razaoSocial']; ?></td>
      <td><?php echo $vagas['serie']; ?></td>
      <td><?php echo $vagas['modalidade']; ?></td>
      <td><?php echo $vagas['quantidade']; ?></td>
      <td><a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="open-AddBookDialog btn btn-primary btn-sm" data-id="<?php echo $vagas['idEscola']; ?>" data-modalidade="<?php echo $vagas['modalidade']; ?>" data-serie="<?php echo $vagas['serie']; ?>" >Solicitar matrícula</a></td>
      
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitar matrícula</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo URL_BASE; ?>educacional/solicitarMatricula" method="POST">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">CPF:</label>
            <input type="number" name="cpf" class="form-control" id="cpf" placeholder="Apenas números" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Data de nascimento:</label>
            <input type="date" name="dataUser" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Modalidade:</label>
            <input type="text" name="modalidade" class="form-control" id="modalidade" readonly="">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Série:</label>
            <input type="number" name="serie" class="form-control" id="serie" readonly="">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Identificação da escola:</label>
            <input type="number" name="idEscola" class="form-control" id="idEscola" readonly="">
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

<script src="<?php echo URL_BASE; ?>Resource/javascript/resultadoVagas.js" type="text/javascript"></script>