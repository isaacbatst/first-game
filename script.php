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
        <title>PHP!</title>
    </head>
    <body>
        <img alt= "logo PHP" id="phpHead"
             src="http://i1061.photobucket.com/albums/t480/ericqweinstein/php-logo_zps408c82d7.png"/> 
    <div class="header">
        <h1>
            Let's get started with PHP! 
            
        </h1>
        
    </div>
        <p><strong>Roda a Roda</strong><br/><br/>
            <?php
                $vidas = 5;
                echo "Vidas: ". $vidas."<p/>";
                for($i=1;$i<=$vidas;$i++){
                    
                echo '<img src="http://pngimg.com/uploads/heart/heart_PNG706.png"  id="vida" alt="coração" >';
                }
                echo "<br/>";
            ?>
        <p>Escreva uma letra!</p>
            
            <?php
                session_start();
                
                
                
                if($_GET["tema"]=="comidas"){
                    $arrayComida = $_SESSION['comidas'];
                } elseif($_GET["tema"]=="paises") {
                    $arrayComida = $_SESSION['paises'];
                }
                $arrayLetras = array();
                $arrayUnder = array();
                
                $random = rand(0, sizeof($arrayComida)-1);
        
                for($i = 0;$i< strlen($arrayComida[$random]);$i++){
                    $arrayUnder[$i] = "_ ";
                }
                
                echo '<p>';
                //echo "Palavra:_ _ _ _ _ ";
                foreach ($arrayUnder as $item){
                    echo $item;
                }
                echo "<p/>"
            ?>
        
        <form method="GET" action="script2.php" >
            Letra: 
            <input type="text" maxlength="1" name="letra" style="width: 30px;"/><br/><br/>
            <input type="submit" value="Confirmar" style="width: 120px"/>
        </form>
        <br/>
        <?php
        
        echo "Palavra: ";
        foreach($arrayComida as $item){
            if($item==$arrayComida[$random]){
                echo key($arrayComida);
            }
        }
        echo "<br/>"."R: ".$random;
        
        
        $arrayComida[$random] = strtolower($arrayComida[$random]);
        
        $_SESSION['letras'] = $arrayLetras;
        $_SESSION['comidas'] = $arrayComida;
        $_SESSION['random'] = $random;
        $_SESSION['under'] = $arrayUnder;
        $_SESSION['vidas'] = $vidas;
        
       
        //echo 'Nome: '.$arrayComida[$random]."<br> L: ".strlen($arrayComida[$random])." R: ".$random. "<br/>";
        
        // put your code here
        ?>
        
    </body>
</html>
