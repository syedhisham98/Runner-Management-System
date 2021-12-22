<?php
require_once '../../BusinessServiceLayer/Model/petModel.php';

class petgroomController{
    
    function add(){
        $petgroom = new petModel();
        $petgroom->name = $_POST['name'];
        $petgroom->price = $_POST['price'];
        $petgroom->quantity = $_POST['quantity'];
        $petgroom->details = $_POST['details'];
        $petgroom->image = $_POST['image'];
        if($petgroom->addpetgroom() > 0){
            $message = "Success Insert!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petGroom.php';</script>";
        }
    }
    
    function viewAll(){
        $petgroom = new petModel();
        return $petgroom->viewallpetgroom();
    }
    
    function viewpetgroom($groom_id){
        $petgroom = new petModel();
        $petgroom->groom_id = $groom_id;
        return $petgroom->viewpetgroom();
    }
    
    function editpetgroom(){
        $petgroom = new petModel();
        $petgroom->groom_id = $_POST['groom_id'];
        $petgroom->name = $_POST['name'];
        $petgroom->price = $_POST['price'];
        $petgroom->quantity = $_POST['quantity'];
        $petgroom->details = $_POST['details'];
        $petgroom->image = $_POST['image'];
        if($petgroom->modifypetgroom()){
            $message = "Success Update!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petGroom.php'?groom_id=".$_POST['groom_id']."';</script>";
        }
    }
    
    function delete(){
        $petgroom = new petModel();
        $petgroom->groom_id = $_POST['groom_id'];
        if($petgroom->deletepetgroom()){
            $message = "Success Delete!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petGroom.php';</script>";
        }
    }
}
class pethotelController{
    
    function add(){
        $pethotel = new pethotelModel();
        $pethotel->name = $_POST['name'];
        $pethotel->details = $_POST['details'];
        $pethotel->price = $_POST['price'];
        $pethotel->image = $_POST['image'];
        if($pethotel->addpethotel() > 0){
            $message = "Success Insert!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petHotel.php';</script>";
        }
    }
    
    function viewAll(){
        $pethotel = new pethotelModel();
        return $pethotel->viewallpethotel();
    }
    
    function viewpethotel($hotel_id){
        $pethotel = new pethotelModel();
        $pethotel->hotel_id = $hotel_id;
        return $pethotel->viewpethotel();
    }
    
    function editpethotel(){
        $pethotel = new pethotelModel();
        $pethotel->hotel_id = $_POST['hotel_id'];
        $pethotel->name = $_POST['name'];
        $pethotel->details = $_POST['details'];
        $pethotel->quantity = $_POST['quantity'];
        $pethotel->price = $_POST['price'];
        $pethotel->image = $_POST['image'];
        if($pethotel->modifypethotel()){
            $message = "Success Update!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petHotel.php'?hotel_id=".$_POST['hotel_id']."';</script>";
        }
    }
    
    function delete(){
        $pethotel = new pethotelModel();
        $pethotel->hotel_id = $_POST['hotel_id'];
        if($pethotel->deletepethotel()){
            $message = "Success Delete!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petHotel.php';</script>";
        }
    }
}
class petvetController{
    
    function add(){
        $petvet = new petvetModel();
        $petvet->name = $_POST['name'];
        $petvet->details = $_POST['details'];
        $petvet->quantity = $_POST['quantity'];
        $petvet->price = $_POST['price'];
        $petvet->image = $_POST['image'];
        if($petvet->addpetvet() > 0){
            $message = "Success Insert!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petVet.php';</script>";
        }
    }
    
    function viewAll(){
        $petvet = new petvetModel();
        return $petvet->viewallpetvet();
    }
    
    function viewpetvet($vet_id){
        $petvet = new petvetModel();
        $petvet->vet_id = $vet_id;
        return $petvet->viewpetvet();
    }
    
    function editpetvet(){
        $petvet = new petvetModel();
        $petvet->vet_id = $_POST['vet_id'];
        $petvet->name = $_POST['name'];
        $petvet->details = $_POST['details'];
        $petvet->quantity = $_POST['quantity'];
        $petvet->price = $_POST['price'];
        $petvet->image = $_POST['image'];
        if($petvet->modifypetvet()){
            $message = "Success Update!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petVet.php'?vet_id=".$_POST['vet_id']."';</script>";
        }
    }
    
    function delete(){
        $petvet = new petvetModel();
        $petvet->vet_id = $_POST['vet_id'];
        if($petvet->deletepetvet()){
            $message = "Success Delete!";
        echo "<script type='text/javascript'>alert('$message');
        window.location = '../../ApplicationLayer/ManagePetAssist/petVet.php';</script>";
        }
    }
}
?>
