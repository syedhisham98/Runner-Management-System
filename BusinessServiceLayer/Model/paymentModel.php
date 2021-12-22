<?php
require_once '../../BusinessServiceLayer/libs/db.php';
require_once '../../BusinessServiceLayer/Controller/cartController.php';

class paymentModel{
    public $payment_id,$customer_id,$name,$quantity,$price,$image,$status;
    
    function addOrder(){

        $DataArr = array();
        $cart = new cartController();
        $data = $cart->viewCart();

        foreach($data as $row){
            $fieldVal1 = $row[1];
            $fieldVal2 = $row[2];
            $fieldVal3 = $row[3];
            $fieldVal4 = $row[4];
            $fieldVal5 = $row[5];
            $fieldVal6 = 1;
            $DataArr[] = "('$fieldVal1', '$fieldVal2', '$fieldVal3', '$fieldVal4', '$fieldVal5', '$fieldVal6')";
        }

        $sql = "insert into payment(customer_id, product_name, product_quantity, product_price, product_image, order_status) values ";
        $sql .= implode(',', $DataArr);
        $stmt = DB::run($sql);
        $count = $stmt->rowCount();
        return $count;
    }
    

    function viewallPayment(){
        $sql = "select * from payment";
        return DB::run($sql);
    }
    
    function viewPayment(){
        $sql = "select * from payment where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }

}
?>
