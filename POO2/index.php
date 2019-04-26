<?php
require 'poo.php';

$html = new Html;
?>  

<!DOCTYPE html>
<html>
<head>
<?php
 echo $html->linkCss();
 echo $html->meta();
?>
</head>
<body>
<?php
echo $html->image();
echo $html->link();
?>


<?php
echo $html->script();
?>

</body>
</html>