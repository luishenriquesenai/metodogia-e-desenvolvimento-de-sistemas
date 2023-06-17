
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    

<div class="fixed-top">
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
  <a class="navbar-brand" href="#">Navbar</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading1">First</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading2">Second</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading3">Second</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading4">Second</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#scrollspyHeading5">Second</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pgusuario.php">cadastrar projetos</a>
    </li>
    <li>
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Cadastrar
            </button>
          </li>
          <li>
          <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal1">
              Login
            </button>
          </li>
    </div>
    

<!-- cadastrar -->
        
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="processa.php">
			               <label>Nome: </label>
			               <input type="text" name="nome" placeholder="Digite o nome completo" required><br><br>
                     
                     <label>e-mail: </label>
			               <input type="email" name="email" placeholder="Digite o nome completo" required><br><br>
			

                     <label>Senha: </label>
			               <input type="password" name="senha" placeholder="Digite o sua senha"required> <br><br>
			
			              <input type="submit" class="btn btn-success mx-3" value="Cadastrar">
		                <button type="button" class="btn bg-dark text-bg-success" data-bs-dismiss="modal">cancelar</button>                  
                    </form>
                  
                  </div>
                </div>
              </div>
            </div>
          </li>
<!-- fim cadastrar -->
<!--  modal login-->
         
              <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="validar.php">
			               <label>Nome: </label>
			               <input type="text" name="email" placeholder="Digite seu e-mail" required><br><br>
			
			               <label>Senha: </label>
			               <input type="password" name="senha" placeholder="Digite o sua senha"required><br><br>

						              <input type="submit" name="submit" class="btn btn-success mx-3" value="Login">
		                <button type="button" class="btn bg-dark text-bg-success" data-bs-dismiss="modal">cancelar</button>                  
                    </form>
                  
                  </div>
                </div>
              </div>
            </div>
            <!-- fim modal login -->


      </ul>
    </li>
  </ul>
</nav>
<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1">First heading</h4>
  <img src="./img/logo.jpg" alt="">

  <h4 id="scrollspyHeading2">Second heading</h4>
  <img src="./img/logo.jpg" alt="">

  <h4 id="scrollspyHeading3">Third heading</h4>
  <img src="./img/logo.jpg" alt="">

  <h4 id="scrollspyHeading4">Fourth heading</h4>
  <img src="./img/logo.jpg" alt="">
  
  <h4 id="scrollspyHeading5">Fifth heading</h4>
  <img src="./img/logo.jpg" alt="">
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>
</html>