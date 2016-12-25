<?php
include 'db.php';


$deletequery = mysql_query("TRUNCATE TABLE `pagebd`.`chat`");


echo '<script type="text/javascript">'; 
echo 'window.location.href="../../index.php?page=chat";'; // на эту страницу возвращаемся после отправки.
echo '</script>'; 
?>