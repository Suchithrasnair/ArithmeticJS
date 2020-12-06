<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light navbarBg">
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="index.php">ADD <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="multiplication.php">MULTIPLY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="division.php">DIVIDE</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="subtraction.php">SUBTRACT</a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-4 col-md-2 col-lg-2 col-xs-2"></div>
        <div class="col col-12 col-sm-6 col-md-8 col-lg-8 col-xs-8 tablebg margintop">
            <h2 class="texthover"><center><i>SUBTRACTION</i></center></h2>
            <table class="table table-borderless tablebg">
                <tr>
                    <td>Number 1:</td>
                    <td><input type="text" class="form-control" id="num1"></td>
                </tr>
                <tr>
                    <td>Number 2:</td>
                    <td><input type="text" class="form-control" id="num2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success" onclick="SUBTRACTION()">ADD</button></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Result:</td>
                    <td><label for="" id="res"></label></td>
                </tr>
            </table>
        </div>
        <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xs-2"></div>
    </div>
</div>
<script>
  function SUBTRACTION(){
      var val1=parseInt(document.getElementById("num1").value)
      var val2=parseInt(document.getElementById("num2").value)
      var result=val1/val2
      document.getElementById("res").innerHTML=result
  }
  
</script>
</body>
</html>