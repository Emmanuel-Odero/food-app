<!-- Import header -->
<?php include('partials/menu.php') ?>
<div class="main-content">
    <div class="wrapper">
        <h1><strong>Add Admin</strong></h1>
        <br><br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter your full name">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="text" name="username" placeholder="Enter your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Your Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div>
<!-- Import footer -->
<?php include('partials/footer.php') ?>
<?php
//Process the value and save it to database
//Check for onclick event
if(isset($_POST['submit'])){
    //Button Clicked
    //get data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //Password encrypted with md5
    //Inserting the data into the database
    $sql = "
    INSERT INTO tbl_admin SET
    full_name = '$full_name',
    username = '$username',
    password = '$password'
    ";
    //echo $sql; //confirming if our sql querry collects the data we want
    // database connection
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, 'Food_Order_App') or die(mysqli_error());//selecting Database
    echo "Success";
    
    //$res =mysli_query($comn, $sql) or die(mysqli_error());
}
?>