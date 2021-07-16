<?php
//le point de depart du projet ou il nous montre la page de connexion par defaut
require(dirname(__DIR__).'/config/constantes.php');
require(dirname(__DIR__).'/config/require.php');
open_session();
require_once(ROUTE_DIR.'lib/rooter.php');

?>