<?php namespace Init;
class init {
    public static function in($path='/', $backend=index, $frontend=index){
        if (file_exists("FrontEnd/Html/{$frontend}.html")) {require("FrontEnd/Html/{$frontend}.html");}
        else {echo "Error: Define the tag fragment in Html.";}       
    }
};
?>