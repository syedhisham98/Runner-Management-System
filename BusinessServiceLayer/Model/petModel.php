<?php
require_once '../../BusinessServiceLayer/libs/db.php';

class petModel{
    public $groom_id,$name,$price,$quantity,$details,$image;
    
    function addpetgroom(){
        $sql = "insert into petgroom(groom_name, groom_price, groom_quantity, groom_details,  groom_image) values(:name, :price, :quantity, :details, :image)";
        $args = [':name'=>$this->name,  ':price'=>$this->price, ':quantity'=>$this->quantity, ':details'=>$this->details, ':image'=>$this->image];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    
    function viewallpetgroom(){
        $sql = "select * from petgroom";
        return DB::run($sql);
    }
    
    function viewpetgroom(){
        $sql = "select * from petgroom where groom_id=:groom_id";
        $args = [':groom_id'=>$this->groom_id];
        return DB::run($sql,$args);
    }
    

    function deletepetgroom(){
        $sql = "delete from petgroom where groom_id=:groom_id";
        $args = [':groom_id'=>$this->groom_id];
        return DB::run($sql,$args);
    }


    function modifypetgroom(){
        $sql = "update petgroom set groom_name=:name, groom_price=:price, groom_quantity=:quantity, groom_details=:details, groom_image=:image where groom_id=:groom_id";
        $args = [':groom_id'=>$this->groom_id, ':name'=>$this->name, ':price'=>$this->price, ':quantity'=>$this->quantity,':details'=>$this->details, ':image'=>$this->image];
        return DB::run($sql,$args);
    }   
}
class pethotelModel{
    public $hotel_id,$name,$details,$quantity,$price,$image;
    
    function addpethotel(){
        $sql = "insert into pethotel(hotel_name, hotel_price, hotel_quantity, hotel_details, hotel_image) values(:name, :price, :quantity, :details, :image)";
        $args = [':name'=>$this->name, ':price'=>$this->price,':quantity'=>$this->quantity, ':details'=>$this->details,  ':image'=>$this->image];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    
    function viewallpethotel(){
        $sql = "select * from pethotel";
        return DB::run($sql);
    }
    
    function viewpethotel(){
        $sql = "select * from pethotel where hotel_id=:hotel_id";
        $args = [':hotel_id'=>$this->hotel_id];
        return DB::run($sql,$args);
    }
    

    function deletepethotel(){
        $sql = "delete from pethotel where hotel_id=:hotel_id";
        $args = [':hotel_id'=>$this->hotel_id];
        return DB::run($sql,$args);
    }


    function modifypethotel(){
        $sql = "update pethotel set hotel_name=:name,hotel_price=:price,hotel_quantity=:quantity,hotel_details=:details,hotel_image=:image where hotel_id=:hotel_id";
        $args = [':hotel_id'=>$this->hotel_id, ':name'=>$this->name,':price'=>$this->price,':quantity'=>$this->quantity, ':details'=>$this->details, ':quantity'=>$this->quantity, ':image'=>$this->image];
        return DB::run($sql,$args);
    }   
}
class petvetModel{
    public $vet_id,$name,$detail,$quantity,$price,$image;
    
    function addpetvet(){
        $sql = "insert into petvet(vet_name, vet_price, vet_quantity, vet_details,  vet_image) values(:name, :price, :quantity, :details,:image)";
        $args = [':name'=>$this->name, ':price'=>$this->price, ':quantity'=>$this->quantity,':details'=>$this->details,  ':image'=>$this->image];
        $stmt = DB::run($sql, $args);
        $count = $stmt->rowCount();
        return $count;
    }
    
    function viewallpetvet(){
        $sql = "select * from petvet";
        return DB::run($sql);
    }
    
    function viewpetvet(){
        $sql = "select * from petvet where vet_id=:vet_id";
        $args = [':vet_id'=>$this->vet_id];
        return DB::run($sql,$args);
    }
    

    function deletepetvet(){
        $sql = "delete from petvet where vet_id=:vet_id";
        $args = [':vet_id'=>$this->vet_id];
        return DB::run($sql,$args);
    }


    function modifypetvet(){
        $sql = "update petvet set vet_name=:name,vet_price=:price,vet_quantity=:quantity,vet_details=:details,vet_image=:image where vet_id=:vet_id";
        $args = [':vet_id'=>$this->vet_id, ':name'=>$this->name, ':price'=>$this->price, ':quantity'=>$this->quantity,':details'=>$this->details, ':image'=>$this->image];
        return DB::run($sql,$args);
    }   
}