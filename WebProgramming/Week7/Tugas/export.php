<?php

include 'database.php';
$output = '';
if (isset($_POST["export"])) {
    $query = "SELECT * FROM user order by 1 desc";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $output .= '
        <table class="table" bordered="1">  
                    <tr>  
                        <th>No.</th>  
                        <th>Student ID.</th>  
                        <th>Name</th>   
                        <th>Prodi</th>
                        <th>Uploaded:</th>
                    </tr>
';
        $i = 0;
        while ($row = mysqli_fetch_array($result)) {
            $sl = ++$i;
            $output .= '
    <tr>  
                        <td > ' . $sl . ' </td>
                        <td>' . $row["u_card"] . '</td>  
                        <td>' . $row["u_f_name"]  . $row["u_l_name"] . '</td>    
                        <td>' . $row["u_prodi"] . '</td> 
                        <td>' . $row["uploaded"] . '</td>
                    </tr>
';
        }

        $output .= '</table>';
        header('Content-Type: application/xls');
        header('Content-Disposition: attachment; filename=week7_all_Cards_Data.xls');
        echo $output;
    }
}
