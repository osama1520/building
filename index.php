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
                        <a href="expense.php" class="nav-link" >All Expenses</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                <th scope="col" class='hide-display'>Paid</th>
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
            $emailData .= '<th style="border: 1px solid black; padding: 5px;" >Paid</th>';
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
                    $emailData .= '<td style="border: 1px solid black; padding: 5px;">' . $obj->paid . '</td>';
                    $emailData .= '</tr>';  
                echo "<tr class='$check'>   
                <td ><a class='$text' href='edit.php/?id={$obj->id}'>$obj->name</td>
                <th class='$text'>{$obj->roomno}</th>
                <td class='$text'>{$obj->rent}</td>
                <td class='$text $warning'>{$balance}</td>
                <td class='hide-display $text'>{$obj->paid}</td>
                </tr>";}
                $emailData .= '</table>';
                $emailData .= '<br/><strong>Total </strong>:' .$total .'<br/><strong>Collected: </strong>'.$collected;
                
                ?>
            </tbody>
            
            <div class="p-1 mb-1 bg-primary text-white mt-5"><?php echo "Total: ".$total;?></div>
            <div class="p-1 mb-1 bg-success text-white"><?php echo "Collected: ".$collected;?></div>
            <div class="p-1 mb-1 bg-danger text-white"><?php echo "Expenses: ".$expensesTotal;?></div>
            <button type="button" class="btn btn-outline-success float-end" onclick="window.location.href='CustomerRegister.php';">Add Customer</button>
            </table>
        </div>
 
    </div>

    </body>
</html>