<?php

//CRUD  (C)
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

//Criando tabela

$sql="CREATE TABLE ALUNO (
ID   INT(5) AUTO_INCREMENT PRIMARY KEY,
MAT  INT(5) UNSIGNED NOTNULL,
NOME        VARCHAR(20) NOTNULL,
S_NOME       VARCHAR(30) NOTNULL,
DT_NASC       DATE NOTNULL,
N_CEL        INTEGER(11) UNSIGNED,
N_TEL        INTEGER(11) UNSIGNED,
)";

if(conn->query($sql)===TRUE){
    echo "Tabela criada com sucesso";
}else{
    echo "Erro ao criar tabela:".$conn->error;
}
$conn->close();
?>