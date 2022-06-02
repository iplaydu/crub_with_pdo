<?php 
    $title = "Registration Successful";
    require_once("includes/header.php"); 
    require_once("db/conn.php");
    
    if(isset($_POST['submit'])){
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

<hr>

<div class="card" style="width: 18rem;">
  <!-- img src="..." class="card-img-top" alt="..." //-->
  <div class="card-body">
    <h5 class="card-title"> <?php echo($lname . ', ' . $fname); ?> </h5>
    <p class="card-text">
    <?php 
        echo('Selected: ' . $selected);
        echo('<br>');
        echo('email: ' . $email);
        echo('<br>');
        echo('primary contact: ' . $contact);
    ?>
    </p>
    <a href="#" class="btn btn-primary">See you on <?php echo($dob);?></a>
  </div>
</div>

<?php require_once("includes/footer.php"); ?>
 