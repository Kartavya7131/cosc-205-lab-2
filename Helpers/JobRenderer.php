<?php
    function RenderJobPosting($JobId, $Title, $Company, $Desc, $Salary, $Type, $Location, $LoggedIn){
        $str = sprintf("<td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>", $Title, $Company, $Desc, $Salary, $Type, $Location);
        if ($LoggedIn){
            $str = sprintf("%s <td><button class='JobApplyButton'>Apply</button></td>", $str);
        }
        $str = sprintf("<tr id=Job-%s> %s </tr>", $JobId, $str);
        echo $str;
    }
?>