<!DOCTYPE html>
<html lang="en">

<head>
    <title>Request</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Name:<input type="text" name="name">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        if (empty($name)) {
            echo "name is empty";
        } else {
            print_r($_POST);
        }
    }
        ?>
</body>
</html>