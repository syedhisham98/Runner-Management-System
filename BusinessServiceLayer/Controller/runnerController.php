<?php
require_once '../../BusinessServiceLayer/model/runnerModel.php';

class runnerController{
    
    function add(){
        $runner = new runnerModel();
        $runner->name = $_POST['name'];
        $runner->email = $_POST['email'];
        $runner->phone = $_POST['phone'];
        $runner->address = $_POST['address'];
        $runner->city = $_POST['city'];
        $runner->state = $_POST['state'];
        $runner->zipcode = $_POST['zipcode'];
        $runner->username = $_POST['username'];
        $runner->password = $_POST['password'];
        $runner->usertype = $_POST['usertype'];
        if($runner->addRunner() > 0){
            $message = "Runner Successfully Registered!";
		echo "<script type='text/javascript'>alert('$message');
		window.location = '../../ApplicationLayer/ManageLogin/login.php';</script>";
        }
    }
    
    function viewAll(){
        $runner = new runnerModel();
        return $runner->viewallRunner();

    }
    
    function viewRunner($runner_id){
        $runner = new runnerModel();
        $runner->runner_id = $runner_id;
        return $runner->viewRunner();
    }
        
    function editRunner(){
        $runner = new runnerModel();
        $runner->runner_id = $_POST['runner_id'];
        $runner->name = $_POST['name'];
        $runner->email = $_POST['email'];
        $runner->phone = $_POST['phone'];
        $runner->address = $_POST['address'];
        $runner->city = $_POST['city'];
        $runner->state = $_POST['state'];
        $runner->zipcode = $_POST['zipcode'];
        $runner->username = $_POST['username'];
        $runner->password = $_POST['password'];
        if($runner->modifyRunner()){
            $message = "Success Update!";
    echo "<script type='text/javascript'>alert('$message');
    window.location = '../../ApplicationLayer/ManageLogin/profile.php?runner_id=".$_POST['runner_id']."';</script>";
        }
    }
    
    
}
?>
