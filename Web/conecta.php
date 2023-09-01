<?php
    $conn = mysqli_connect("sql.freedb.tech","freedb_abc321973","t8PtvCFeR3s?69r","freedb_testemulti");
    mysqli_set_charset($conn,"utf8");
    if (!$conn) {
        echo "Debugging errno:".mysqli_connect_errno().PHP_EOL;
        echo "Debugging error:".mysqli_connect_error().PHP_EOL;
        exit;
    }
?>