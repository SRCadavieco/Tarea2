<?php
class Asignaturas {
    protected $id;
    protected $nombre;
    protected $creditos;

    function __construct($id,$nombre,$creditos){
        $this->nombre=$nombre;
        $this->id = $id;
        $this->creditos=$creditos;
    }

    public function crearAsignaturasDeMuestra(){
        $asignaturas = array();
        $asig1 = new Asignaturas(1,"DWES",7);
        $asignaturas[]= $asig1;
        $asig2 = new Asignaturas(2,"DWEC",6);
        $asignaturas[]= $asig2;
        $asig3 = new Asignaturas(2,"DIW",4);
        $asignaturas[]=$asig3;
        $asig4 = new Asignaturas(4,"DIW",4);
        $asignaturas []= $asig4;

    return $asignaturas;}












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
         * Get the value of creditos
         */
        public function getCreditos()
        {
                return $this->creditos;
        }

        /**
         * Set the value of creditos
         */
        public function setCreditos($creditos): self
        {
                $this->creditos = $creditos;

                return $this;
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

    }





