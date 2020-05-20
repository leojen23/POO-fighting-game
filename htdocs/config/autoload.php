<?php
include "db.php";
function loadClass($class)
{
    require_once ($class . ".php");
}

spl_autoload_register("loadClass");