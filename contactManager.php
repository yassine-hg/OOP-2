<?php

    include_once "contact.php";

    class ContactManager{

        $contacts = [];

        function addContact($contact){
            $this->contacts[] = $contact;
            echo "name = $contact->name phone: $contact->phone email: $contact->phone";
        }

        function listContact(){
            foreach($this->contacts as $contact){
                $contact->displayCo();
                echo "<br>";
            }
        }
    }

?>