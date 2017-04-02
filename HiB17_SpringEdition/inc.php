if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) 

{ header('HTTP/1.1 403 Forbidden', TRUE);

die('Error, direct access is not permitted'); };

require('detect_scanner.php');

require('detect_sql.php');

require('api.php');



  $host = "localhost";

  $usr = "markito";

  $pwd = "\$St0mysql.hackinbo!";

  $dbname = "markito_db";

  $link = mysql_connect($host, $usr, $pwd);  

  mysql_select_db($dbname, $link);

?>
