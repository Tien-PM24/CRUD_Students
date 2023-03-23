<?php
//b2: xuất file vừa ghi ra màn hình
$file = fopen($ten_file,"r");
echo "<table width='500' align='center' bgcolor='#DB95B8' class='style6'><tr><td>";
echo "<b> Nội dung của file: </b><br>";
$file_content = '';
while(!feof($file))
{
    $file_content .= fgets($file);
}
echo nl2br($file_content);
echo "<br><b>Đọc file thành công!</b></br>";
echo "</td></tr></table>";
fclose($file);

// In ra nội dung vừa đọc được từ file
echo "<table width='500' align='center' bgcolor='#DB95B8' class='style6'>";
echo "<tr><td>";
echo "<b> Nội dung đọc được từ file: </b><br>";
echo nl2br($file_content);
echo "</td></tr></table>";

?>