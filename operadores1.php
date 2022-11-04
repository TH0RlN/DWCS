<HTML>
 <HEAD>
   <TITLE>Operadores</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Operadores aritméticos</H2>
     <?php
       define("euro",1.1189675);
       echo "El valor de la constante 'euro' es: <B>". euro ." dólares.</B><BR><BR>";
       echo "1000€ son ". euro*1000 ." dólares<BR>";
       echo "1000 dólares son ". intval((1000/euro)*100)/100 ."€<BR><BR>";
       echo "157€ son ". intval(157/50) ." billetes de 50€";
       echo " y ". (157%50) ."€";
     ?>
   </CENTER>
 </BODY>
</HTML>
