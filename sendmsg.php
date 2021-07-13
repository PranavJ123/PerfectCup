<?php
//Open a new connection to a mysqli server
$mysqli = new mysqli('sql303.epizy.com','epiz_29123668','jsweHmkUu4dNFMs','epiz_29123668_perfectcup');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
$email = mysqli_real_escape_string($mysqli,$_POST['email']);
$message = mysqli_real_escape_string($mysqli,$_POST['message']);

if (strlen($fname) > 50) {
    echo 'fname_long';

} elseif (strlen($fname) < 2) {
    echo 'fname_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

}
else{
    $query = "SELECT * FROM contact WHERE email = '$email'";
    $result  = mysqli_query($mysqli,$query) or die(mysqli_error());
    $num_row = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);

    if($num_row<1){
        $insert_row = $mysqli->query("INSERT INTO contact (fname,email,message) VALUES('$fname','$email','$message')");
        if($insert_row){
            $_SESSION['login'] = $mysqli->insert_id;
            $_SESSION['fname'] = $fname;
            $_SESSION['email'] = $email;
            echo 'true';
        }
        
    }
    else{
        echo 'false';
    }
}

?>