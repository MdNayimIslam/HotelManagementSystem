<?php

require('Include/Essentials.php');
session_start();
session_destroy();
redirect('Home.php');

?>