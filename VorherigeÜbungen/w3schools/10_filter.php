<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php


        $Filter = filter_list();
        foreach($Filter as $id=> $filter){
            echo "<tr><td>" .$filter . "</td><td>" . filter_id($filter) . "</td></tr>";
        }
        ?>
    </table>

</body>

</html>