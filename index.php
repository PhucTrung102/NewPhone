<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.0/css/pro.min.css"/>
    <title>NewPhone</title>
    <script src="jquery-3.6.1.min.js"></script>
    <script src="js/product.js"></script>
    <script src="js/slideshow.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/cssfooter.css">
    <link rel="stylesheet" href="admincp/css/styleadmincp.css">
</head>

<body>

    <?php
        session_start();
    // session_start();
    // unset($_SESSION['dangky']);
        include("admincp/config/config.php");
        include("pages/header.php"); 
        include("pages/main.php");
        // include("pages/footer.php");
    ?>

</body>
</html>