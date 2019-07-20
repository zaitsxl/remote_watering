<html>
<body bgcolor="grey">
<p><h1>
<?php
shell_exec("sudo /usr/bin/python /var/www/html/relay.py ".$_POST["control"]);
echo "<p align=center><font size=80>";
echo $_POST["control"];
echo "</font>";
?>
<form action="control.php">
    <p align="center">
        <button type="submit" style="width: 30em; height: 15em"><font size="40">BACK</font></button>
</form>
</h1></p>
</body>
</html>
