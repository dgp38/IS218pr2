<?php

function  create_account($firstname,$lastname,$birthday,$email,$password) {
    global $db;
    $query = 'INSERT INTO questions 
                ( email,fname, lname, bithday,password)
                VALUES
                    (:email,:fname,:lname,:bithday,:password)';
    $statement = $db->prepare($query);
    $statement->bindvalue(':email', $email);
    $statement->bindvalue(':firstname', $firstname);
    $statement->bindvalue(':lastname', $lastname);
    $statement->bindvalue(':birthday',$birthday);
    $statement->bindvalue(':password',$password);
    $statement->execute();
    $statement->closeCursor();
}
