<?php
if(file_exists("D.txt")&& 0!= filesize("D.txt")) {


    echo("I have received a message from the client above <br><br>");
    echo(file_get_contents("D.txt"));


    unlink("D.txt");


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
