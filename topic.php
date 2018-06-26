<<<<<<< HEAD
<?php
//topic.php
include 'databaseConnection.php';
include 'header.php';
 
//first select the topic based on $_GET['cat_id']
$top_id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT
            topic_id,
            topic_subject
        FROM
            topics
        WHERE
            topics.topic_id = '$top_id'";
 
$result = mysqli_query($conn, $sql);
 
if(!$result)
{
    echo "$result";
    echo 'The topic could not be displayed, please try again later.' . mysqli_error($conn);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
        $sql = "SELECT 
                    posts.post_topic,
                    posts.post_content,
                    posts.post_date,
                    posts.post_by,
                    users.user_id,
                    users.user_name
                FROM
                    posts
                LEFT JOIN
                    users
                ON
                    posts.post_by = users.user_id
                WHERE
                   posts.post_topic = '$top_id'";
         
        $result = mysqli_query($conn, $sql);
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.<br>';
            echo "$conn->error";

        }
        else
        {   $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
                echo "$conn->error";
            }
            else
            {
                //prepare the table
             echo    '<form method="post" action="reply.php?id=' . $top_id .'">';
                echo '<table border="1">
                      <thead>
                      <tr>
                        <th colspan="2"><h3 align="center">' . $row['post_content'] . '</h3></th>
                      </tr>
                      </thead>'; 
                
                while($row = mysqli_fetch_assoc($result))
                {   

                    echo '<tbody>';
                            '<tr>';
                        echo '<td class="leftpart2">';
                            echo $row['user_name'] . '<br>' . $row['post_date'];
                        echo '</td>';
                        echo '<td class="rightpart2">';
                            echo $row['post_content'];
                        echo '</td>';
                    echo '</tr>';

                }
                    echo '<tr>';
                    echo '<td colspan="2">';
                    echo '<h2 class="h2table">Reply: </h2>';
                    echo    '<form method="post" action="reply.php?id=' . $top_id .'">';
                    echo        '<textarea name="reply-content"></textarea>';
                        echo '<input type="submit" value="Submit reply"/>';
                        echo  '</form>';
                        echo  '</td>';
                        echo  '</tr>';
                        echo '</tbody>';
                    echo    '</form>'; 
                    echo '</table>';  
                echo    '</form>'; 
            }
        }
    }
}


include 'footer.php';
=======
<?php
//topic.php
include 'databaseConnection.php';
include 'header.php';
 
//first select the topic based on $_GET['cat_id']
$top_id = mysqli_real_escape_string($conn, $_GET['id']);
$sql = "SELECT
            topic_id,
            topic_subject
        FROM
            topics
        WHERE
            topics.topic_id = '$top_id'";
 
$result = mysqli_query($conn, $sql);
 
if(!$result)
{
    echo "$result";
    echo 'The topic could not be displayed, please try again later.' . mysqli_error($conn);
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'This topic does not exist.';
    }
    else
    {
        $sql = "SELECT 
                    posts.post_topic,
                    posts.post_content,
                    posts.post_date,
                    posts.post_by,
                    users.user_id,
                    users.user_name
                FROM
                    posts
                LEFT JOIN
                    users
                ON
                    posts.post_by = users.user_id
                WHERE
                   posts.post_topic = '$top_id'";
         
        $result = mysqli_query($conn, $sql);
         
        if(!$result)
        {
            echo 'The topics could not be displayed, please try again later.<br>';
            echo "$conn->error";

        }
        else
        {   $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) == 0)
            {
                echo 'There are no topics in this category yet.';
                echo "$conn->error";
            }
            else
            {
                //prepare the table
             echo    '<form method="post" action="reply.php?id=' . $top_id .'">';
                echo '<table border="1">
                      <thead>
                      <tr>
                        <th colspan="2"><h3 align="center">' . $row['post_content'] . '</h3></th>
                      </tr>
                      </thead>'; 
                
                while($row = mysqli_fetch_assoc($result))
                {   

                    echo '<tbody>';
                            '<tr>';
                        echo '<td class="leftpart2">';
                            echo $row['user_name'] . '<br>' . $row['post_date'];
                        echo '</td>';
                        echo '<td class="rightpart2">';
                            echo $row['post_content'];
                        echo '</td>';
                    echo '</tr>';

                }
                    echo '<tr>';
                    echo '<td colspan="2">';
                    echo '<h2 class="h2table">Reply: </h2>';
                    echo    '<form method="post" action="reply.php?id=' . $top_id .'">';
                    echo        '<textarea name="reply-content"></textarea>';
                        echo '<input type="submit" value="Submit reply"/>';
                        echo  '</form>';
                        echo  '</td>';
                        echo  '</tr>';
                        echo '</tbody>';
                    echo    '</form>'; 
                    echo '</table>';  
                echo    '</form>'; 
            }
        }
    }
}


include 'footer.php';
>>>>>>> 12b718f0a5ad44058d83adf92897c71ce45933ec
?>