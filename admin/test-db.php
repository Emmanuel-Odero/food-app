<H1>Testing DB</H1>
<?php
$user = 'root';
$pass= '';
$db = 'testdb';
$conn = new mysqli('localhost', $user, $pass, $db) or die("Oops!! Did not connect");
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if($resultCheck > 0){
    while($row=mysqli_fetch_assoc($result)){
        echo $row['user_uid'] . "<br>";
    }
}
?>
