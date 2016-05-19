<?php
require("conf/config.php");
$var = $twig->render('serviceClass.twig', array());
var_dump($var);