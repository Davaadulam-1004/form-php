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

  function hoosonbish($field){
    if($field != "")
    {
      return true;
    }
    return false;
  }
  
  function calculate($too1,$too2,$uildel){
    switch($uildel){
      case "+":
        return $_POST['too1'] + $_POST['too2'];
      case "-":
        return $_POST['too1'] - $_POST['too2'];
      case "*":
        return $_POST['too1'] * $_POST['too2'];
      case "/":
        return $_POST['too1'] / $_POST['too2'];
      default:
      return 'Aldaatai baina';
     }
  }

if(hoosonbish($_POST['too1']) && hoosonbish($_POST['too2']) && hoosonbish($_POST['uildel']))
{
  $uildel = $_POST['uildel'];
  $hariu = calculate($_POST['too1'],$_POST['too2'],$_POST['uildel']);
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
