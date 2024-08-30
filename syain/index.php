<?php

require_once('common.php');

$members =$db-> getallsyain();

show_top();
show_create($members);
show_down();

?>


