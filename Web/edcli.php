<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $sql = "UPDATE cliente SET nome=?,celular=? WHERE id=?";
    $smt = $conn->prepare($sql) or die($conn->error);
    if (!$smt) {
        echo 'Erro na atualização'.$conn->errno.'-'.$conn->error;
    }
    $smt->bind_param('ssi',$nome,$celular,$id);
    $smt->execute();
    $conn->close();
    header("Location:index.php");
?>