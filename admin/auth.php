<?php
include "dbconnection.php";

function authenticate($table, $username, $password)
{
    global $conn;

    // allow only safe table names
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $table)) {
        return false;
    }

    $sql = "SELECT * FROM `$table` WHERE username = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows !== 1) {
        return false;
    }

    $row = $result->fetch_assoc();

    return password_verify($password, $row['password']) ? $row : false;
}
