<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <style type="text/css">
            @media(max-width:400px){
                #table{
                    width: 100%;
                    /* table-layout: fixed; */
                    font-weight: bolder;
                }
                .hide-display {
                    display: none;
                }    
        }
        .loader {
  position: relative;
  width: 75px;
  height: 100px;
}

.loader__bar {
  position: absolute;
  bottom: 0;
  width: 10px;
  height: 50%;
  background: rgb(0, 0, 0);
  transform-origin: center bottom;
  box-shadow: 1px 1px 0 rgba(0, 0, 0, 0.2);
}

.loader__bar:nth-child(1) {
  left: 0px;
  transform: scale(1, 0.2);
  -webkit-animation: barUp1 4s infinite;
  animation: barUp1 4s infinite;
}

.loader__bar:nth-child(2) {
  left: 15px;
  transform: scale(1, 0.4);
  -webkit-animation: barUp2 4s infinite;
  animation: barUp2 4s infinite;
}

.loader__bar:nth-child(3) {
  left: 30px;
  transform: scale(1, 0.6);
  -webkit-animation: barUp3 4s infinite;
  animation: barUp3 4s infinite;
}

.loader__bar:nth-child(4) {
  left: 45px;
  transform: scale(1, 0.8);
  -webkit-animation: barUp4 4s infinite;
  animation: barUp4 4s infinite;
}

.loader__bar:nth-child(5) {
  left: 60px;
  transform: scale(1, 1);
  -webkit-animation: barUp5 4s infinite;
  animation: barUp5 4s infinite;
}

.loader__ball {
  position: absolute;
  bottom: 10px;
  left: 0;
  width: 10px;
  height: 10px;
  background: rgb(44, 143, 255);
  border-radius: 50%;
  -webkit-animation: ball624 4s infinite;
  animation: ball624 4s infinite;
}

@keyframes ball624 {
  0% {
    transform: translate(0, 0);
  }

  5% {
    transform: translate(8px, -14px);
  }

  10% {
    transform: translate(15px, -10px);
  }

  17% {
    transform: translate(23px, -24px);
  }

  20% {
    transform: translate(30px, -20px);
  }

  27% {
    transform: translate(38px, -34px);
  }

  30% {
    transform: translate(45px, -30px);
  }

  37% {
    transform: translate(53px, -44px);
  }

  40% {
    transform: translate(60px, -40px);
  }

  50% {
    transform: translate(60px, 0);
  }

  57% {
    transform: translate(53px, -14px);
  }

  60% {
    transform: translate(45px, -10px);
  }

  67% {
    transform: translate(37px, -24px);
  }

  70% {
    transform: translate(30px, -20px);
  }

  77% {
    transform: translate(22px, -34px);
  }

  80% {
    transform: translate(15px, -30px);
  }

  87% {
    transform: translate(7px, -44px);
  }

  90% {
    transform: translate(0, -40px);
  }

  100% {
    transform: translate(0, 0);
  }
}

@-webkit-keyframes barUp1 {
  0% {
    transform: scale(1, 0.2);
  }

  40% {
    transform: scale(1, 0.2);
  }

  50% {
    transform: scale(1, 1);
  }

  90% {
    transform: scale(1, 1);
  }

  100% {
    transform: scale(1, 0.2);
  }
}

@keyframes barUp1 {
  0% {
    transform: scale(1, 0.2);
  }

  40% {
    transform: scale(1, 0.2);
  }

  50% {
    transform: scale(1, 1);
  }

  90% {
    transform: scale(1, 1);
  }

  100% {
    transform: scale(1, 0.2);
  }
}

@-webkit-keyframes barUp2 {
  0% {
    transform: scale(1, 0.4);
  }

  40% {
    transform: scale(1, 0.4);
  }

  50% {
    transform: scale(1, 0.8);
  }

  90% {
    transform: scale(1, 0.8);
  }

  100% {
    transform: scale(1, 0.4);
  }
}

@keyframes barUp2 {
  0% {
    transform: scale(1, 0.4);
  }

  40% {
    transform: scale(1, 0.4);
  }

  50% {
    transform: scale(1, 0.8);
  }

  90% {
    transform: scale(1, 0.8);
  }

  100% {
    transform: scale(1, 0.4);
  }
}

@-webkit-keyframes barUp3 {
  0% {
    transform: scale(1, 0.6);
  }

  100% {
    transform: scale(1, 0.6);
  }
}

@keyframes barUp3 {
  0% {
    transform: scale(1, 0.6);
  }

  100% {
    transform: scale(1, 0.6);
  }
}

@-webkit-keyframes barUp4 {
  0% {
    transform: scale(1, 0.8);
  }

  40% {
    transform: scale(1, 0.8);
  }

  50% {
    transform: scale(1, 0.4);
  }

  90% {
    transform: scale(1, 0.4);
  }

  100% {
    transform: scale(1, 0.8);
  }
}

