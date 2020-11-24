<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
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
    <?php
        session_start();
        
        $arrayPais = ["Brasil","Argentina","Inglaterra","Portugal","Espanha","Chile","Peru"];
        $arrayComida = ["Arroz", "Batata","Iogourte","Manteiga","Cereal","Banana","Carne","Frango"];  
        $arrayTemas = [$arrayComida,$arrayPais];
        
        $_SESSION['paises'] = $arrayPais;
        $_SESSION['comidas'] = $arrayComida;
        $_SESSION['temas'] = $arrayTemas;
    ?>
    <p><strong>Forca</strong>
    <br/>
    </p>
    
    <form action="script.php">
        <input type="radio" name="tema" value="comidas">Comidas<br/>
        <input type="radio" name="tema" value="paises">Países<br/><br/>
        <input type="submit" value="Começar"/>
    </form>
 
    
  </body>
</html>