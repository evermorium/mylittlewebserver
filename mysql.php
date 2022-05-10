<?php
    $servername = "localhost";
    $user = "root";

    $con = mysqli_connect($servername,$user);

    if(!$con){
        die("서버와의 연결 실패!: ".mysqli_connect_error());
    }
    echo "서버와의 연결 성공!";

    ?>