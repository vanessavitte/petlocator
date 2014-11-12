<?php
if ($_GET['randomId'] != "PH5xeIeUdgO7QMEPeMClFxWOAZKzpyFlOFrslytNbRPzI0AB3A6NOX1EAOEgceX1") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
