<!doctype html>
<html lang="en">
  <head>
    <title>Result</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
  body{     
      display:flex;
      height:100vh;    
    }
  h2{
 
      color: Black;
      text-align: center;
      text-shadow: 2px 2px 5px red;
      margin: auto;
  }
  </style>
  <body>
    <h2>
    <?php
        $a = $_POST['Number1'];
        $b = $_POST['Number2'];
        $sum = $a + $b;       
        echo "<h2>The sum of two numbers is : ". $sum ." </h2>"
    ?>
  </body>
</html>