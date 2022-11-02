<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
  </head>
  <body>

  <h1>
</h1>


  <div class="container">
     <div class="row">
        <div class="col-12">
          <form action="index.php" method="POST">
       <h2>Toonii mashin</h2>
       <input name="too1"/>
       <input name="too2"/>
       <select name="uildel" class="form-select" aria-label="Default select example">
  <option selected></option>
  <option value="+">+</option>
  <option value="-">-</option>
  <option value="*">*</option>
  <option value="/">/</option>
</select>
<button type="submit">Calculate</button>
</form>
</div>
    </div>
  </div>

  <?php

if(isset($_POST['too1']) && $_POST['too1'] != "" && 
isset($_POST['too2']) && $_POST['too2'] != "" &&
isset($_POST['uildel']) && $_POST['uildel'] != "")
{
   $uildel = $_POST['uildel'];
   switch($uildel){
    case "+":
      $hariu = $_POST['too1'] + $_POST['too2'];
      break;
    case "-":
      $hariu = $_POST['too1'] - $_POST['too2'];
      break;
    case "*":
      $hariu = $_POST['too1'] * $_POST['too2'];
      break;
    case "/":
      $hariu = $_POST['too1'] / $_POST['too2'];
      break;
    default:
      $hariu = 'Aldaatai baina';
   }
   echo $hariu;
   
}

?>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
