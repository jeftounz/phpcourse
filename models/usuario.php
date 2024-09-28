<?php 
require_once ("crud.php");
class Usuario extends Crud{
    public function __construct(
        public int $id=0,
        public string $nombre="",
        public string $apellido="",
        public string $telefono="",
        public int $edad=0,
        public string $tarjeta="",
    ){
        parent ::__construct("usuarios");
    }

    public  function insertar(){
        $this->crear("id,nombre,apellido,telefono,edad,tarjeta","?,?,?,?,?,?",
        [$this->id,$this->nombre,$this->apellido,$this->telefono,$this->edad,$this->tarjeta]);
    }

    public function actualizar(){
        $this->modificacion("nombre=?,apellido=?,telefono=?,edad=?",
        [$this->nombre,$this->apellido,$this->telefono,$this->edad,$this->tarjeta,$this->id]);
    }
}
?>