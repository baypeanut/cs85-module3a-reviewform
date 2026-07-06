<!DOCTYPE html>
<html>
<head>
<title>Contact Me</title>
</head>
<body>

<?php

function validateInput($data, $fieldName) {
    global $errorCount;
    if (empty($data)) {
        echo "\"$fieldName\" is a required field.<br />\n";
        ++$errorCount;
        $retval = "";
    }
    else {
        $retval = trim($data);
        $retval = stripslashes($retval);
    }
    return($retval);
}

function validateEmail($data, $fieldName) {
    global $errorCount;

    if (empty($data)) {
        echo "\"$fieldName\" is a required field.<br />\n";
        ++$errorCount; $retval = "";
    }
    else {
        $retval = filter_var($data, FILTER_SANITIZE_EMAIL);

        if (!filter_var($retval, FILTER_VALIDATE_EMAIL)) {
            echo "\"$fieldName\" is not a valid e-mail address.<br />\n";
        }
    }
    return($retval);
}

?>

</body>
</html>
