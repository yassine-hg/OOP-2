<?php

    class Contact{
        public $name;
        public $phone;
        public $email;
        
        function  __construct($name, $phone, $email){
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
        }

        function displayCo(){
            echo "contact name: $this->name phone: $this->phone the email is: $this->email";
        }
    }

?>