<?php

require_once("datalayer.php");


/*
    Return an array of CustomerDetails objects for everything in the database.
*/
function getCustomerTable() : array {
    return fetchCustomerData();
   
}

function fetchExpenses(){
    return fetchExpense();
}

/*
    Return a single CustomerDetails object given the customer id number.  The
    function returns null if no customer is found
*/
function getCustomer($cid){
    return fetchSingleCustomer($cid);
}

function updateCustomers($cust){
    return updateCustomer($cust);
}