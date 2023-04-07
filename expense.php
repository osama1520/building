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
        <div class="table-responsive mt-5">
                    <table class="table table-striped table-hover" id="table">
                    <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    require("business.php");
                    // modal php code

                    $expenses = fetchExpenses();
                    $expensesTotal = 0;
                    foreach($expenses as $e){
                        echo "<tr>   
                        <td >{$e[1]}</td>
                        <td >{$e[2]}</td>
                        <td >.</td>
                        </tr>";}?>
                        
                </tbody>
            </table>
        </div>
    </body>
</html>