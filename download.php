<?php 

$file = 'สั่งซื้อสินค้า.xlsx';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/xlsx');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}else{
    echo 'The file does not exist.';
}

?>

