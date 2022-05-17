<?php
    header('Access-Control-Allow-Origin: *');
    $exampleAPI = array( 
        "page" => "1",
        "results" =>
        array( 
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path"),
            array("title" => "Example Title", "poster_path" => "Example Path")
        )
    );
    echo json_encode($exampleAPI);
?>