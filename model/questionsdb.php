<?php
function get_users_questions($userId) {
    global $db;

    $query = 'SELECT * FROM questions WHERE ownerid = :userId';
    $statement = $db->prepare($query);
    $statement->bindValue(':userId' , $userId);
    $statement->execute();
    $question = $statement->fetchAll();
    $statement->closeCursor();

    return $question;
}

function create_question($title, $body, $skills, $userId) {
    global $db;
    $query = 'INSERT INTO questions 
                (title, body,skills,ownerid)
                VALUES
                    (:title,:body,:skills,:ownerid)';
    $statement = $db->prepare($query);
    $statement->bindvalue(':title', $title);
    $statement->bindvalue(':body', $body);
    $statement->bindvalue(':skills', $skills);
    $statement->bindvalue(':ownerid', $userId);
    $statement->execute();
    $statement->closeCursor();
}