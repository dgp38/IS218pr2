<?php include('abstract/header.php'); ?>


        <form action ="index.php" method="post">
            <input type = "hidden" name="action" value = "validatelogin">
            <div>Email ID:
                <input type="text" name="emailID"></div>

            <div>Password:
                <input type="text"  name="password"></div>

            <div>Submit:
                <input type="submit" name="submit" value="submit"></div>
        </form>
<?php include('abstract/footer.php'); ?>
