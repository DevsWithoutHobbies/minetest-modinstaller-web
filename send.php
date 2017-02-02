<html>
<head>
    <?php
        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");

        $from = 'info@mine-modinstaller.esy.es';

        $to = 'jonaspeeters.de@gmail.com';

        $subject = $_GET['subject'];

        $message = str_replace('|', "\r\n", $_GET['message']);

        $headers = 'From:' . $from;

        if(mail($to, $subject, $message, $headers))
            echo('t');
        else
            echo('f');

        echo "<meta http-equiv='refresh' content='0; URL=index.html?success=true'>";
    ?>
</head>
</html>
