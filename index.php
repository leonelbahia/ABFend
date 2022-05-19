<?php
require ('./BackEnd/Init.php');
use Init\init as router;

switch ($sectionRouter) {
    case "docs": router::in('', ['head', 'docs', 'foot']); break;
    default: router::in('', ['index']); break;
}

?>
