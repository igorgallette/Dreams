<!DOCTYPE html>
<html lang="en">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beak Manager</title>
</head>
<body>
<section class="" style="height:100%">
  <div class="container-fluid" style="height:100%">
    <div class="row" style="height:100%">
              
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form action="login.php" method="post" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login</h3>


            
            <?php 
            session_start();
               if (isset($_SESSION['nao_autenticado'])) : ?>
                  <p><small><small>Usuário ou Senha Inválidos</small></small></p>
            <?php 
               endif;
               unset($_SESSION['nao_autenticado']);
            ?>


            <div class="form-outline mb-4"> 
              <input type="text" name="usuario" id="form2Example18" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example18">Usuario</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" name="senha" id="form2Example28" class="form-control form-control-lg" />
              <label class="form-label" for="form2Example28">Senha</label>
            </div>

            <div class="pt-1 mb-4">
              <button type="submit" class="btn btn-info btn-lg btn-block" type="button">Login</button>
            </div>


            

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Esqueceu a senha?</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="https://img.freepik.com/fotos-gratis/o-sol-se-poe-em-paris-uma-cidade-historica-gerada-por-ia_188544-24135.jpg?w=1480&t=st=1693071289~exp=1693071889~hmac=54cd5e3b76c851a446a98306febd1abfd4cc922df82a3f25bc81c374e9eada24"
          alt="Login image" class="" style="object-fit: cover; object-position: left; height:100%;width:100%;">
      </div>
    </div>
  </div>
</section>
</body>
</html>





