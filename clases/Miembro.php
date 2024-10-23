<?php
    abstract Class Miembro{
    protected $id;
    protected $nombre;
    protected $apellidos;
    protected $email;
   

    public function __construct($id,$nombre,$apellidos,$email){
        $this->$id = $id;
        $this->$nombre=$nombre;
        $this->$apellidos=$apellidos;
        $this->$email=$email;
        
    }








    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of edad
     */

    /**
     * Set the value of edad
     */
   
    public function __toString()
{
    return  "Nombre: ".$this->nombre . " " . $this->apellidos  . "Email: " .  $this->email;
}
    }
    