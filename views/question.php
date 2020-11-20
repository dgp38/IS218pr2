<?php include('abstract/header.php'); ?>

<h1>Question Form</h1>
<form action ="question.php" method="post">

    <div>Question Name:
        <input type ="text" name ="quesname"></div>

    <div>Question Body:
        <textarea cols="30"  rows="10" name ="quesbody"></textarea>
    </div>

    <div>Question Skills:
        <input type ="text" name ="quesskill"></div>

    <div><input type="submit" name="submit" value="submit"></div>
</form>

<?php include('abstract/footer.php'); ?>
