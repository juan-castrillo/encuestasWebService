<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "encuestas";
//$port = "8012";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
//$conn = new mysqli($servername);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$idPregunta = 2;
//$sql = "select pregunta, idCategoria, visibilidad from (select p._id, pregunta from Preguntas p where _id = $idPregunta) t left join CategoriaElementoVisibilidad c on idElemento = t._id and tipoElemento = 0 FOR JSON AUTO";
$sql = "select pregunta from preguntas";
$result = $conn -> query($sql);
//$no = (string)$result;
//echo $result[4];

if($result)
	while ($row = mysqli_fetch_assoc($result))
	{
		echo $row['pregunta'];
		echo '<Br>';
	}	

	
else
	die("no consegui la consuta");

$conn -> close();
/*else{
	die("Connected successfully");
}*/
?>