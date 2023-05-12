<!DOCTYPE html>
<html>
    <head>
    <link href="CSS/enas.css" type="text/css"
      rel="stylesheet"/>
      <title> challenge </title>  
      
</head>
<?php

$uitslagen=[
['thuis' => 'Feyenoord', 'uit' => 'FC Twente', 'uitslag'=> [1,2] ],
['thuis' => 'AZ', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,3] ],
['thuis' => 'PEC Zwolle', 'uit' => 'PSV', 'uitslag'=> [1,2] ],
['thuis' => 'Heracles Almelo', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,3] ],
['thuis' => 'sc Heerenveen', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [3,1] ],
['thuis' => 'FC Groningen', 'uit' => 'SC Cambuur', 'uitslag'=> [2,3] ],
['thuis' => 'Vitesse', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
['thuis' => 'Willem II', 'uit' => 'FC Utrecht', 'uitslag'=> [3,0] ],
['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,1] ],

['thuis' => 'Ajax', 'uit' => 'sc Heerenveen', 'uitslag'=> [5,0] ],
['thuis' => 'RKC Waalwijk', 'uit' => 'Heracles Almelo', 'uitslag'=> [2,0] ],
['thuis' => 'Fortuna Sittard', 'uit' => 'Vitesse', 'uitslag'=> [1,2] ],
['thuis' => 'Sparta Rotterdam', 'uit' => 'PEC Zwolle', 'uitslag'=> [2,0] ],
['thuis' => 'Go Ahead Eagles', 'uit' => 'Feyenoord', 'uitslag'=> [0,1] ],
['thuis' => 'SC Cambuur', 'uit' => 'Willem II', 'uitslag'=> [1,1] ],
['thuis' => 'PSV', 'uit' => 'N.E.C.', 'uitslag'=> [3,2] ],
['thuis' => 'FC Twente', 'uit' => 'FC Groningen', 'uitslag'=> [3,0] ],
['thuis' => 'FC Utrecht', 'uit' => 'AZ', 'uitslag'=> [2,2] ],
['thuis' => 'Feyenoord', 'uit' => 'PSV', 'uitslag'=> [2,2] ],
['thuis' => 'AZ', 'uit' => 'Ajax', 'uitslag'=> [2,2] ],
['thuis' => 'Vitesse', 'uit' => 'sc Heerenveen', 'uitslag'=> [1,2] ],
['thuis' => 'N.E.C.', 'uit' => 'Go Ahead Eagles', 'uitslag'=> [1,0] ],
['thuis' => 'FC Groningen', 'uit' => 'Sparta Rotterdam', 'uitslag'=> [1,2] ],
['thuis' => 'PEC Zwolle', 'uit' => 'FC Utrecht', 'uitslag'=> [1,1] ],
['thuis' => 'Willem II', 'uit' => 'Heracles Almelo', 'uitslag'=> [2,0] ],
['thuis' => 'FC Twente', 'uit' => 'Fortuna Sittard', 'uitslag'=> [1,2] ],
['thuis' => 'SC Cambuur', 'uit' => 'RKC Waalwijk', 'uitslag'=> [1,1] ],
['thuis' => 'N.E.C.', 'uit' => 'Fortuna Sittard', 'uitslag'=> [0,0] ],
];

 echo  "Standen in de Eredivisie:";
$punten=[];
$gespeeld=[];
foreach ($uitslagen as $uitslag) {
  $punten[$uitslag['thuis']]=0;
  $punten[$uitslag['uit']]=0;
  $gespeeld[$uitslag['thuis']]=0;
  $gespeeld[$uitslag['uit']]=0;
}


foreach ($uitslagen as $uitslag) {

 $thuisClub = $uitslag['thuis'];
 $uitClub = $uitslag['uit']; 
 $thuisScore =$uitslag['uitslag'][0];
 $uitScore = $uitslag['uitslag'][1];
 
 
 if ($thuisScore > $uitScore){
 $punten[$thuisClub]=$punten[$thuisClub]+3;
 $punten[$uitClub]= $punten[$uitClub]+0;
 }
 
 elseif($uitScore > $thuisScore){
  $punten[$uitClub]= $punten[$uitClub]+3;
  $punten[$thuisClub]=$punten[$thuisClub]+0;
 }
 
 elseif( $thuisScore == $uitScore){
 $punten[$thuisClub]+=1;
 $punten[$uitClub]+=1;
 }

 else {
 $punten[$thuisClub]=$punten[$thuisClub]+0;
 $punten[$uitClub]=$punten[$uitClub]+0;
 }

  $gespeeld[$uitClub] = $gespeeld[$uitClub]+1;
  $gespeeld[$thuisClub]= $gespeeld[$thuisClub]+1 ; 
 
 }
 arsort($punten);
 

echo "<table border=1>";
echo "<tr><th>Club</th><th>Punten</th><th>Gespeeld</th></tr>";
foreach ($punten as $key => $value) {
  echo "<tr>";
  echo "<td>".$key."</td>";
  echo "<td>".$value."</td>";
  echo "<td>".$gespeeld[$key]."</td>";

  echo "</tr>";
}
echo "</table>";

?>   

</body>
</html>