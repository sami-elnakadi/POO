<?php
class Validator{

    public function sanitizeString($text){
        echo filter_var ( $text, FILTER_SANITIZE_STRING);
    }

    public function sanitizeEntier($text){
        echo filter_var ( $text, FILTER_SANITIZE_NUMBER_INT);
    }

    public function sanitizeDecimal($text){
        echo filter_var ( $text, FILTER_SANITIZE_FLOAT);
    }

    public function sanitizeMail($text){
        echo filter_var ( $text, FILTER_SANITIZE_EMAIL);
    }
}
?>