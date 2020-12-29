<?php include('include/config.php'); ?>
<html>
    <head>
    <title>My PHP Playground</title>
    </head>
    <body>
    <?php include('templates/header.php'); ?>
    <?php include('templates/menu.php'); ?>

    <?php
    $query = mysqli_query($sql, "SELECT * FROM tbl_articles");
    while($row = mysqli_fetch_assoc($query))
    {
        $title = $row['title'];
        $content = $row['content'];
    }?>

    <h1><?php echo $title; ?></h1>
    <p><?php echo $content; ?></p>

    <?php include('templates/footer.php'); ?>
    </body>
</html>