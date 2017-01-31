<html>
<head>
    <?php
        ini_set( 'display_errors', 1 );
        
        error_reporting( E_ALL );
        
        $from = $_GET["from"];
        
        $to = $_GET["to"];
        
        $subject = $_GET["subject"];
        
        $message = $_GET["message"];
        
        $headers = "From:" . $from;
        
        if (subject == "modinstaller") {
            mail($to,$subject,$message, $headers);
        }
        
        echo "<meta http-equiv='refresh' content='5; URL=index.html'>";
    ?>
</head>
</html>
