<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body>

    <h1>list all activities</h1>
    <table border=1>
        <tr>
            <td> id</td>
            <td>type </td>
            <td>name </td>
            <td>date</td>
            <td>relegion</td>
            <td>address</td>
            <td>email</td>
            <td>password</td>
            <td>gender</td>
            <td>phone</td>
        </tr>
        
<?php
                $myfile=fopen("UsersFile.txt","r+") or die("unable to open file!");
                while(!feof($myfile));
                {
                    $line=fgets($myfile);
                    echo"<tr>";
                  $Arrayline=explode("~",$line);
                        for($i=0;$i<count($Arrayline);$i++)
                        {
                            echo "<td>".$Arreyline[$i]."</td>";
                        }
                        echo"<tr>";
                }
                fclose($myfile);
                 ?>
    </table>
</body>

</html>