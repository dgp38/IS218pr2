<?php include('abstract/header.php'); ?>

<h1>Registration Form</h1>
<body>
        <form action ="index.php" method="post">
            <input type="hidden" name="action" value ="submit_registration">

            <div>First Name:
                <input type="text" name="fname"></div>

            <div>Last Name:
                <input type="text" name="lname"></div>

            <div>Date of Birth:
                <input type="text" name="birthday"></div>

            <div>Email ID:
                <input type="text" name="email"></div>

            <div>Password:
                <input type="text" name="password"></div>

            <div><input type="submit" value="Sign up"></div>
        </form>
</body>
<?php include('abstract/footer.php'); ?>
