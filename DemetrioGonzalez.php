

<?php
    

    $valor = $_POST['saltos'];
    if(empty($valor)){
        echo '<p>array vacio</p><br>';
    }else{

       
        echo '<p>la longuitud del array es: </p> <br>'. $valor;
        echo'<br>';

        $arrays = array();
        echo'<br>';
        echo'-----';
        echo '<br>';

        $max_num = $valor;

        if($max_num <= 500){
            
            for ($x=0;$x<$max_num;$x++) {
                $num_aleatorio = rand(0,10);
                array_push($arrays,$num_aleatorio);
              }
        
           for($i=0; $i <= count($arrays); $i++){
               
               echo $arrays[$i]."<br>";

              
    
           }
            if(count($arrays) <=3){
                echo 'false';
            }else{
            echo 'true';
       }
        }else{
            echo '<p>: Solo puede ingresar hasta 500 </p> <br>';
        }

    
       
    }
   


?>

