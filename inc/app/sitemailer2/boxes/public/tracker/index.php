<?php

global $cgi;

$message = $parameters['param'][0];

if ($message) {
    db_execute ('update sitemailer2_message set confirmed_views = confirmed_views+1 where id = ?', $message);        
} 

$img = 'GIF89a  �  ���   !�    ,       D ;';

header ('Content-Type: image/gif');
//header ('Content-Disposition: attachment; filename=img.gif');
echo $img;
exit;

?>


