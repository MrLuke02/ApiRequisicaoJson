<?php

require_once('classCarros.php');

$Carros = new classCarros();

$Carros->exibeCarros();

    header('../index.php');
?>