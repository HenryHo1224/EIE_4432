<?php
 $ticketFile = fopen("tickets.txt","r");
$i=1;
    $result=0;
 while(!feof($ticketFile)){
   
 $info = fgets($ticketFile);
 list($ticketOrder) = explode(" ", $info);
 $ticketSale = intval($ticketOrder)*8.50;
 print("<p>Ticket sale ".$i.": " .$ticketSale."</p>");
 $i++;
    $result+=$ticketSale;
}
print("<p>Total ticket sales : ".$result."</p>");
fclose($ticketFile);
?>