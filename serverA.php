<?php
if(file_exists("A.txt") && 0!= filesize("A.txt")) {


        echo("I have received a message from the client above <br><br>");
        echo(file_get_contents("A.txt"));
    $content=file_get_contents("A.txt");


    echo("<br>sending to juniors<br>");
    $serverC=0;
    $serverD=0;
    while($serverC==0||$serverD==0) {
        $choice = rand(1, 2);
        if ($choice==1 && $serverC==0) {
//serverC chosen
            $serverC = 1;
            if (!($file = fopen("C.txt", "w"))) {
                die("could not open file for serverC");
            } else {
                fwrite($file, $content);
                fclose($file);
            }
        }
        if ($choice == 2 && $serverD == 0) {
//serverD chosen
            $serverD = 1;
            if (!($file = fopen("D.txt", "w"))) {
                die("could not open file for serverD");
            } else {
                fwrite($file, $content);
                fclose($file);
            }
        }

        sleep(5);

    }
    unlink("A.txt");
    




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


