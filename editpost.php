<?php 
    
    if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $fname = $_POST['Firstname'];
      $lname = $_POST['Lastname'];
      $dob = $_POST['datepicker'];
      $email = $_POST['exampleInputEmail1'];
      $contact = $_POST['Phone'];
      $selected = $_POST['selected'];

      $isSuccess = $crud->insertAttendee($fname, $lname, $dob, $selected, $email, $contact);
      
      if($isSuccess){
        echo '<h1 class="text-center text-success">You have been registered</h1>';
      }else{
        echo '<h1 class="text-center text-danger">error processing</h1>';
      }
    }else{echo 'FOO!';}
    
?>

<hr