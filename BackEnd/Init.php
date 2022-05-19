<?php namespace Init;

$sectionRouter = $_GET['sectionRouter'];

class init {
    public static function in($backend=index, $frontend=['index']){
        foreach ($frontend as $file) {
            if (file_exists("FrontEnd/Html/{$file}.html")) {require("FrontEnd/Html/{$file}.html");}
            else {echo "Error: Define the tag fragment in Html.";}
        }
    }
};
?>