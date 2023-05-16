<?php

require_once("classes.php");
include('mysqldemo.php');


/*
    Return an array of all the customers (and their cars) in the system.  This is probably not
    a good function to have if our database becomes large but it is good for this version of our
    application.

    The type of objects in the array are CustomerDetails.
*/
function fetchCustomerData():array {
    include('mysqldemo.php');
    $getAllCustomers = $db -> prepare("select * from customers");
    $getAllCustomers->execute();
    $result = $getAllCustomers->fetchAll();
    $outputArray = [];
    //print_r($result);
    foreach($result as $customer){
        $CustomerDetailsObject = new CustomerDetails();
        $CustomerDetailsObject->id = $customer[0];
        $CustomerDetailsObject->name = $customer[1];
        $CustomerDetailsObject->roomno = $customer[2];
        $CustomerDetailsObject->rent = $customer[3];
        $CustomerDetailsObject->paid = $customer[4];
        $CustomerDetailsObject->amountpaid = $customer[5];
        array_push($outputArray,$CustomerDetailsObject);
    }
    //print_r($outputArray);

    return $outputArray; // just a placeholder...
}
function fetchExpense(){
    include('mysqldemo.php');
    $query = $db -> prepare("select * from expense");
    $query->execute();
    $result = $query->fetchAll();
    return $result;
}
function resetMonthly(){
    include('mysqldemo.php');
    $null = '';
    $nullD = 0;
    for ($i = 1; $i <= 23; $i++) {
        $updateQuery = $db -> prepare("UPDATE customers
        SET paid=:paid,amountpaid=:amountpaid
        where id=:id;");
        $updateQuery->bindParam(':id', $i);
        $updateQuery->bindParam(':paid',  $null);
        $updateQuery->bindParam(':amountpaid', $nullD);
        $updateQuery->execute();
    }

    $sql = "TRUNCATE TABLE expense";
    $stmt = $db->prepare($sql);

// Execute the SQL query
    if ($stmt->execute()) {
        echo "The table has been emptied successfully.";
    } else {
        echo "Error emptying table: " . $conn->errorInfo();
    }
}

/*
    Get the details of a single customer given their id number.  
*/
function fetchSingleCustomer($cid){
    $allData = fetchCustomerData();
    foreach($allData as $obj){
        //print_r($obj->id == $cid);
        if ($obj->id == $cid){
            return $obj;
        }
        //print_r($obj);
    }
    return null; // just a placeholder
}

/*
    This function will update a customer record.  This function will find the record
    with the given $id number in the database and update all of the other fields to the new
    values found in $cust.  The $cars field will be ignored.

    If the update is successful then the function needs to return true.  If the customer with the
    id doesn't exist then the function would return false.
*/
function updateCustomer($cust){
    include('mysqldemo.php');

    if(is_null(fetchSingleCustomer($cust ->id))){
        return false;
    }
    else{
        $updateQuery = $db -> prepare("UPDATE customers
        SET name =:name, roomno =:roomno, rent=:rent, paid=:paid,amountpaid=:amountpaid
        where id=:cid;");
        $updateQuery->bindParam(':name', $cust->name);
        $updateQuery->bindParam(':roomno', $cust->roomno);
        $updateQuery->bindParam(':rent', $cust->rent);
        $updateQuery->bindParam(':paid', $cust->paid);
        $updateQuery->bindParam(':cid', $cust->id);
        $updateQuery->bindParam(':amountpaid', $cust->amountpaid);
        $updateQuery->execute();
        //$result = $updateQuery->fetchAll();
        header( "refresh:3;url=index.php" );
    }
}
