<?php
require_once '../../BusinessServiceLayer/libs/db.php';

class customerModel{
    public $customer_id,$name,$email,$phone,$address,$city,$state,$zipcode,$username,$password,$usertype;
    
    function addCust(){
        $sql = "insert into customer(customer_name, customer_email, customer_phone, customer_address, customer_city, customer_state, customer_zipcode, username, password, usertype) values(:name, :email, :phone, :address, :city, :state, :zipcode, :username, :password, :usertype)";
        $args = [':name'=>$this->name, ':email'=>$this->email, ':phone'=>$this->phone, ':address'=>$this->address, ':city'=>$this->city, ':state'=>$this->state, ':zipcode'=>$this->zipcode, ':username'=>$this->username, ':password'=>$this->password, ':usertype'=>$this->usertype];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    
    function viewallCust(){
        $sql = "select * from customer";
        return DB::run($sql);
    }
    
    function viewCustomer(){
        $sql = "select * from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        return DB::run($sql,$args);
    }
    function viewCustomerFullAddress(){
        $sql = "select concat(customer_address,', ',customer_city,', ',customer_state,', ',customer_zipcode) as fullAddress from customer where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id];
        $stmt = DB::run($sql,$args);
        $result = $stmt->fetchColumn();
        return $result;
    }
    
    function modifyCustomer(){
        $sql = "update customer set customer_name=:name,customer_email=:email,customer_phone=:phone,customer_address=:address,customer_city=:city,customer_state=:state,customer_zipcode=:zipcode,username=:username,password=:password where customer_id=:customer_id";
        $args = [':customer_id'=>$this->customer_id,':name'=>$this->name, ':email'=>$this->email, ':phone'=>$this->phone, ':address'=>$this->address, ':city'=>$this->city, ':state'=>$this->state, ':zipcode'=>$this->zipcode,':username'=>$this->username,':password'=>$this->password];
        return DB::run($sql,$args);
    }
    
    
}
?>
