<?php

//CRUD (U)
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
$NOME_Err=$MAT_Err=$S_NOME_Err=$DT_NASC_Err="";
$MAT=$NOME=$S_NOME=$DT_NASC="";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
			                            if (empty($_POST["MAT"])){
													                    $MAT_Err="Insira a matricula";
										}else{
											 $MAT=$_POST["MAT"];
											 if (!preg_match("[0-9]",$MAT)){
														                  $MAT_Err="Insira apenas numeros";
											 } 
										}
										if (empty($_POST["NOME"])){
													             $NOME_Err="Insira o Nome";
										}else{
											 $NOME=$_POST["NOME"];
											 if (!preg_match("[A-Z, ,a-z]",$NOME)){         
                                                                                  $NOME_Err="Nome deve ter apenas letras";
											 } 
										}
										if (empty($_POST["S_NOME"])){
													               $S_NOME_Err="Insira o sobrenome";
										}else{
											 $S_NOME=$_POST["S_NOME"];
											 if (!preg_match("[A-Z, ,a-z]",$S_NOME)){      
                                                                                  $S_NOME_Err="Nome deve ter apenas letras";
											 } 
										}
                                        if (empty($_POST["DT_NASC"])){
													               $DT_NASC_Err="Insira a data de nascimento";
										}else{
											 $DT_NASC=$_POST["DT_NASC"];
										}
                                        $N_CEL=$_POST["N_CEL"];
                                        $N_TEL=$_POST["N_TEL"];
}

$sql="UPDATE SCHULE SET NOME='$NOME',S_NOME='$S_NOME',
      D_NASC='$DT_NASC',N_CEL='$N_CEL',N_TEL='$N_TEL' WHERE MAT='$MAT';
if($conn->query($sql)===TRUE){
    echo "Alterado com sucesso";
}else{
    echo "Erro na alteracao".$conn_error;
}
$conn->close();
?>