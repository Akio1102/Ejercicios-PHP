 <?php
      class Persona{
        public function __construct(private int $id,private string $nombre,private string $correo, private int $edad){
        }
        
        //Getters
        public function getId(){
          return $this->id;
        }
        public function getNombre(){
          return $this->nombre;
        }
        public function getCorreo(){
          return $this->correo;
        }
        public function getEdad(){
          return $this->edad;
        }

        //Setters
        public function setId($id){
          $this->id = $id;
        }
        public function setNombre($nombre){
          $this->nombre = $nombre;
        }
        public function setCorreo($correo){
          $this->correo = $correo;
        }
        public function setEdad($edad){
          $this->edad = $edad;
        }
      }

      class Cliente extends Persona{
        public function __construct(int $id, string $nombre, string $correo, int $edad, private string $sexo){
          parent::__construct($id,$nombre,$correo,$edad);
        }

        //Getters
        public function getSexo(){
          return $this->sexo;
        }

        //Setters
        public function setSexo($sexo){
          $this->sexo = $sexo;
        }
      }

      class Empleado extends Persona{
        public function __construct(int $id, string $nombre, string $correo, int $edad,private string $cargo){
          parent::__construct($id,$nombre,$correo,$edad);
        }
        //Getters
        public function getCargo(){
          return $this->cargo;
        }

        //Setters
        public function setCargo($cargo){
          $this->cargo = $cargo;
        }
      }

      $pepito = new Cliente(1,"pepito","xd@xd.com",30,"masculino");
      echo "ID Cliente {$pepito->getId()} - Nombre Cliente {$pepito->getNombre()} - Correo Cliente {$pepito->getCorreo()} - Edad Cliente {$pepito->getEdad()} - Sexo Cliente {$pepito->getSexo()}<br>";
      
      $juan = new Empleado(1,"juan","juan@xd.com",30,"Ceo");
      echo "ID Empleado {$juan->getId()} - Nombre Empleado {$juan->getNombre()} - Correo Empleado {$juan->getCorreo()} - Edad Empleado {$juan->getEdad()} - Cargo Empleado {$juan->getCargo()}<br>";
    ?>