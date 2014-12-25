<?php
$link = mysqli_connect("localhost",
    "root",
    "lict@2",
    "ftfl");
$query="INSERT INTO `ftfl`.`emails` (
                                    `email` ,
                                    `created`
)
VALUES (
    '".$_POST['email']."', NOW()
);";

mysqli_query($link, $query);

//header('location:show_inf.php');
