<?php
// Check connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);


}



$sql = "SELECT * FROM `posts` ORDER BY `posts`.`upload_time` DESC ";


$result = $conn->query($sql);

if ($result->num_rows > 0) {


while($row = $result->fetch_assoc()) {

    // Checks to see if comments exist
    $sql_com = "SELECT post_id FROM comments WHERE `post_id`='" . $row["id"]. "'";
    $result_com = $conn->query($sql_com);
    
    if ($result_com->num_rows > 0) {
        // output data of each row
        while($row_com = $result_com->fetch_assoc()) {
            $comments_ave = "<i class='far fa-comments'>";
        }
    } else {
        $comments_ave = "";
    }
    echo " " . "<a  href='big.php?id=" . $row["id"]. "'><article><h2> " . $row["title"]. "</h2><p> " . $row["comment"]. "</p><div class='topics'   id='topics'><a href='topics-post.php?topic=" . $row["topic"]. "'><p class='topics-hide' >" . $row["topic"]. "</p></div></a><a  href='big.php?id=" . $row["id"]. "'><br><div class='more'><i class='fas fa-reply'></i> ";
    echo $comments_ave;
    echo "</i></a></div><span>" . $row["display_time"]. " </span></artilce></article></div><br>";
}

} else {

echo "<article><h2>Theres no posts!</h2></article>";

}

$conn->close();

?>




