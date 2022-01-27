<?php
include('config/db_connect.php');

// check GET request id parameter
if (isset($_GET['id'])) {
    # code...
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    // make sql
    $sql = "SELECT * FROM pizzas WHERE id = $id";
    // get the query result
    $result = mysqli_query($conn, $sql);
    // fetch result in array format
    $pizza = mysqli_fetch_assoc($result);
    // free result from memory
    mysqli_free_result($result);
    // close the connection
    mysqli_close($conn);
}

?>
<html lang="en">
<?php
include 'Templates/header.php';
?>
<div class="container center">
    <?php if ($pizza) : ?>
        <h4><?php echo htmlspecialchars($pizza['title']); ?></h4>
        <p>Created By: <?php echo htmlspecialchars($pizza['email']); ?></p>
        <p><?php echo date($pizza['created_at']); ?></p>
        <h5>Ingredients</h5>
        <p><?php echo htmlspecialchars($pizza['ingredients']); ?></p>
    <?php else : ?>
        <h5>No such pizza exists!</h5>
    <?php endif; ?>
</div>
<?php
include 'Templates/footer.php';
?>

</html>