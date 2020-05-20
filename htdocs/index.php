<?php
declare(strict_types=1);
include './PDO/connection.php';

// class Formula1
// {
//   private $speed;
//   public function drive( int $speed)
//   {
//     $this->speed = $speed;
//     echo "vroom vroom at $this->speed km/h";
//   }

//     public function shiftGear(int $speed)
//     {
//       $this->speed = $this->speed + 15;
//       echo "vroom vroom at". $this->speed." km/h";
//     }

// }



// class Formule1
// {
//     private $speed = 0;

//     function drive(){
//         echo "Vroom vroom à ".$this->speed." km/h <br>";
//     }

//     function shiftGear(){
//         $this->speed = $this->speed + 15; // 15km/h en + à chaque vitesse
       

//     }
// }

// $myFormule1 = new Formule1();
// $myFormule1->drive();
// $myFormule1->shiftGear();
// $myFormule1->drive();
// $myFormule1->shiftGear();
// $myFormule1->drive();



class CoffeeMachine
  {
  private $brand;
  private $coffee;
  private $isTurnedOn = false;

  public function __construct(string $brand)
  {
    $this->brand = $brand;
  }

  public function power(bool $state){

      $this->isTurnedOn = $state;
      if($this->isTurnedOn){
        echo $this->brand . " est en fonction <br>";
      }else
        echo "$this->brand est éteinte <br>";
    }

  public function putCoffeePod(){
    if($this->isTurnedOn AND $this->coffee = true){
      echo "Une dosette a été placée dans la machine " . $this->brand . "<br>";
    }
  }

  public static function getMaximumSugarLevel(){
    return 5;
  }
  // echo CoffeeMachine::getMaximumSugarLevel();

  public function addsugar(int $level){
    $this->level = $level;
    if($this->isTurnedOn){
      if($this->level > self::getMaximumSugarLevel() || $this->level < 0){
        echo "Erreur : il n'est pas possible d'ajouter un niveau de sucre de " . $this->level . "<br>";
      }else{
        echo "Du sucre a été ajoutée ( niveau : $this->level /5 )  <br>";
      }
    }
  }

//  si la machine est éteinte alors impossible de faire du café

  public function makeCoffee(){

    if(!$this->isTurnedOn){
      echo "Impossible de faire du café : ".$this->brand ." est éteinte <br>";
    }
    if($this->isTurnedOn AND $this->coffee = true){
      if($this->level < CoffeeMachine::getMaximumSugarLevel() || !$this->level > 0){
        echo "Le café est prêt dans la machine $this->brand !<br>";
      }
    }
  }
}

$machine = new CoffeeMachine("Senseo");

//ceci doit déclencher une erreur 
$machine->makeCoffee();

$machine->power(true);

$machine->putCoffeePod();

//ceci doit déclencher une erreur 
$machine->addSugar(6);


$machine->addSugar(3);

$machine->makeCoffee();

$machine->power(false);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO exercices</title>

    <!-- Bootstrap CDN
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js">
     -->

    <!-- Materialize CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- MATERIALIZE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./CSS/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>

<body>

  


  <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  
    <!-- MATERIALIZE Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="./JS/script.js"></script>

</body>

</html>
<?php
/**
 * 

    
