<?php
$fstyle=$_COOKIE['fstyle'];
$fsize=$_COOKIE['fsize'];
$fcolor=$_COOKIE['fcolor'];
$bcolor=$_COOKIE['bcolor'];
var_dump($_COOKIE);

echo "<html>
<body bgcolor=$bcolor>
<font size=$fsize color=$fcolor style=$fstyle>
<h3>All properties are applied</h3>
</font>
</body>
</html>";

?>
