<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="name" placeholder="Contact-name"><br>
        <input type="text" name="phone" placeholder="contact-phone">
        <input type="email" name="email" placeholder="contact-email">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php

    include_once "contact.php";
    include_once "contactManager.php";

    $contactManager = new ContactManager();

    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];

        $newcontact = new Contact($name, $phone, $email);

        $contactManager->addContact($newcontact);

        $contactManager->listContact();
    }
?>