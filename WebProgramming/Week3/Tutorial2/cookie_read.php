<?php
echo "<pre>";

echo 'All $_COOKIE content : <br />';
print_r($_COOKIE);
echo '<br />';

echo 'All $_COOKIE[\'data\'] content : <br />';
var_dump($_COOKIE['data']);
echo '<br />';

echo 'All $_COOKIE[\'data\'][0] content : <br />';
var_dump($_COOKIE['data'][0]);
echo '<br />';

$data_as_array = json_decode($_COOKIE['data'][0], true);
echo $data_as_array['nama'], "<br />";
echo $data_as_array['prodi'], "<br />";
echo $data_as_array['info'], "<br /><br />";

$data_as_array = json_decode($_COOKIE['data'][1], true);
echo $data_as_array['nama'], "<br />";
echo $data_as_array['prodi'], "<br />";
echo $data_as_array['info'], "<br /><br />";

echo "</pre>";
