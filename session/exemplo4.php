<?php

session_id('gsgla4sln2r9gdrujqv82p2d4o');
require_once('config.php');
session_regenerate_id();

echo session_id();
var_dump($_SESSION);

?>