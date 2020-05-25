<?php
include "classes/Personnage.php";

function loadClass($class)
{
    require_once ($class . ".php");
}

spl_autoload_register("loadClass");

// // On enregistre notre autoload.
// function chargerClasse($classname)
// {
//   require $classname.'.php';
// }

// spl_autoload_register('chargerClasse');
