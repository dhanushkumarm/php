<?php
//$t=[1,2,3];var_dump($t); print_r($t);
$cegeps = array(
    "Collège Ahuntsic"              => "http://www.collegeahuntsic.qc.ca/accueil/accueil.html",
    "Collège de Bois-de-Boulogne"   => "http://www.bdeb.qc.ca/",
    "Champlain Regional Collège"    => "http://www.crc-sher.qc.ca/home/",
    "Dawson College"                => "http://www.dawsoncollege.qc.ca/",
    "Collège Édouard-Montpetit"     => "http://www.college-em.qc.ca/",
    "John Abbott College"           => "http://www.johnabbott.qc.ca/",
    "Cégep régional de Lanaudière"  => "http://www.cegep-lanaudiere.qc.ca/",
    "Collège Lionel-Groulx"         => "http://www.clg.qc.ca/"),
);
var_dump($cegeps);
 //echo 'third value:' ,$t2[2];
 //echo '<br>in_array:(',in_array('two',$t2)?'true':'false',')';
 //echo '<br>array_search:(',array_search('two',$t2),')';
 //echo '<br>array_key_exists:(',array_key_exists(2,$t2)?'true':'false',')';

 //for($i=0;$i<count($t2),$i++){
//     echo 'value for index', $i,'is',$t2[$i];
// }


 foreach($cegeps as $college => $address){
    echo '<br>=value for index', $i,'is',$v;
}
 ?>
 <html>
     <body>
         <header><h1>Arrays</h1>
             <nav><a href="<?=$address?>"><?=$college?></a></nav></header>
             <main>
</main>
</body>
</html>