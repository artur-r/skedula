<?php 

include_once("../conexao.php");

session_start();

$nome =   $_POST['nome'];
$email =  $_POST['email'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'"; 
$result = $conn->query($sql);

 if($result-> num_rows > 0) {
    $retorno = $result->fetch_assoc();
    if ($email == $retorno['email']){
        header("location:../menu.php");;
    }else{
        echo 'erro';
    }
}
    
    if($result-> num_rows < 1){
        $retorno = $result->fetch_assoc();
        $sql = "INSERT INTO usuarios (usuario, email)
                VALUES ('$nome', '$email')";
        if (mysqli_query($conn,$sql)){
            header("location:../menu.php");
        }else{
            echo "erro";
        }       
    }
 


