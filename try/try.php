<html>
    <head>
        <title>simaple login page</title>
    </head>
    <?php
        $file = file('database.txt');
        $database = fopen('database.txt','r');
        $data_text = fread($database, filesize('database.txt'));
        $data_array = preg_split("/[\s]/", $data_text);
        
        /*
        $Username = $_REQUEST["input_Username"];
        $Password = $_REQUEST["input_Password"];
        if (!$Username||!$Password){
            echo"<h1>Access Denied</h1>";
            echo"<p>please fill in all firld</p>";
        }else if ($Username=="ivane"&&$Password==9956){
            echo"<h1>welcome $Username</h1>";
        }
        */
        
        for ($i=0;$i<sizeof($data_array);$i++){
            echo($data_array[$i]);
            echo"<p></p>";
        }

    ?>
<html>