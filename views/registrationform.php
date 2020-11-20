<?php include('abstract/header.php'); ?>

<h1>Registration Form</h1>
    <form action ="registrationform.php" method="post">

            <div>First Name:
                <input type="text" name="firstname"></div>

            <div>Last Name:
                <input type="text" name="lastname"></div>

            <div>Date of Birth:
                <input type="text" name="DOB"></div>

            <div>Email ID:
                <input type="text" name="email"></div>

            <div>Password:
                <input type="text" name="password"></div>

            <div>
                <input type="submit" value="Sign up"></div>
    </form>

<?php include('abstract/footer.php'); ?>
