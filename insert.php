<?php 
  include_once 'database.php';

  class  InformationInsert {
        public $db;
    function __construct()
    {        
        $this->db=new Database();
         
         
    }

      public function dataInsert($data){
          $name=$data['fullName'];
          $address=$data['address'];
          
          if(empty($name) || empty($address) ){
           
            $msg=[
              'message'=>"Must be fill up",
              'status'=>false
            ];
            return $msg;
          }
          else
          {
            $query="INSERT INTO info(`name`,`address`) VALUES('$name','$address')";
            $res=$this->db->insert($query);
            if($res){
              $msg=[
                'message'=>"Insert successfullay",
                'status'=>true
              ];
              
                return $msg;
            }
            else{
               $msg=[
                'message'=>"Failed",
                'status'=>false
              ];
               return $msg;
            }
          }

      }
      public function allData(){

        $query="SELECT * FROM info ORDER BY id ASC";
        $result=$this->db->selectAll($query);

        return $result;

      }
      
      public function updateData($id){
        $query="SELECT * FROM info WHERE id='$id'";
        $result=$this->db->selectAll($query);
        return $result;

      }
      public function deleteInfo($id){
        $query="DELETE FROM info WHERE id='$id'";
        $res=$this->db->deleteData($query);
        if($res)
        {
          $msg="Delete successfullay";
          return $msg;
        }
        else
        {
          $msg="Failed";
           return false;
        }
      }
     public function updateInformation($data,$id){
      
      $name=$data['fullName'];
      $address=$data['address'];
      if(empty($name) || empty($address) ){
        $msg="Must be fill up";
        return $msg;
      }
      else
      {
        $query="UPDATE info SET name='$name' ,address='$address' WHERE id='$id'";
        $res=$this->db->update($query);
        if($res){
            $msg="Insert successfullay";
            return $msg;
        }
        else{
           $msg="Failed";
           return false;
        }
      }


      }
  }
