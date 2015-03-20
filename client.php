
<?php
 if(!isset($_GET['message']))
 {
     ?>

     <form method="get" action="client.php">
         <label for="message">Enter your gossip message here</label>
         <input type="text" name="message" size="60">
         <button value="Send" name="send">Send</button>
     </form>
 <?php
 } else
 {
     $serverA=0;
     $serverB=0;
     while($serverA==0||$serverB==0) {
         $choice = rand(1, 2);
         if ($choice == 1 && $serverA == 0) {
             //serverA chosen
             $serverA = 1;
             if (!($file = fopen("A.txt", "w"))) {
                 die("could not open file for serverA");
             } else {
                 fwrite($file, $_GET['message']);
                 fclose($file);
             }
         }
         if ($choice == 2 && $serverB == 0) {
             //serverA chosen
             $serverB = 1;
             if (!($file = fopen("B.txt", "w"))) {
                 die("could not open file for serverB");
             } else {
                 fwrite($file, $_GET['message']);
                 fclose($file);
             }
         }

         sleep(5);

     }

echo("message sent!!");
 }

?>
