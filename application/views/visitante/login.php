
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title><?= $title ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="<?= base_url() ?>Login/store">
    <div class="logo">
                <img src="<?=base_url(); ?>/assets/img/logo.jpg" width="240" height="260" alt="Campanella"/>
            </div>

        <?php if($this->session->flashdata("danger")) : ?>
            <div class="alert alert-danger" role="alert">
          Senha ou usuário errado tente novamente!!
          </div>
        <?php endif ?>

  <h1 class="h3 mb-3 font-weight-normal">Bem-vindo</h1>
  <label for="inputEmail" class="sr-only">Usuário</label>
  <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Senha" required>
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
 
              <br>
              <br>


               <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="">Sistema</a>
                </p>
</form>
</body>
</html>
