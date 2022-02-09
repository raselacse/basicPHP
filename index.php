<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic php</title>
</head>
<body>
    <h1>Basic php Project</h1>
    <?php
    echo "<h4>Condition Satement</h4>";
        $a = 8;
        $b = 9;
        $c = 10;

        if($a>$b){
            if($a>$c){
                echo "Largest A = ". $a;
            }else{
                echo "Largest B = ". $b;
            }
        }elseif($b>$c){
            echo "Largest B = ". $b;
        }else{
            echo "Largest C = ". $c . "<br>";
            echo "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum aut modi nulla numquam repudiandae aliquam quae libero dolor id earum?";
        }
    ?>

    <?php
        echo "<h4>Condition Satement</h4>";
        $a = "5";
        $b = 5.00;
        $c = "5";

        
        if($a === $b){
            echo "true ";
        }else{
            echo "false ";
        }
        
        if($a === $c){
            echo "true ";
        }else{
            echo "false ";
        }
        
        if($b === $c){
            echo "true";
        }else{
            echo "false ";
        }
    ?>

    <?php
        echo "<h4>Function</h4>";
        function isEven($num){
            if($num%2 == 0){
                echo "Even";
            }else{
                echo "Odd";
            }
        }
        isEven(6);
    ?>
    <?php
        echo "<h4>Function</h4>";
        function largestNumber($a, $b, $c){
            if($a>$b){
                if($a>$c){
                    echo "Largest A = ". $a;
                }else{
                    echo "Largest B = ". $b;
                }
            }elseif($b>$c){
                echo "Largest B = ". $b;
            }else{
                echo "Largest C = ". $c . "<br>";
            }
        }
        largestNumber(8,9,10);
    ?>
    <?php
        echo "<h4>Foreach</h4>";
        function evenOdd($ar){
            foreach($ar as $a){
                if($a%2 == 0){
                    echo "<br> ".$a." is Even";
                }else{
                    echo "<br> ".$a." is Odd";
                }
            }
        }
        $ar = array(5,6,7,8,9,10);
        evenOdd($ar);
    ?>

    
</body>
</html>