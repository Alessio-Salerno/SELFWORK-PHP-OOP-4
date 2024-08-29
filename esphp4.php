<?php

class Car{


  private $num_telaio;

   public function __construct($num_telaio){
     $this->num_telaio = $num_telaio;
   }  


  //METODO PER OTTENERE IL TELAIO

  protected function getNumTelaio(){
    return $this->num_telaio;
  }

}


class Fiat extends Car{
    protected $license;
    protected $name;



    public function __construct($name, $license, $num_telaio){
        parent::__construct($num_telaio);
        $this->name = $name;
        $this->license = $license;
    }


   // METODO PER STAMPARE INFORMAZIONI MACCCHINA

   public function printCarInfo() {

    $num_telaio = $this->getNumTelaio();


    echo "La mia macchina è $this->name, con targa $this->license e numero di Telaio $num_telaio \n ";




   }


}


// INSTANZE 

$car = new Fiat("Opel", "ND 123 OJ" , 1234);

$car -> printCarInfo();



?>