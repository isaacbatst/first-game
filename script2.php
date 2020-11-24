<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link type='text/css' rel='stylesheet' href='style.css'/>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>
    <body>
        <img alt= "logo PHP" id="phpHead"
             src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/>
    <div class="header">
        <h1>
            Let's get started with PHP!
        </h1>
    </div>
    
    <p><strong>Roda a Roda</strong>
    <br/>
    </p>
        <?php
        session_start();
        $arrayComida = $_SESSION['comidas'];
        $random = $_SESSION['random'];
        $arrayUnder = $_SESSION['under'];
        $arrayLetras = $_SESSION['letras'];
        $vidas = $_SESSION['vidas'];
        $usada = 0;
        $final = 0;
        $cont = 0;
        $letraUsada = strtolower($_GET["letra"]);
        $palavra = $arrayComida[$random];
       
        //verifica se o jogador ainda tem vidas 
        if($vidas<=1){
            header("Location: final.php");
        }
        
        foreach($arrayLetras as $item){
            if($letraUsada==$item){
                
            }
        }
        
        
       
        //verifica quantos espassos vazios tem
        foreach($arrayUnder as $item){
            if($item=="_ "){
                $cont++;
                
            } else {
                
            }
        }
        if($cont<=1){
            header("Location: final.php");
        }
        
        if(empty($arrayLetras)){
            $arrayLetras[] = $letraUsada;
        } else{
            foreach($arrayLetras as $item){
                if($item==$letraUsada){
                $usada = 1;
                break;
                } 
            }
            if($usada==0){
                $arrayLetras[]=$letraUsada;
            }            
        }
       
        
            
        if(substr_count($arrayComida[$random], $letraUsada)>0){
            echo "<p>Vidas: ". $vidas."</p>";
            for($i=1;$i<=$vidas;$i++){
                    
                echo '<img src="http://pngimg.com/uploads/heart/heart_PNG706.png"  id="vida" alt="coração" />';
                }
            echo "<br/>";
            echo "<p>Escreva uma letra!<br/><p/>";
            $palavraSplitada = str_split($arrayComida[$random]);
            for($i = 0; $i < sizeof($palavraSplitada);$i++){
                //echo $palavraSplitada[$i]."<br/>";
               
                if($letraUsada==$palavraSplitada[$i]){
                    $arrayUnder[$i]=$letraUsada;
                }
                if($i==0){
                    $arrayUnder[$i]= strtoupper($arrayUnder[$i]);
                }
                echo $arrayUnder[$i];
            }
            
        } else {
            $vidas = $vidas-1;
            echo "<p>Vidas: ". $vidas."</p>";
            for($i=1;$i<=$vidas;$i++){
                echo '<img id="vida" alt="coração"
                '. 'src="http://pngimg.com/uploads/heart/heart_PNG706.png" />';
                }
            echo "<br/>";
            echo '<p>Letra errada! Escreva outra letra!<br/><br/>';
            
            foreach($arrayUnder as $item){
                echo $item;
            }
            echo "</p>";
            
        }   
     
        // put your code here
        ?>
        
    <form method="GET" action="" >
            Letra: 
            <input type="text" maxlength="1" name="letra" style="width: 30px;"/><br/><br/>
            <input type="submit" value="Confirmar" style="width: 120px"/>
        </form>
    
    <p><strong>Letras usadas</strong></p>
        
        <?php
            foreach($arrayLetras as $item){
                echo strtoupper($item)." ";
            }
            echo "<br/><br/> C: ".$cont;
            echo "<br/> R: ".$random;
               
        $_SESSION['under'] = $arrayUnder;
        $_SESSION['letras'] = $arrayLetras;
        $_SESSION['palavra'] = $palavra;
        $_SESSION['vidas'] = $vidas;
        ?>
        
        
    </body>
</html>
