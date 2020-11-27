<?php include('abstract/header.php'); ?>
<a href=".?action=display_question_form&userId=<?php echo $userId; ?>">Add Question</a>
<h1> <?php echo $F_name['fname'] ; ?>&nbsp;<?php echo $F_name['lname']; ?>  </h1>
<table>
    <tr>
        <th>Title</th>
        <th>body</th>
        <th>skill</th>
    </tr>
    <?php foreach ($questions as $question): ?>
        <tr>
            <td><?php echo $question['title']; ?></td>
            <td><?php echo $question['body']; ?></td>
            <td><?php echo $question['skills']; ?>
        </tr>
    <?php endforeach; ?>
</table>

<?php include('abstract/footer.php');  ?>
