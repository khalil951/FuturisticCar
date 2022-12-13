<?php session_start();?>
<?php
include '../Controller/CustomerC.php';
// create customer
$customer = null;
$newCustomer=null;
$customerC = new CustomerC();
?>
<?php
    if (isset($_POST['Ban']) && !empty($_POST['Ban']) && isset($_POST['idCustomer'])) {
        $customer = $customerC->showCustomer($_POST['idCustomer']);
        // var_dump($customer);
        $newCustomer = new Customer(
            $customer["idCustomer"],
            $customer['firstName'],
            $customer['lastName'],
            $customer['Username'],
            $customer['Password'],
            "banned"
            // $_POST['Ban']
        );
        $newCustomer = $customerC->updateCustomer($newCustomer,$customer["idCustomer"]);
        sleep(1);
        header('Location: dashboard/index.php');

 } ?>
 
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Hello </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->


