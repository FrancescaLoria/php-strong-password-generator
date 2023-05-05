
<?php
    function passGenerator(){
        $generatedPass = "";
        $passLength = $_GET["pwd"];
        $chars = [];
         $chars = array_merge(range("a","z"),range("A", "Z"),range(0,9));
        $chars[] = "?";  
        $chars[] = "!";
        $chars[] = "%";
        

        while (strlen($generatedPass) < $passLength ) {
           $randomNum = rand(0, count($chars));

           $generatedPass = $generatedPass . $chars[$randomNum];
        }

        return $generatedPass;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
    <title>PHP-STRONG-PASSWORD-GENERATOR</title>
  </head>
  <body>
    <div class="container">
      <div class="title text-center">Strong Password Generator</div>
      <div class="sub-title text-center my-3">Genera una password sicura</div>
      <div class="card my-5">
        <div class="card-body">
            <?php 
                if(isset($_GET["pwd"]) && strlen($_GET["pwd"]) > 0) {
                    ?> <div class="pass">LA TUA PASSAWORD: <?php echo passGenerator()?></div>
                    </div> <?php
                }
            ?>
      </div>
      <div class="card my-5">
        <div class="card-body">
          <form class="text-center" action="index.php" method="GET">
            <label for="pwd">Lunghezza password:</label>
            <input
              type="number"
              id="pwd"
              name="pwd"
              minlength="8"
            /><br /><br />
            <button type="submit" class="btn btn-primary">INVIA</button>
            <button type="reset" class="btn btn-danger">ANNULLA</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
