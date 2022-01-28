<?php
// terenary operator
$score = 30;
echo $_SERVER['SERVER_NAME'] . "<br />";
echo $_SERVER['REQUEST_METHOD'] . "<br />";
echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
echo $_SERVER['PHP_SELF'] . "<br />";

if (isset($_POST["submit"])) {
    // cookies
    setcookie('gender', $_POST['gender'], time() + 86400);
    // session
    session_start();
    $_SESSION['name'] = $_POST['name'];
    echo $_SESSION['name'];
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php
        echo $score > 20 ? 'high score !' : 'low score :(';
        ?></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name">
        <select name="gender" id="">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>