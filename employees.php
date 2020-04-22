<?php 
// Connect to database
include("connection.php");

$db = new dbObj();
$connection =  $db->getConnstring();
$request_method=$_SERVER["REQUEST_METHOD"]; 

switch($request_method) {

    case 'GET':    
    // Retrive Products
    if(!empty($_GET["id"])) {
        $id=intval($_GET["id"]); 
        get_employeess($id);    
    }else { 
        get_employees();    
    }    
        break;

    case 'POST': 
        // Insert Product 
        insert_employee(); 
        break;

    case 'PUT': 
        // Update Product 
        $id=intval($_GET["id"]); 
        update_employee($id); 
        break;     
    
    case 'DELETE':
         // Delete Product
        $id=intval($_GET["id"]); 
        delete_employee($id); 
        break;


    default:    
    // Invalid Request Method 
    header("HTTP/1.0 405 Method Not Allowed");
    break;  }

 


?>