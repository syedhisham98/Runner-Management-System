<?php
require_once '../../BusinessServiceLayer/model/providerModel.php';

class providerController{
    
    function add(){
        $provider = new providerModel();
        $provider->name = $_POST['name'];
        $provider->email = $_POST['email'];
        $provider->phone = $_POST['phone'];
        $provider->address = $_POST['address'];
        $provider->city = $_POST['city'];
        $provider->state = $_POST['state'];
        $provider->zipcode = $_POST['zipcode'];
        $provider->username = $_POST['username'];
        $provider->password = $_POST['password'];
        $provider->usertype = $_POST['usertype'];
        if($provider->addProvider() > 0){
             $message = "Provider Successfully Registered!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../../ApplicationLayer/ManageLogin/login.php';</script>";
        }
    }
    
    function viewAll(){
        $provider = new providerModel();
        return $provider->viewallProvider();
    }
    
     function viewProvider($sp_id){
        $provider = new providerModel();
        $provider->sp_id = $sp_id;
        return $provider->viewProvider();
    }
        
    function editProvider(){
        $provider = new providerModel();
        $provider->sp_id = $_POST['sp_id'];
        $provider->name = $_POST['name'];
        $provider->email = $_POST['email'];
        $provider->phone = $_POST['phone'];
        $provider->address = $_POST['address'];
        $provider->city = $_POST['city'];
        $provider->state = $_POST['state'];
        $provider->zipcode = $_POST['zipcode'];
        $provider->username = $_POST['username'];
        $provider->password = $_POST['password'];
        if($provider->modifyProvider()){
            $message = "Success Update!";
    echo "<script type='text/javascript'>alert('$message');
    window.location = '../../ApplicationLayer/ManageLogin/profile.php?sp_id=".$_POST['sp_id']."';</script>";
        }
    }
    
    
}
?>
