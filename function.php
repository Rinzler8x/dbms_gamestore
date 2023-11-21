<?php

    function emptyInputSignup($name, $email, $username, $password){
        if(empty($name) || empty($email) || empty($username) || empty($password)){
            $result = true;
        } else{
            $result = false;
        }

        return $result;
    }

    function invalidEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }

    function usernameExists($conn, $username, $email){
        $sql = "SELECT * FROM users WHERE users_username = ? or users_email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: /Game store sem v/signup.php?error=stmtfailed");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        } else{
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn, $name, $email, $username, $password){
        $sql = "INSERT INTO users (users_username, users_email, users_password, users_name) VALUES (?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: /Game store sem v/signup.php?error=stmtfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $password, $name);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: /Game store sem v/login.php?error=Please login");
        exit();
    }

    function emptyInputLogin($username, $password){
        if(empty($username) || empty($password)){
            $result = true;
        } else{
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $username, $password){
        $sql = "SELECT * FROM users";
        $resultData = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($resultData)){
            if($username == $row["users_username"] && $password == $row["users_password"]){
                session_start();
                $_SESSION["username"] = $row["users_username"];
                $_SESSION["id"] = (int)$row["users_id"];
                mysqli_close($conn);
                header("location: /Game store sem v/index.php");
                exit();
            } 
        }
        mysqli_close($conn);
        header("location: /Game store sem v/login.php?error=Invalid username or password");
        exit();
    }

