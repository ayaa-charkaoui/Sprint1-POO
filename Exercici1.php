    <?php
        class Employee {
            
            //Atributos
            private $nombre;
            private $sueldo;

            //Métodos
            public function initialize($nom, $sou)
            {
                $this->nombre=$nom;
                $this->sueldo=$sou;
            }
            public function print()
                {
                    echo $this->nombre;
                    echo '<br>';
                    if ($sou>6000) {
                        echo "Ha de pagar impostos";
                    }
                    else {
                        echo "No ha de pagar impostos";
                    }
                }
        }

    ?>





</body>
</html>