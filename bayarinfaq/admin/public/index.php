<?php
if(!session_id()) session_start();

require_once '../app/init.php'; //teknik boostrap
$app = new App;