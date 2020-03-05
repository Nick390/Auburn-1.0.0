<?php

require_once 'includes\source\session.php';
require_once 'includes\source\dp_connect.php';

if(isset($_POST['login-btn'])) {
    $user = $_POST['user-name'];
    $password = $_POST['user-pass'];

    try {
        $SQLQuery = "SELECT * FROM user WHERE username = :username";
        $statement = $conn->prepare($SQLQuery);
        $statement->execute(array(':username' => $user));

        while ($row = $statement->fetch()) {
         $id = $row['id'];
         $hashed_password = $row['password'];
         $username = $row['username'];

            if(password_verify($password, $hashed_password)){
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $username;
                header('location: pages/dashboard.php');
            }
            else {
                echo "Error: Invalid username or password";
            }
        }
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>