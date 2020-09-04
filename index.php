<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <title>Layout</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
      
       <div class="menu">
         <nav class="navbar navbar-expand-lg navbar-dark fixed-top menu">
        
            <button class="navbar-toggler m-auto" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse m-auto " id="navbarText">
              <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
              </ul>
             
            </div>
          </nav>
       </div>
       <section class="area">
         <div class="container m-auto">
          <div class="row">
            <div class="col bg-light">
              <h3>Serviços</h3>
              <p>Venha aproveitar nossos serviços! .</p>
              <p>Tenha uma agenda digital personalizada com acesso a whatsapp sem adicionar os contatos em seu aparelho. </p>
              <p>Faça imagens com sus marca d'agua facilmente.</p>
              <p>Tenha acessa a vários conteúdos exclusivos!</p>
             
                
                
                
                
                <div id='server' >
                <?
                
                
                
                $ip =  $_SERVER['REMOTE_ADDR'] ; 
                
                
                if (!isset($id)){
                  echo "seu ip é:";
                  echo $ip;
                }
                ?></div>
            </div>
            <div class="col login text-light">
              <h1 class="text-center">Login</h1>

              <form>
                <div class="form-group">
                  <input type="email" name="login" placeholder="seuemail@email.com" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="senha" placeholder="Senha" class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="enviar">
                </div>
              </form>

            </div>

          </div>
         </div>
         
       </section>
       
        

        <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
        <script src="bootstrap/js/popper.min.js" ></script>
        <script src="bootstrap/js/bootstrap.min.js" ></script>
    </body>
</html>