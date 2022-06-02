
<?php 
$title = "View Records";
require_once("includes/header.php"); 
require_once("db/conn.php");

$results = $crud->getAttendee();
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Selected</th>
        <th>Actions</th>
    </tr>

    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>

    <tr>
        <td><?php echo $r['attende_id']; ?></td>
        <td><?php echo $r['firstname']; ?></td>
        <td><?php echo $r['lastname']; ?></td>
        <td><?php echo $r['selectedname']; ?></td>
        <td>
            <a href="view.php?id=<?php echo $r['attende_id']; ?>" class="btn btn-primary">View</a>
            <a href="edit.php?id=<?php echo $r['attende_id']; ?>" class="btn btn-warning">Edit</a>
        </td>
    </tr>

    <?php } ?>

</table>

<?php require_once("includes/footer.php"); ?>