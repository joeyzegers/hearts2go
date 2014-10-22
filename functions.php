<?php
function register_user($register_data) {
    global $con;
    array_walk($register_data, 'array_sanitize');
    $register_data['password'] = md5($register_data['password']);
    
    $fields = implode(', ', array_keys($register_data));
    $data = '\'' . implode('\', \'', $register_data) . '\'';
    
    return mysqli_query($con, "INSERT INTO users($fields) VALUES ($data)");
}

function doesUsernameExist($username) {
    global $con;
    $username = trim(mysqli_real_escape_string($con, $username));
    
    return mysqli_fetch_assoc(mysqli_query($con, "SELECT username FROM users WHERE username = '$username'")) ? true : false;
}

function error_handeling($error) {
    return '<ul><li>' . implode('</li><li>', $error) . '</li></ul>';
}

function array_sanitize(&$item) {
    global $con;
    $item = htmlentities(mysqli_real_escape_string($con, $item));
}

function print_array($array) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
?>