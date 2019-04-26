<?php
require 'formulaire.php';

$form = new Form;
?>  

<form action="#" method = "">

<?php

echo $form->input();
echo $form->select();
echo $form->textarea();
echo $form->radio();
echo $form->check();
echo $form->submit();

?>

</form>