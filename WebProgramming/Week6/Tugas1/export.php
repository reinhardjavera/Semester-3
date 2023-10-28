<?php

include 'database.php';
$output = '';
if (isset($_POST["export"])) {
    $query = "SELECT * FROM mahasiswa order by 1 desc";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $output .= '
    <table class="table" bordered="1">  
        <tr>  
            <th>No.</th>  
            <th>Student ID.</th>  
            <th>Name</th>   
            <th>Prodi</th>
        <   th>Uploaded:</th>
        </tr>
    ';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $sl = ++$i;
            $output .= '
        <tr>  
            <td > ' . $sl . ' </td>
            <td>' . $row["user_card"] . '</td>  
            <td>' . $row["first_name"]  . $row["last_name"] . '</td>    
            <td>' . $row["prodi"] . '</td> 
            <td>' . $row["uploaded"] . '</td>
        </tr>
    ';
        }

        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=WEEK6_all_Cards_Data.xls');
        echo $output;
    }
}
