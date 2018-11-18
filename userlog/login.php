<?php

    require '../mysqlin.php';

    $get = json_decode($_POST["param"]);

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$get->login]);
    $dbarr = $stmt->fetch(PDO::FETCH_LAZY);


    if($get->type == 'login'){
        // Logging

        if($dbarr){
            $pass = $dbarr->pass_hash;

            if(password_verify($get->pass, $pass)) {
                echo 'Gut, gut';
            } else {
                echo 'Wrong password';
            }
        } else {
            echo 'No such user';
        }
    } else {
        // Registering then

        if(!testLogin($get->login)){
            echo "Login is incorrect";
        } else if($dbarr) {
            echo "Account with that login already exists";
        } else if(!testEmail($get->email)) {
            echo "Email is incorrect";
        } else if(!testPass($get->pass  )){
            echo "Password incorrect";
        } else {
            // Все проверки пройдены, записываем в базу данных

            $values = array($get->login, password_hash($get->pass, PASSWORD_DEFAULT), $get->email);
            $sql = "INSERT INTO users (username,pass_hash,email) VALUES (?,?,?)";
            $stmt = $pdo->prepare($sql);

            //if ($stmt){}
            // TODO Registration conformation

            echo "Ok";

        }

    }
    //Return value of that script - echo(value);

    function testLogin($login){
        // TODO Make a login tester
        return true;
    }
    function testEmail($email){
        // TODO Make a email tester
        return true;
    }
    function testPass($pass){
        // TODO Make a password tester
        return true;
    }
?>