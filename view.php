<?php 
    $title = "View Record";
    require_once("includes/header.php"); 
    require_once("db/conn.php");

    if(!isset($_GET['id'])){
        echo "<h1 class='text-danger'> Please check details and try again </h1>";
    }else{
        $id = $_GET['id'];
        $results = $crud->getAttendeeDetails($id);
        echo "<h1 class='text-danger'> BOOM! </h1>";
?>

<br/><br/><br/>
First Name: 
<?php echo $results['firstname']; ?>
Last Nae:
<?php echo $results['lastname']; ?>

<div class="card" style="width: 18rem;">
  <!-- img src="..." class="card-img-top" alt="..." //-->
  <div class="card-body">
    <h5 class="card-title"> <?php echo($results['lastname'] . ', ' . $results['firstname']); ?> </h5>
    <p class="card-text">
    <?php 
        echo('Selected: ' . $results['selectedname']);
        echo('<br>');
        echo('email: ' . $results['email']);
        echo('<br>');
        echo('primary contact: ' . $results['contact']);
    ?>
    </p>
    <a href="#" class="btn btn-primary">See you on <?php echo($results['dob']);?></a>
  </div>
</div>

<?php     } ?>
<br/><br/><br/>


<?php require_once("includes/footer.php"); ?>