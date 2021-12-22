<?php
require_once '../../BusinessServiceLayer/libs/db.php';
class cartModel{
    //To store and retrieve all the information of cartdata.
    public $cart_id,$customer_id,$name,$quantity,$price,$image;
    
    function addCart(){
        //To get all new cart information from cartController class and save in cart table.
        $sql = "insert into cart(customer_id, product_name, product_quantity, product_price, product_image) values(:customer_id, :name, :quantity, :price, :image)";
        $args = [':customer_id'=>$this->customer_id, ':name'=>$this->name, ':quantity'=>$this->quantity, ':price'=>$this->price, ':image'=>$this->image];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    

    function viewallCart(){
        //To retrieve all cart information from cart table and send them to cartController class.
        $sql = "select * from cart";
        return DB::run($sql);
    }
    
    function viewCart(){
        //To retrieve cart information from cart table where cust_id=cust_id and send them to cartController class.
        $sql = "select * from cart where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }

    function modifyCart(){
        //To update cart where card_id=cart_id.
        $sql = "update cart set product_quantity=:quantity where cart_id=:cart_id";
        $args = [':quantity'=>$this->quantity, ':cart_id'=>$this->cart_id];
        return DB::run($sql,$args);
    }
   function deleteCart(){
    //To delete cart from cart where cart_id=cart_id.
        $sql = "delete from cart where cart_id=:cart_id";
        $args = [':cart_id'=>$this->cart_id];
        return DB::run($sql,$args);
    }
   function deleteAllCart(){
    //To delete all cart from cart where cart_id=cart_id.
        $sql = "delete from cart where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }


}
?>
