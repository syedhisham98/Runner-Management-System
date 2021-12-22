<?php
require_once '../../BusinessServiceLayer/model/customerModel.php';

class customerController{
    // The controller that is responsible to handle the login, update profile and registration inputs of the customer.
    
   function add(){
    // create new oject 
        $customer = new customerModel();
         // set the attributes of customer
        $customer->name = $_POST['name'];
        $customer->email = $_POST['email'];
        $customer->phone = $_POST['phone'];
        $customer->address = $_POST['address'];
        $customer->city = $_POST['city'];
        $customer->state = $_POST['state'];
        $customer->zipcode = $_POST['zipcode'];
        $customer->username = $_POST['username'];
        $customer->password = $_POST['password'];
        $customer->usertype = $_POST['usertype'];
        if($customer->addCust() > 0){
            $message = "Customer Successfully Registered";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../../ApplicationLayer/ManageLogin/login.php';</script>";
        // send to customerModel
        }
    }
    
    function viewAll(){
         // view all customer
        $customer = new customerModel();
        return $customer->viewallCust();
    }
    
  function viewCustomer(){
        $customer = new customerModel();
        $customer->customer_id = $_SESSION['userid'];
        return $customer->viewCustomer();
    }

  function viewCustomerFullAddress(){
        $customer = new customerModel();
        $customer->customer_id = $_SESSION['userid'];
        return $customer->viewCustomerFullAddress();
    }

     function editCustomer(){
        $customer = new customerModel();
        $customer->customer_id = $_POST['customer_id'];
        $customer->name = $_POST['name'];
        $customer->email = $_POST['email'];
        $customer->phone = $_POST['phone'];
        $customer->address = $_POST['address'];
        $customer->city = $_POST['city'];
        $customer->state = $_POST['state'];
        $customer->zipcode = $_POST['zipcode'];
        $customer->username = $_POST['username'];
        $customer->password = $_POST['password'];
        if($customer->modifyCustomer()){
            $message = "Success Update!";
		echo "<script type='text/javascript'>alert('$message');
    window.location = '../../ApplicationLayer/ManageLogin/profile.php?cust_id=".$_POST['customer_id']."';</script>";
        }
    }
    
}
?>
