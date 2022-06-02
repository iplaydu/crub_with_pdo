<?php 
    $title = "Editing Record";
    require_once("includes/header.php"); 
    require_once("db/conn.php");

    if(!isset($_GET['id'])){

    }else{
    
        $id = $_GET['id'];
        $results = $crud->getAttendeeDetails($id)
    
?>


<h1 class="text-center"><?php echo $title ?>!</h1>

<form method="post" action="editpost.php">
    <input type="hidden"  value="<?php echo($results['attende_id']); ?>" name="id" />
  <div class="mb-3">
    <label for="Firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="Firstname" name="Firstname" value="<?php echo($results['firstname']); ?>" aria-describedby="firstNamehelp">
  </div>
  <div class="mb-3">
    <label for="Lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="Lastname" name="Lastname" value="<?php echo($results['lastname']); ?>" aria-describedby="lastNamehelp">
  </div>
  <div class="mb-3">
    <label for="dob" class="form-label">Date of Birth</label>
    <input type="text" class="form-control" id="datepicker" name="datepicker" value="<?php echo($results['dob']); ?>" aria-describedby="DOBhelp">
  </div>
  <div class="mb-3">
  <label for="select" selected="selected"  class="form-label">Please Select</label>
  <select class="form-control" id="selected" name="selected">  
      <?php //while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <option value="<?php echo $results['selected_id'] ?>"><?php echo($results['selectedname']); ?></option>
      <?php //} ?>
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" value="<?php echo($results['email']); ?>" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="Phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="Phone" name="Phone" value="<?php echo($results['phone']); ?>" aria-describedby="phoneHelp">
    <div id="phoneHelp" class="form-text">We'll never share your Phone with anyone else.</div>
  </div>  
  <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
</form>

<?php } ?>

<br/>
<br/>
<br/>

<?php require_once("includes/footer.php"); ?>