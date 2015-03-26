<hmtl>
<body>
<center><b>Server variables</b></center>
<hr>
SERVER_ADDR = <?php echo $_SERVER['SERVER_ADDR']; ?> <br>
SERVER_NAME = <?php echo $_SERVER['SERVER_NAME']; ?> <br>
<hr>
HTTP_USER_AGENT = <?php echo $_SERVER['HTTP_USER_AGENT']; ?> <br>
HTTPS = <?php echo $_SERVER['HTTPS']; ?> <br>
REMOTE_ADDR = <?php echo $_SERVER['REMOTE_ADDR']; ?> <br>
REMOTE_HOST = <?php echo $_SERVER['REMOTE_HOST']; ?> <br>
REMOTE_PORT = <?php echo $_SERVER['REMOTE_PORT']; ?> <br>
SERVER_PORT = <?php echo $_SERVER['SERVER_PORT']; ?> <br> 
REQUEST_URI = <?php echo $_SERVER['REQUEST_URI']; ?> <br>
<hr>
<?php echo date("l, Y-M-j, H-i-s"); ?><br>
<?php echo "MAC: ", $_GET["mac"]; ?>
</body>
</html>