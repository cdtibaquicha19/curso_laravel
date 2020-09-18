<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo curso laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
        


    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">php console </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
             
            </div>
          </nav>
          <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1>Consola php </h1>
              <p>Esto es una consola ...</p>
            </div>
          </div>
          <div class="container">
            <div class="row">
            <div class="col-12">
                  <div class="p-3 m-2 bg-dark text-white">
                  <h6>Clase variables y tipos de datos  : </h6>
                    <?php
                      $name = "max"; 
                      $esviejo = true ;
                      $year = 1994 ;
                      $kms = 54.4 ;
                      echo "hola " . $name ." " . $year ;
                    ?>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-12">
              <div class="p-3 m-2 bg-dark text-white">
                <h6>Clase operadores : </h6>
                <?php
                  $num1 = 1 ; 
                  $num2 = 1 ;
                 // $resultado = $num1 + $num2  ; 

                 echo " El resultado  de la suma  es : ". ($num1+$num2) ."<br>"; 
                 echo " El resultado  de la resta  es : ". ($num1-$num2) ."<br>"; 
                 echo " El resultado  de la multiplicacion  es : ". ($num1*$num2) ."<br>"; 
                 echo " El resultado  de la exponenciacion  es : ". ($num1**$num2) ."<br>"; 
                 

                ?>
              </div>
              </div>
            </div>



          </div>


        


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>