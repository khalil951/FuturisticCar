<?php
include '../Controller/CustomerC.php';
$customerC = new CustomerC();
$customerC->deleteCustomer($_GET["idCustomer"]);
header('Location:ListCustomers.php');