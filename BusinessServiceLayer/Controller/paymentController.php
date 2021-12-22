<?php
require_once '../../BusinessServiceLayer/Model/paymentModel.php';

class paymentController{

    function addOrder(){
        $payment = new paymentModel();
        if($payment->addOrder() > 0){
            $message = "Runners Have Been Notified Successfully!";
            echo "<script type='text/javascript'>alert('$message');
            window.location = '../../ApplicationLayer/ManagePayment/orderStatus.php';</script>";
        }
    }
    
    function viewAll(){
        $payment = new paymentModel();
        return $payment->viewallPayment();
    }
    
    function viewPayment(){
        $payment = new paymentModel();
        $payment->cust_id = $_SESSION['userid'];
        return $payment->viewPayment();
    }



    
}
?>
