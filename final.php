<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $palavra = $_SESSION['palavra'];
        $random = $_SESSION['random'];
        $vidas = $_SESSION['vidas'];
        
        if($vidas>0){
            echo "VOCÊ ACERTOU!<br/>A PALAVRA ERA: ". strtoupper($palavra)."<br/><br/>";
            // put your code here
        }else{
            echo "INFELIZMENTE ERRASTES<br/>A PALAVRA ERA: ". strtoupper($palavra)."<br/><br/>";
        }
        
        
        ?>
        
        <form action="index.php">
            <input type="submit" value="Jogar novamente"/>
        </form>
    </body>
</html>
