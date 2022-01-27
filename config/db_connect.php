<?php
// connect to database
$conn = mysqli_connect('localhost', 'albert', 'albert@1990', 'ninja_pizza');
if (!$conn) {
    echo 'Connection error' . mysqli_connect_error();
};
