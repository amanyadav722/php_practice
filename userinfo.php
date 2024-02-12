<?php

$access = mysqli_connect('localhost', 'root');

if ($access) {
    echo "It's connected succesully";
}else {
    echo "It's not yet connected man";
}

mysqli_select_db($access, 'websitebackended');

$user = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comment = $_POST['comment'];


$query = " insert into viewers3 (Username, Mobile, Email, Comment)
values ('$user', '$mobile', '$email', '$comment') ";

echo "$query";

mysqli_query($access, $query);

header('location:index.php');

?>