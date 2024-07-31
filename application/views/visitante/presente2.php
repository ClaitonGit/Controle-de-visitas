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

	<title>Visitantes presente</title>

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
                  <a href="<?= base_url('visitante/listar') ?>">
                            <i class="pe-7s-graph"></i>
                            <p>Todos Visitantes</p>
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


         

<!-- Inicio tabela -->
    <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Visitantes presente</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <th>Data</th>
                                        <th>Visitante</th>
                                        <th>Placa do veículo</th>
                                    	<th class="text-center">RG</th>
                                        <th class="text-center">CPF</th>
                                        <th class="text-center">Entrada</th>  
                                        <th class="text-center">Saída</th>                                     
                                        <th>Descrição</th> 
             


                                    </thead>
                                   
                                    <tbody>

                             <?php foreach ($visitantes as $vi) : ?>
                               
                                    
                                  <tr>

                                  <td><?= $vi['datas'] ?></td>  
                                  <td><?= $vi['nome'] ?></td>  
                                  <td class="text-center" ><?= $vi['placa'] ?></td>  
                                  <td class="text-center" ><?= $vi['RG'] ?></td>  
                                  <td class="text-center"><?= $vi['cpf'] ?></td>  
                                  <td class="text-center"><?= $vi['entrada'] ?></td> 
                                  <td class="text-center"><?= $vi['saida'] ?></td> 
                                  <td><?= $vi['observacao'] ?></td> 
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


    <?php else : ?>
    <?php redirect("Login");
    ?>
    
<?php endif ?>


</html>
