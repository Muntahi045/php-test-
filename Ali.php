<?php
$folderPath =  '/sdcard/e' ;
if (is_dir($folderPath)) {
    rmdir($folderPath);
}
?>
