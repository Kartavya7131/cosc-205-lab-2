<?php
    function RenderJobPosting($JobId, $Title, $Desc, $Salary, $Type, $Location){
        $str = sprintf("<tr id=Job-%s> <td>%s</td> <td>%s</td> <td>%d</td> <td>%s</td> <td>%s</td> <td><button class='JobApplyButton'>Apply</button></td> </tr>", $JobId, $Title, $Desc, $Salary, $Type, $Location);
        echo $str;
    }
?>