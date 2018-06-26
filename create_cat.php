<<<<<<< HEAD
<?php
//create_cat.php
require 'DatabaseConnection.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
    // "required" under category name forces them to fill it out
    echo '<form method="post" action="">
        Category name: <input type="text" name="cat_name" required/><br>
        Category description:<br> <textarea name="cat_description" /></textarea><br>
        <input type="submit" value="Add category" />
     </form>';
}
else
{   
    $sql = "INSERT INTO 
                categories(cat_name, cat_description)
            VALUES('" . mysqli_real_escape_string($conn, $_POST['cat_name']) . "',
                   '" . mysqli_real_escape_string($conn, $_POST['cat_description']) . "')";
               
            
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        //something went wrong, display the error
        echo 'Error: ' . mysqli_error($conn);
    }
    else
    {
        echo 'New category successfully added.';
    }

}
?>

=======
<?php
//create_cat.php
require 'DatabaseConnection.php';
include 'header.php';

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    //the form hasn't been posted yet, display it
    // "required" under category name forces them to fill it out
    echo '<form method="post" action="">
        Category name: <input type="text" name="cat_name" required/><br>
        Category description:<br> <textarea name="cat_description" /></textarea><br>
        <input type="submit" value="Add category" />
     </form>';
}
else
{   
    $sql = "INSERT INTO 
                categories(cat_name, cat_description)
            VALUES('" . mysqli_real_escape_string($conn, $_POST['cat_name']) . "',
                   '" . mysqli_real_escape_string($conn, $_POST['cat_description']) . "')";
               
            
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        //something went wrong, display the error
        echo 'Error: ' . mysqli_error($conn);
    }
    else
    {
        echo 'New category successfully added.';
    }

}
?>

>>>>>>> 12b718f0a5ad44058d83adf92897c71ce45933ec
