<?php 
include "config.php";
 class Database{
    public $server=HOST;
    public $user=USER;
    public $pass=PASS;
    public $db=DB;
    public $link;
    public $error;

   public function __construct()
    {
         $this->connect();
    }
    public function connect(){
        $this->link =mysqli_connect($this->server,$this->user,$this->pass,$this->db);
        if(!$this->link)
        {
            $this->error="Database connection failed";
            return false;
        }

      
    }
    public  function insert($query){
        $result=mysqli_query($this->link,$query) or die($this->link->error. __LINE__);
        if($result){
            return $result;
        }

        else {
            return false;
        }

    }
    public function selectAll($data){
        $result=mysqli_query($this->link,$data) or die($this->link->error . __LINE__);
        if(mysqli_num_rows($result)){
            return $result;
        }
        else
        return false;
    }
    public function update($data){
        $result=mysqli_query($this->link,$data) or die($this->link->error . __LINE__);
        if($result){
            
            return $result;
        }
        else {
            return false;
        }

        
    }
    function deleteData($data)
        {
            $result=mysqli_query($this->link,$data) or die($this->link->error . __LINE__);
            if($result){
                
                return $result;
            }
            else {
                return false;
            }
        }
 }

?>