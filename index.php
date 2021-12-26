<?php

?>

<!DOCTYPE html>
<html lang="en">

<?php
include 'Templates/header.php';
?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="" method="" class="white">
        <label> Your Email : </label>
        <input type="text" name="email">
        <label> Pizza Title : </label>
        <input type="text" name="title">
        <label> Ingredients (comma separated): </label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php
include 'Templates/footer.php';
?>




</html>