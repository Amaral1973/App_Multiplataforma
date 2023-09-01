<?php
    include 'conecta.php';
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $query = $conn->query("SELECT * FROM cliente WHERE nome='$nome' AND celular='$celular'");
    if (mysqli_num_rows($query) > 0) 
    {
        echo "<script language='javascript' type='text/javascript'>
             alert('Cliente já está em nossa base de dados!');
             window.location.href='index.php';
             </script>";
             exit();
    }
    else 
    {
        $sql = "INSERT INTO cliente(nome,celular) VALUES ('$nome','$celular')";
        if (mysqli_query($conn, $sql)) 
        {
            echo "<script language='javascript' type='text/javascript'>
             alert('Cliente cadastrado com sucesso!');
             window.location.href='index.php';
             </script>";
        }
        else 
        {
            echo "<script language='javascript' type='text/javascript'>
             alert('Não foi possível efetuar o cadastro!');
             window.location.href='index.php';
             </script>";
        }
    }
    mysqli_close($conn);
?>