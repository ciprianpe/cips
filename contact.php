<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$message = $_POST['message'];
$email = $_POST['email'];
$to = "ciprianpe@live.com";

mail ($to, $message, "FROM: " . $first_name . $last_name . $email);
echo "Mesajul a fost trimis!";

?>