<<<<<<< HEAD
<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>My forum</h1>
    <div id="wrapper">
        <div id="menu">
            <a class="item" href="/forum/index.php">Home</a> -
            <a class="item" href="/forum/create_topic.php">Create a topic</a> -
            <a class="item" href="/forum/create_cat.php">Create a category</a>
        </div>
        <div id="userbar">
            <?php
            if(isset($_SESSION['signed_in']))
            {
                echo 'Hello ' . $_SESSION['user_name'] . '. Not you? <a class="item" href="signout.php">Sign out</a>';
            }
            else
            {
                echo '<a class="item" href="signin.php">Sign in</a> or <a class="item"
                href="signup.php">Create an account</a>';
            } ?>
        </div>
        <div id="content">

=======
<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="A short description." />
    <meta name="keywords" content="put, keywords, here" />
    <title>PHP-MySQL forum</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h1>My forum</h1>
    <div id="wrapper">
        <div id="menu">
            <a class="item" href="/forum/index.php">Home</a> -
            <a class="item" href="/forum/create_topic.php">Create a topic</a> -
            <a class="item" href="/forum/create_cat.php">Create a category</a>
        </div>
        <div id="userbar">
            <?php
            if(isset($_SESSION['signed_in']))
            {
                echo 'Hello ' . $_SESSION['user_name'] . '. Not you? <a class="item" href="signout.php">Sign out</a>';
            }
            else
            {
                echo '<a class="item" href="signin.php">Sign in</a> or <a class="item"
                href="signup.php">Create an account</a>';
            } ?>
        </div>
        <div id="content">

>>>>>>> 12b718f0a5ad44058d83adf92897c71ce45933ec
