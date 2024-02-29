<?php
class FromNetoyer {


    public static function NetoyerFormString($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace( " ","",$inputText);
    
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }
    public static function NetoyerFormNomUtulisateur($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace( " ","",$inputText);
        return $inputText;
    }

    public static function NetoyerFormPass($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    }

    public static function NetoyerFormEmail($inputText){ 
        $inputText = strip_tags($inputText);
        $inputText = str_replace( " ","",$inputText);
        return $inputText;
    }

}
?>