@keyframes barUp4 {
  0% {
    transform: scale(1, 0.8);
  }

  40% {
    transform: scale(1, 0.8);
  }

  50% {
    transform: scale(1, 0.4);
  }

  90% {
    transform: scale(1, 0.4);
  }

  100% {
    transform: scale(1, 0.8);
  }
}

@-webkit-keyframes barUp5 {
  0% {
    transform: scale(1, 1);
  }

  40% {
    transform: scale(1, 1);
  }

  50% {
    transform: scale(1, 0.2);
  }

  90% {
    transform: scale(1, 0.2);
  }

  100% {
    transform: scale(1, 1);
  }
}

@keyframes barUp5 {
  0% {
    transform: scale(1, 1);
  }

  40% {
    transform: scale(1, 1);
  }

  50% {
    transform: scale(1, 0.2);
  }

  90% {
    transform: scale(1, 0.2);
  }

  100% {
    transform: scale(1, 1);
  }
}
        </style>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
        </head>
    <body>


    <div class="container">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top mb-5">
        <div class="container">
            <a href="#" class="navbar-brand">Home</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a href="/expense.php" class="nav-link" >All Expenses</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- modal start -->
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">🥀</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="m-5" action="expensesubmit.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Expense Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" >
                    </div>
                    <button type="submit" class="btn btn-primary" type="submit" name="submit" >Save changes</button>
                </form>
            </div>

            </div>
        </div>
        </div>
    <!-- modal end -->
        <div class="table-responsive mt-5">
            <table class="table table-striped table-hover" id="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Room Number</th>
                <th scope="col">Rent</th>
                <th scope="col">Balance</th>
                </tr>
            </thead>
            <tbody>
            <?php
            require("business.php");
            // modal php code
    
            // mode php code end
            $data = getCustomerTable();
            $expenses = fetchExpenses();
            //print_r($expenses);
            $expensesTotal = 0;
            $emailData = '<table style="border-collapse: collapse; border: 1px solid black; width: 100%;">';
            $emailData .= '<tr>';
            $emailData .= '<th style="border: 1px solid black; padding: 5px;">Name</th>';
            $emailData .= '<th style="border: 1px solid black; padding: 5px;">Rent</th>';
            $emailData .= '<th style="border: 1px solid black; padding: 5px;">Room no</th>';
            $emailData .= '</tr>';
            foreach($expenses as $e){
                $expensesTotal += (int)$e[2];
            }
            
            $total = 0;
            $collected = 0;
                foreach($data as $obj){
                    $balance =0;
                    $warning = "";
                    if($obj->amountpaid != "" && strtolower($obj->paid) != 'yes'){
                        $balance = (int)$obj->rent - (int)$obj->amountpaid;
                        $warning = "text-danger fw-bold";
                        $collected += (int)$obj->amountpaid;
                    }
     
                    $total +=(int)$obj->rent;
                    $check = "";
                    $text = "";
                    if(strtolower($obj->paid) == 'yes'){
                        $check = "bg-success bg-gradient";
                        $text = "text-white";
                        $collected += (int)$obj->rent;
                    }
                    $emailData .= "<tr>";
                    $emailData .= '<td style="border: 1px solid black; padding: 5px;">' . $obj->name . '</td>';
                    $emailData .= '<td style="border: 1px solid black; padding: 5px;">' . $obj->rent . '</td>';
                    $emailData .= '<td style="border: 1px solid black; padding: 5px;">' . $obj->roomno . '</td>';
                    $emailData .= '</tr>';  
                echo "<tr class='$check'>   
                <td ><a class='$text' href='edit.php/?id={$obj->id}'>$obj->name</td>
                <th class='$text'>{$obj->roomno}</th>
                <td class='$text'>{$obj->rent}</td>
                <td class='$text $warning'>{$balance}</td>
                
                </tr>";}
                $emailData .= '</table>';
                $emailData .= '<br/><strong>Total </strong>:' .$total .'<br/><strong>Collected: </strong>'.$collected .'<br/><strong>Expenses: </strong>'.$expensesTotal;
                
                ?>
            </tbody>
            
            <div class="p-1 mb-1 bg-primary text-white mt-5 w-50 rounded" ><?php echo "  Total: ".$total;?></div>
            <div class="p-1 mb-1 bg-warning text-white w-50 rounded"><?php echo "  Collected: ".$collected;?></div>
            <div class="p-1 mb-1 bg-danger text-white w-50 rounded"><?php echo "  Expenses: ".$expensesTotal;?></div>
            <div class="p-1 mb-1 bg-success text-white w-50 rounded"><?php echo "  Profit: ". $collected - $expensesTotal;?></div>
            
            <!-- <button type="button" class="btn btn-outline-success float-end" onclick="window.location.href='CustomerRegister.php';">Add Customer</button> -->
            
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
            <br>
            
            </table>
            </div>
    

    </body>
</html>