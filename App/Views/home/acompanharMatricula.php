<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

 <!-- Css e js -->
  <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/css/gerenciadorVagas.css">

 <!-- bootstrap local -->
 <link rel="stylesheet" href="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">
 <script src="<?php echo URL_BASE; ?>Resource/bootstrap-5.0.0-beta2-dist/js/bootstrap.bundle.min.js"></script>


<div class="container  mt-5 d-flex justify-content-between">

    <div class="mb-3 ml-1">
      <h3 id="title">Acompanhar matrícula</h3>
    </div>
    <div class="mb-3">
      <form class="row g-10" action="<?php echo URL_BASE; ?>educacional/acompanhar" method="POST">
           <div class="col-md-11">
           	  
              <input class="form-control" type="search" name="cpf" placeholder="CPF DO ALUNO" aria-label="Search">       
           </div>
           <div class="col-md-1">
               <button class="btn btn-outline-success my-2 my-sm-0" name="buscar" type="submit">Buscar</button>
           </div>
      </form>
    </div>
    <div class="mb-3 ml-1">
     <a type="button" href="<?php echo URL_BASE; ?>educacional/home" class=" btn btn-danger">Voltar ao menu</a>
    </div>
  
    
</div>

<div id="subBarra" class="container mt-5 d-flex justify-content-between p-2 mb-2 bg-dark text-white">

  <div class="mb-3 ml-1">
     <label><?php echo $data['statusAluno'][0]['cpf']; ?></label>
  </div>
  <div class="mb-3 ml-1">
     <h3><?php echo $data['statusAluno'][0]['nome']; ?></h3>
  </div>
  <div class="mb-3 ml-1">
  	 <?php if($data['statusAluno'][0]['status'] == 'Espera'): ?>

     	<h3 class="p-1 mb-2 bg-danger text-white"><?php echo $data['statusAluno'][0]['status']; ?></h3>

     <?php else: ?>

     	<h3 class="p-1 mb-2 bg-success text-white">Matrícula aprovada</h3><br>
     	<label>Compareça a escola escolhida </label>

     <?php endif; ?>
  </div>

</div>
	  <table class="table mt-2">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Nome</th>
	      <th scope="col">Cpf</th>
	      <th scope="col">data nascimento</th>
	      <th scope="col">série escolar</th>
	      <th scope="col">Modalidade</th>
	      <th scope="col">Escola de interesse</th>
	      <th scope="col">Status</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php foreach($data['statusAluno'] as $vagas): ?>
	    <tr>
	      <td><?php echo $vagas['nome']; ?></td>
	      <td><?php echo $vagas['cpf']; ?></td>
	      <td><?php echo $vagas['dataNascimento']; ?></td>
	      <td><?php echo $vagas['serieEscolar']; ?></td>
	      <td><?php echo $vagas['nivelEscolar']; ?></td>
	      <td><?php echo $vagas['razaoSocial']; ?></td>
	      <td><?php echo $vagas['status']; ?></td>
	      
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>

<div class="container mt-5 d-flex justify-content-between p-3 mb-2 mb-2 bg-dark text-white">

  <div class="mb-3 ml-1">
     <label><?php echo $data['statusAluno'][0]['cidade']; ?> - <?php echo $data['statusAluno'][0]['estado']; ?></label>
  </div>
  <div class="mb-3 ml-1">
     <h3><?php echo $data['statusAluno'][0]['razaoSocial']; ?></h3>
     
  </div>
  <div class="mb-3 ml-1">
  	
  </div>

</div>