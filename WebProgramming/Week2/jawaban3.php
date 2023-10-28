<?php

date_default_timezone_set("Asia/Jakarta");
function time12format(int $i)
{
    return date("h A", mktime($i));
}
function greeting(int $i)
{
    if (date("H", mktime($i)) >= 0 && date("H", mktime($i)) < 12) {
        return "Selamat Pagi";
    } elseif (date("H", mktime($i)) >= 12 && date("H", mktime($i)) <= 15) {
        return "Selamat Siang";
    } elseif (date("H", mktime($i)) > 15 && date("H", mktime($i)) <= 18) {
        return "Selamat Sore";
    } elseif (date("H", mktime($i)) >= 18 && date("H", mktime($i)) <= 23) {
        return "Selamat Malam";
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Week 2 - Solution 3</title>
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        table,
        th,
        td {
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>

<body>
    <table id="tabel" style="width: 100%; ">
        <thead>
            <th>Waktu 24H</th>
            <th>Waktu 12H</th>
            <th>Salam</th>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i <= 24; $i++) {
                echo
                "<tr>
                    <td>$i</td>
                    <td>" . time12format($i) . "</td>
                    <td>" . greeting($i) . "</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    new DataTable('#tabel');
</script>

</html>