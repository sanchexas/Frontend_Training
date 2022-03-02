<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

echo "<p>Thanks for comment, $name </p>";
echo "<p><i>$comment</i></p>";
echo "<p>We will send the answer to $email</p>";
?>