<?php
if(file_exists("B.txt")&& 0!= filesize("B.txt")) {


    echo("I have received a message from the client above <br><br>");
    echo(file_get_contents("B.txt"));


    unlink("B.txt");
}
else
{
    ?><html>
<head>
    <script type="text/JavaScript">
        <!--
        function AutoRefresh( t ) {
            setTimeout("location.reload(true);", t);
        }
        //   -->
    </script>
</head>
<body onload="JavaScript:AutoRefresh(5000);">
<p>This page will refresh every 5 seconds.</p>
</body>
</html>
<?php
}
?>
