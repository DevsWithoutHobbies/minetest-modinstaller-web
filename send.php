<html>
<head>
    <?php
        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");

        $from = 'devswithouthobbies@gmail.com';

        $to = 'devswithouthobbies@gmail.com';

        $subject = $_GET['subject'];

        $message = str_replace('|', "\r\n", $_GET['message']);

        $headers = 'From:' . $from;

        if(mail($to, $subject, $message, $headers))
            echo "<meta http-equiv='refresh' content='0; URL=index.html?success=true'>";
        else
            echo "<meta http-equiv='refresh' content='0; URL=index.html?success=false'>";


    ?>
</head>
</html>
