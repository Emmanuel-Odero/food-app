<!-- Import header -->
<?php include('partials/menu.php') ?>
<div class="main-content">
    <div class="wrapper">
        <h1><strong>Add Admin</strong></h1>
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
                    <td colspan="2">Password</td>
                    <td>
                        <input type="submit" name="submit" value="Add Admin">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</div>
<!-- Import footer -->
<?php include('partials/footer.php') ?>