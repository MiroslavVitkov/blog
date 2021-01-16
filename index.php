# By default located at /var/www/html/index.php


<?php
#echo 'Hello World!', '<br/>';
#echo $_SERVER['HTTP_USER_AGENT'], '<br/>';
#echo $_SERVER['REMOTE_ADDR'], '<br/>';


//print 'SLUSHAI BATKA';
ini_set('browscap', '/home/vorac/php_browscap.ini');
$browser = get_browser( null, True);
print_r( $browser );
print $browser;

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<img src="../res/rouzhka.jpg.jpg" width="1900" height="1080" title="Us" alt="Us" />

</html>
';
