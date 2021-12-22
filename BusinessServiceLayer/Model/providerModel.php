<?php
require_once '../../BusinessServiceLayer/libs/db.php';

class providerModel{
    //To store and retrieve provider information.
    public $sp_id,$name,$email,$phone,$address,$city,$state,$zipcode,$username,$password;
   
    function addProvider(){
        //To get all new service provider information from providerController class and save in provider table.
        $sql = "insert into provider(sp_name, sp_email, sp_phone, sp_address, sp_city, sp_state, sp_zipcode, username, password, usertype) values(:name, :email, :phone, :address, :city, :state, :zipcode, :username, :password, :usertype)";
        $args = [':name'=>$this->name, ':email'=>$this->email, ':phone'=>$this->phone, ':address'=>$this->address,  ':city'=>$this->city, ':state'=>$this->state, ':zipcode'=>$this->zipcode, ':username'=>$this->username, ':password'=>$this->password, ':usertype'=>$this->usertype];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    
    function viewallProvider(){
        //To retrieve all profile information from provider table and send them to providerController class.
        $sql = "select * from provider";
        return DB::run($sql);
    }
    
    function viewProvider(){
        //To retrieve all profile information from provider table where provider_id=provider_id and send them to providerController class.
        $sql = "select * from provider where sp_id=:sp_id";
        $args = [':sp_id'=>$this->sp_id];
        return DB::run($sql,$args);
    }
    
    function modifyProvider(){
        //To get all  service provider information from providerController class and update provider table.
        $sql = "update provider set sp_name=:name,sp_email=:email,sp_phone=:phone,sp_address=:address,sp_city=:city,sp_state=:state,sp_zipcode=:zipcode,username=:username,password=:password where sp_id=:sp_id";
        $args = [':sp_id'=>$this->sp_id,':name'=>$this->name, ':email'=>$this->email, ':phone'=>$this->phone, ':address'=>$this->address, ':city'=>$this->city, ':state'=>$this->state, ':zipcode'=>$this->zipcode,':username'=>$this->username,':password'=>$this->password];
        return DB::run($sql,$args);
    }
    
}
?>
