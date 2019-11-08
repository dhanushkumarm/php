<!-- <?php
$name='php page';
define('NAME','name');//CONSTANT NAME is NAME
define('MINUTES',60*15);//CONSTANT NAME IS MINUTES AND VALUE IS iNT
const RICH=false;


?>
<html>
    <head></head>
<body>
​<header><h1><?=$name ?></h1></header>
<main><?php echo "MY NAME IS $name";
echo NAME;

?></main>
​<p>it takes <?=MINUTES ?>Minutes to come here! </p>
<p>your level is <?=RICH?1000:2000 ?> </p>
<?php if (RICH){ ?>
<p>you are rich</p>

<?php } ?>
<?php if (RICH) { ?>
    <p> your level is high</p>
    <?php }  else{?>
        <p> your level is low</p>
    <?php } ?>
    <?php
    if (RICH) {
        ECHO '<p>top</p>';
    }else{
        ECHO '<p>bottom</p>'; 
    }
    ?>
    <?php 
    for($i=0; $i<5 ;$i++){
        echo '<span>',$i,'</span>'; 
    }
    ?>
    <?php for ($i=0; $i<120 ;$i++){
        ?>   <span><?=$i ?></span>
        <?php
    } ?>
</body>
</html>
​ -->
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
    "Collège Lionel-Groulx"         => "http://www.clg.qc.ca/");
//var_dump($cegeps);
 //echo 'third value:' ,$t2[2];
 //echo '<br>in_array:(',in_array('two',$t2)?'true':'false',')';
 //echo '<br>array_search:(',array_search('two',$t2),')';
 //echo '<br>array_key_exists:(',array_key_exists(2,$t2)?'true':'false',')';


 echo "<h1>List of Cegeps</h1>";

 foreach($cegeps as $college => $address){
     echo "<ul><li><a href='$address'>$college</a></li></ul>";
}
 ?>
