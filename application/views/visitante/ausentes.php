<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
 <?php if($this->session->userdata("logged_user")) : ?>  

<!doctype html>
<html lang="pt-br">
<head>




	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cadastro de visitas</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?=base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=base_url(); ?>/assets/css/style.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?=base_url(); ?>/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?=base_url(); ?>/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=base_url(); ?>/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url(); ?>/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
  

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green">


    	<div class="sidebar-wrapper">
            <div class="logo">
                <img src="<?=base_url(); ?>/assets/img/logo.jpg" width="240" height="260" alt="Campanella"/>
            </div>

            <ul class="nav">
                <li>
                  <a href="<?= base_url('visitante/ausente') ?>">
                            <i class="pe-7s-graph"></i>
                            <p>Início</p>
                        </a>
                    </li>
                    <li>
                  <a href="<?= base_url('visitante/presentes') ?>">
                            <i class="pe-7s-graph"></i>
                            <p>Visitantes Presentes </p>
                        </a>
                    </li>
                    <li>
                  <a href="<?= base_url('visitante/listar') ?>">
                            <i class="pe-7s-graph"></i>
                            <p>Histórico</p>
                        </a>
                    </li>


            </ul>
    	</div>
    </div>

    <div class="main-panel">
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= base_url('Login/logout') ?>">Sair</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Alerta do Formulario --->
       
<?php if($this->session->flashdata("success")) : ?>
        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

<!-- Alerta do Formulario --->


            <!-- inicio do Formulario --->
            <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Cadastro de visitantes</h4>
                            </div>
                            <div class="content">
                               
                                <form name="form" action="<?= base_url() ?>Visitante/cadastrar" method="post">
                                    <div class="row">
                                       
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Data</label>
                                                <input type="date" class="form-control" name="data" value="" required>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Nome do Visitante</label>
                                                <input type="char" class="form-control" name="nome" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Placa do Veículo</label>
                                                <input type="text" name="placa" onkeyup="validarPlaca(this)" placeholder="ABC-1234" maxlength="8" autofocus class="form-control" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>RG</label>
                                                <input type="text" class="form-control" name="rg" maxlength="12" placeholder="Informe números" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>CPF</label>
                                                <input type="text" class="form-control" name="cpf"  placeholder="Informe números" maxlength="11" value="">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Entrada</label>
                                                <input type="time" class="form-control" name="hora" value="" required>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>Saída</label>
                                                <input type="time" class="form-control" name="horaS" value="">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Objetivo da visita</label>
                                                <textarea rows="5" class="form-control" name="descricao" placeholder="Descreva o objetivo" value="Mike"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit"  class="btn btn-success btn-fill pull-right" >Salvar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Final do Formulario -->


         

<!-- Inicio tabela -->
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Visitantes Presentes</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped" id="TableUsuarios" >
                                    <thead>
                                        <th>Data</th>
                                        <th>Visitante</th>
                                        <th>Placa do veículo</th>
                                    	<th class="text-center">RG</th>
                                        <th class="text-center">CPF</th>
                                        <th class="text-center">Entrada</th>                                     
                                        <th>Descrição</th> 
             

                                    </thead>
                                   
                                    <tbody>

                             <?php foreach ($visita as $vis) : ?>
                               
                                    
                                  <tr>

                                  <td><?= $vis['datas'] ?></td>  
                                  <td><?= $vis['nome'] ?></td>  
                                  <td><?= $vis['placa'] ?></td>  
                                  <td><?= $vis['RG'] ?></td>  
                                  <td class="text-center"><?= $vis['cpf'] ?></td>  
                                  <td class="text-center"><?= $vis['entrada'] ?></td> 
                                  <td><?= $vis['observacao'] ?></td> 

                                  <td class="text-center">
                                        <button type="button" data-toggle="modal" data-target="#ModalEditaSemestre"
                                        data-whateverid="<?php echo $vis['cod'] ?>" 
                                        data-whatevernome="<?php echo $vis['saida'] ?>"
                                        class="btn btn-success"> Saída </button>
                                        </td>


                                  </tr>
                                  
                                  <?php endforeach ?>  
                                    
                                    </tbody>                       
                                </table>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
<!--Final -->


        <footer class="footer">
            <div class="container-fluid">
        
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Sistema</a>
                </p>
            </div>
        </footer>


    </div>
</div>






<!--Inicio Modal -->
<div class="modal fade" id="ModalEditaSemestre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<form action="<?= base_url() ?>Ausente/editar"  method="post">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="title">Horário de saída</h4>
        
      </div>
      <div class="modal-body">

            <div class="form-group">
            <input type="hidden" name="cod" id="recipient-id">

                <label for="recipientname" class="col-form-label">Saída do Visitante</label>
                <input type="time" class="form-control" name="nomeV" id="recipient-name">
            </div>

            <button type="submit" class="btn btn-success">Salvar</button>
            <button type="reset" class="btn btn-danger" value="Cancelar" data-dismiss="modal">Cancelar

     </div>
    </div>
    
</form>

</div>
</div>
    
<!--Final Modal -->




</body>

       <!--   Core JS Files   -->
       <script src="<?=base_url(); ?>/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url(); ?>/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url(); ?>/assets/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?=base_url(); ?>/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?=base_url(); ?>/assets/js/demo.js"></script>

    <script type="text/javascript">

$('#ModalEditaSemestre').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget) // Button that triggered the modal
var recipientid = button.data('whateverid')
var recipientnome = button.data('whatevernome')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-title').text('New message to ' + recipientid)
modal.find('#recipient-id').val(recipientid)
modal.find('#recipient-name').val(recipientnome)
})
</script>

<?php else : ?>
    <?php redirect("Login");
    ?>
    
<?php endif ?>

</html>
 
