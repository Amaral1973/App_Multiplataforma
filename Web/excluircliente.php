<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM cliente WHERE id=$id";
    if (mysqli_query($conn, $sql)) 
    {
        echo "<script language='javascript' type='text/javascript'>window.location.href='index.php'</script>";
    }
?>