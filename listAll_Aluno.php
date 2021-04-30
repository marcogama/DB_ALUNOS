<?php

//CRUD  (R)
//ALUNO MARCO ANTONIO RIBEIRO GAMA --- MAT.1810478300006

$servername="localhost";
$username="3daw";
$password="12341234";
$dbname="SCHULE";

//Estabelecendo conexão

$conn= new mysqli($servername,$username,$password,$dbname);

//Verificando conexão

if(conn->connect_error){
    die("Falha na conexao:".$conn->connect_error);
}
$sql="SELECT ID,MAT,NOME FROM SCHULE";
$resultado=$conn->query($sql);
if($resultado->num_rows>0){
    while($row=$resultado->fetch_assoc){
        echo "Id:".$row["ID"]"Aluno:".$row["MAT"]."<br>"."Nome:".$row["NOME"]."<br>";
    }
}else{
    echo "Nenhum resultado";
}
$conn->close();
?>