<?php

  include_once 'insert.php';

  $data=new InformationInsert();
 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $res = $data->dataInsert($_POST);
    if($res['status']){
      header('location:list.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="my-5"> 

 
<div class="w-25 m-auto  border">
<h2 class="text-center my-5">Inforamtion form</h2>
<?php if(isset($res)){
?>
<h4 class="text-center my-5 <?php echo $res['status'] ? "text-info" : "text-danger" ?> " > <?php echo $res['message']?></h4>
<?php
}
?>
<a href="list.php" class="btn btn-info mr-auto" >ALl info</a>
<form  class="p-5" action="" method="post"> 
  <div class="form-group ">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="fullName" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <textarea name="address" id="" cols="5"  rows="5" class="form-control" id="exampleInputPassword1"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
</div>
    


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>