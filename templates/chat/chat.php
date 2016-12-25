<link rel="stylesheet" href="templates/chat/chat.css">
  <script src="templates/chat/chat.js"></script>



<?php
include 'db.php';
$page = $_GET['page'];
echo 
'<div id="chat_controls_wrap">

<form id="chat_form1" method="POST" action="templates/chat/addmsgtochat.php">
<input id="chat_name_input" type="text" name="name" placeholder="YOUR NAME">
<textarea id="chat_text_input" type="text" name="text" placeholder="YOUR MESSAGE"></textarea>
<input id="chat_send_btn" type="submit" value="">
</form>

<form id="chat_form2" method="POST" action="templates/chat/deletemsgfromchat.php">
<input id="chat_clear_btn" type="submit" value="CLEAR CHAT">
</form>
</div>
'; 

mysql_query("DELETE FROM chat WHERE timestamp < NOW() - INTERVAL 1 HOUR");
$qwerty = mysql_query("SELECT * FROM `chat` ORDER BY `ID` DESC LIMIT 10");

while($rty=mysql_fetch_array($qwerty)) {
echo '<div class="chat_string_wrapper"><div class="date_text">'.$rty['date'].'</div>';
echo '<div class="chat_user_name">'.$rty['login'].'</div>';
echo '<div class="chat_written_text">'.$rty['text'].'</div></div>';
}

?>