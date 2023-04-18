<html>
<head>
<title> Exercici4 </title>
</head>
<body>
<?php
abstract class Shape {
            
            protected $ancho;
            protected $alto;
                //Método constructor
            public function __construct($ample, $alt)
            {
             $this->ancho=$ample;
             $this->alto=$alt;
            }
        }
    
       class Rectangle extends Shape {
           
            public function area() 
            {
                $areaRectangle=($this->ancho*$this->alto);
                //echo "L'àrea del rectangle és ".$areaRectangle.'<br>';
            }
        }
    
        class Triangle extends Shape {
            
            public function area() 
            {
                $areaTriangle=($this->ancho*$this->alto)/2;
                //echo "L'àrea del triangle és ".$areaTriangle.'<br>';
            }
    
    
        }    
        
    $triangulo = new Triangle (4,3);
    $triangulo->area();

   
    $rectangulo = new Rectangle (3,2);
    $rectangulo->area();



    ?>





</body>
</html>