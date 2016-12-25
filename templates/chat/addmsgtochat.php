<?php
include 'db.php';
$text = $_POST['text'];
$login=$_POST['name'];
$date = date("y-m-d H:i:s");
$query = mysql_query("INSERT INTO `pagebd`.`chat` (`login`, `text`, `date`) VALUES ('$login', '$text', '$date');");
echo '<script type="text/javascript">'; 
echo 'window.location.href="../../index.php?page=chat";'; // на эту страницу возвращаемся после отправки.
echo '</script>'; 
?>