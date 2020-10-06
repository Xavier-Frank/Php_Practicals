<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello PhP</title>
</head>
<body>

    <?php
        #. Validating data : Check if data is in proper form
        #. Sanitize data : Remove any illegal chars from the data

        /*filter_list() fxn to list what php filter extension offers */

    ?>
    <table>
        <tr>
            <td> <b> Filter Name </b></td>
            <td> <b> Filter ID </b></td>
        </tr>
        <?php foreach (filter_list() as $id => $filter)
                {
                    echo '<tr><td>' . $filter . '</td><td>' .filter_id($filter) . '</td></tr>';
                }?>
    </table>

</body>
</html>