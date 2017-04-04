<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">   
    <title>Webdeveloper</title>
</head>
<body>


<div class="content">
    <?php 
        include 'includes/menu.php';
    ?>

    <h2>01 Loops <a name="example_01" style="opacity: 0;">.</a></h2>
    
    <?php 
        include 'includes/example_01.php';
    ?>

    <h2>02 Settings <a name="example_02" style="opacity: 0;">.</a></h2>
    
    <?php 
        include 'includes/example_02.php';
    ?>

</div>  

    <script src="js/main.js?v=<?php echo time(); ?>"></script>
</body>
</html>