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
}
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>    
        </head>
    <body>
    <div class="container"> 
    <form action="index.php" method="post" style="text-align: center;">

        <button type="submit" style="padding: 10px 12px; font-size: 16px; background-color: green; color: #fff; border: none; border-radius: 5px; cursor: pointer;margin-top: 20px;">
            Home
        </button>

        </form>
        <div class="table-responsive mt-5">
                    <table class="table table-striped table-hover" id="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date / Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    require("business.php");

                    $expenses = fetchExpenses();
                    $expensesTotal = 0;
                    foreach($expenses as $e){
                        $array = explode(' ', $e[3], 2);
                        
                        //print_r($array);
                        echo "<tr>   
                        <td >{$e[1]}</td>
                        <td >{$e[2]}</td>
                        <td >";echo $array[0] ." ";echo date("g:i a", strtotime($array[1]."UTC"));echo"</td>
                        <td>

                        <form action='delete.php' method='POST' onsubmit='return confirm('Are you sure you want to delete this row?');'>
                            <input type='hidden' name='row_id' value='<?php echo $e[0]; ?>'>
                            <button type='submit' style='background-color: #ff0000; color: #ffffff; padding: 5px 10px; border: none; cursor: pointer; border-radius: 5px;'>
                            Delete
                        </button>
                        
                        </form>
                    </td>
                        </tr>";}?>
                        
                </tbody>
            </table>
        </div>
    </body>
</html>