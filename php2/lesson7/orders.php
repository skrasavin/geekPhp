<?php
include_once('inc/C_Page.php');
$controller = new C_Page();
$controller->action_orders();
$controller->render();
