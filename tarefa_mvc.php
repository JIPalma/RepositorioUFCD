<?php
include 'connect.php';
?>
<!--INCLUDE IS A PURE PHP TO CONNECT TO THE DATABASE, THIS IS THE HTML WITH THE PHP INSTRUCTIONS OF WHAT TO GET FROM
THE DATABASE-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world! </br> <?php echo($db_on);    ?> </h1>
</br>
<?php
  $sql = "Select * From areas Order By name";
  $result = $mysqli->query($sql); //ligacao a base de dados atraves do conector mysqli. 
//A variavel result vai ter o resultado do query feito a base de dados
//para mostrar os dados vamos usar um ciclo while
  while($row = $result->fetch_assoc()){
    echo '<p>'.$row["name"].'</p>';
    //para cada linha de resultados o while vai escrever esta linha
    echo '<p>'.'id: '.$row["id"].'nome: '.$row["name"].'</p>';
  }

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>