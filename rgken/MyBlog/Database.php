<?php
    $db_sunucu="localhost";
    $db_name="projects";
    $db_name="root";
    $db_sifre="";
    try{
        $db_baglan=new PDO('mysql:host=localhost;dbname=projects;charset=utf8',$db_name,$db_sifre);
        //$db_baglan->setAttribute(attribute:PDO::ATTR_ERRMODE,value:PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

   //   $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
?>