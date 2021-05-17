<?php


#echo 'Hello World!', '<br/>';
#echo $_SERVER['HTTP_USER_AGENT'], '<br/>';
#echo $_SERVER['REMOTE_ADDR'], '<br/>';


#ini_set('browscap', '/home/vorac/php_browscap.ini');
#$browser = get_browser( null, True);
#print_r( $browser );
#print $browser;


if( date('H') < 20  )
{
    $pic = 'res/open_day_0.jpg';
}
else
{
    $pic = 'res/closed_night_0.jpg';
}


#echo '
#<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
#<html>
#<img src="res/open_day_0.jpg" />
#</html>
#';


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
echo '<html><img src=';
echo $pic;
echo ' /></html>';


?>
