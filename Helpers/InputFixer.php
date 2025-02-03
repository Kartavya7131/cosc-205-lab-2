<?php
    function fixInput($in) {
        $in = trim($in);
        $in = stripslashes($in);
        return $in;
    }
?>