<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
    <title>Document</title>
</head>
<body>

<?php
    require_once('business.php');

    include('mysqldemo.php');

    $id =  $_GET['id'];
    $obj = getCustomer($id);
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $roomno = $_POST['roomno'];
        $rent = $_POST['rent'];
        $paid = $_POST['paid'];
        $amountpaid = $_POST['amountpaid'];
        //print_r($amountpaid);
        $CustomerDetailsObject = new CustomerDetails();
        $CustomerDetailsObject->id = $id;
        $CustomerDetailsObject->name = $name;
        $CustomerDetailsObject->roomno = $roomno;
        $CustomerDetailsObject->rent = $rent;
        $CustomerDetailsObject->paid = $paid;
        $CustomerDetailsObject->amountpaid = $amountpaid;
        updateCustomers($CustomerDetailsObject);
        header('Location: /building/index.php'); 
        
    }
    ?>
    <div class="container">

        <form class="m-5" action="" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?php echo $obj->name?>">
            </div>
            <div class="mb-3">
              <label for="roomno" class="form-label">Room No</label>
              <input type="text" class="form-control" id="roomno" name="roomno" value="<?php echo $obj->roomno?>">
            </div>
            <div class="mb-3">
              <label for="rent" class="form-label">Rent</label>
              <input type="text" class="form-control" id="rent" name="rent" value="<?php echo $obj->rent?>">
            </div>
            <div class="mb-3">
              <label for="paid" class="form-label">Paid</label>
              <input type="text" class="form-control" id="paid" name="paid" value="<?php echo $obj->paid?>">
            </div>

            <div class="mb-3">
              <label for="amountpaid" class="form-label">Amount Paid</label>
              <input type="text" class="form-control" id="amountpaid" name="amountpaid" value="<?php echo $obj->amountpaid?>">
            </div>

            <button type="submit" class="btn btn-primary" name="submit" >Update Customer</button>
          </form>
      </div>
    
    </body>
</html>