<?PHP

require_once '/data/project/magnustools/public_html/php/Widar.php' ;
$widar = new \Widar ( 'drawshield' ) ;
$widar->attempt_verification_auto_forward ( '/' ) ;
$widar->authorization_callback = 'https://drawshield.toolforge.org/api.php' ;
if ( $widar->render_reponse(true) ) exit(0);

?>