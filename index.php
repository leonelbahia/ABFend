<?php
require ('./BackEnd/Init.php');
use Init\init as router;
router::in('/', '', 'index');
?>
