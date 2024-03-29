<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
    <title>Document</title>
    <style> 
  .checker {
    display: block;
    font-size: 25px;
    height: 1em;
    width: 2.5em;
    box-sizing: content-box;
    padding: 0.15em;
    border-radius: 0.25em;
    cursor: pointer;
  }

.checkmark {
  width: 1em;
  height: 1em;
  transform: translateX(-0.4em);
  z-index: 5;
}

.checkmark svg {
  display: block;
  background: #e5e5e5;
  transform: translateX(0.4em);
  border-radius: 0.15em;
  transition: background-color var(--duration) ease, transform calc(var(--duration) * 1.5) ease;
}

.checkmark svg path {
  stroke-dasharray: 90 90;
  stroke-dashoffset: 90;
  transition: stroke-dashoffset calc(var(--duration) / 3) linear calc(var(--duration) / 3);
}

.checkbox {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.4;
  visibility: hidden;
}

.checkbox:checked ~ .checkmark {
  transform: translate(1.9em);
}

.checkbox:checked ~ .checkmark svg {
  background: #77c44c;
  transform: translate(-0.4em);
}

.checkbox:checked ~ .checkmark svg path {
  stroke-dashoffset: 0;
}

.check-bg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: inherit;
  background: white;
  z-index: 2;
}

.check-bg:before, .check-bg:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  border-radius: inherit;
}

.check-bg:after {
  background: white;
}

.check-bg:before {
  transform: translateY(30%);
  transform-origin: bottom center;
  background: black;
  filter: blur(0.25em);
  opacity: 0.2;
  z-index: -1;
}

.checker.checker:active {
  transform: scale(0.85);
  transition-duration: calc(var(--duration) / 2);
}

.checker.checker:active .check-bg::before {
  transform: translateY(0) scale(0.8);
  opacity: 0.2;
}

*,
*::before,
*::after {
  box-sizing: border-box;
  position: relative;
}

/* html {
  height: 100%;
}

body {
  background-color: #f2f2f2;
  height: 100%;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
} */
  </style>
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
        $amountpaid = $_POST['amountpaid'];
        $security = $_POST['security'];
        
        if (isset($_POST['toggle'])) {
          $paid = 'yes';
        } else {
          $paid = 'no';
        }
        //print_r($paid);
        $CustomerDetailsObject = new CustomerDetails();
        $CustomerDetailsObject->id = $id;
        $CustomerDetailsObject->name = $name;
        $CustomerDetailsObject->roomno = $roomno;
        $CustomerDetailsObject->rent = $rent;
        $CustomerDetailsObject->paid = $paid;
        $CustomerDetailsObject->amountpaid = $amountpaid;
        $CustomerDetailsObject->security = $security;
        updateCustomers($CustomerDetailsObject);
        header('Location: /index.php'); 
        
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
              
              <div id="app">
              <p>Paid <br></p>
              <label class="checker">
              <input type="checkbox" class="checkbox" name="toggle" <?php echo ($obj->paid == 'yes') ? 'checked' : ''; ?>>
                <div class="check-bg"></div>
                <div class="checkmark">
                  <svg viewBox="0 0 100 100">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="15" stroke="#FFF" fill="none" d="M20,55 L40,75 L77,27"></path>
                  </svg>
                </div>
              </label>
            </div>
          </div>
         
          
            <div class="mb-3">
              <label for="amountpaid" class="form-label">Amount Paid</label>
              <input type="text" class="form-control" id="amountpaid" name="amountpaid" value="<?php echo $obj->amountpaid?>">
            </div>
            <div class="mb-3">
              <label for="security" class="form-label">Security</label>
              <input type="text" class="form-control" id="security" name="security" value="<?php echo $obj->security?>">
            </div>
            <button type="submit" class="btn btn-primary" name="submit" >Update Customer</button>
          </form>
      </div>
    
    </body>
</html>