<?php
    $result = checkdate(2, 29, 2006);
    if ($result) {
        echo "29 Feb 2006 is a valid date.";
    }else{
        echo "29 Feb 2006 is not a valid date.";
    }
?>