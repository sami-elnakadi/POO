<?php
class Validator{

    public function sanitizeString($text){
        echo filter_var ( $text, FILTER_SANITIZE_STRING);
    }

    public function sanitizeEntier($number){
        echo filter_var ( $number, FILTER_SANITIZE_NUMBER_INT);
    }

    public function sanitizeDecimal($deci){
        echo filter_var ( $tdeci, FILTER_SANITIZE_FLOAT);
    }

    public function sanitizeMail($mail){
        echo filter_var ( $mail, FILTER_SANITIZE_EMAIL);
    }
}
?>