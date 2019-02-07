<!DOCTYPE html>
<html lang="es">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <style>
            body{

                background-color: #E85F79;
                text-align: center;

            }

        </style>
    </head>
    <body>

    
        <?php
        /*
         * 
         * BUCLES 
        for ($i=0; $i < 9; $i++) {

            echo '<img src="https://picsum.photos/200/300/?random"> ';
        }
         
         
        
        while (rand(1, 10) != 5){
            
            echo '<img src="https://picsum.photos/200/300/?random">';
           
        }
        
        
        
        */
        
        
        /*
        
            $frutas = array("platano","fresa","mango","ciruela");
          //  print_r($frutas);
            
            echo $frutas[2];
            
            echo '<br />';
            
            echo count($frutas) . " elementos";
            
            echo "<br /> ";
            
            
            for ($i = 0; $i < count($frutas); $i++) {
                
                echo $frutas[$i] . " <br />";
                
            }    
            echo "<br />";
            
        */    
            
            $edades = array("Marcos" => 34,"Alex" => 31,"Juan" => 24);
            print_r($edades);
            
            echo '<br>';
            
            echo $edades["Alex"];
            
            echo '<br>';
            
            foreach ($edades as $key => $value) {
                
                
                if ( $value >30){
                echo $key . "tiene el valor de ".  $value . "<br />";
                }
            }
                
            
        ?>





    </body>
</html>
