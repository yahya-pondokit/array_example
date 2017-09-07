
<?php
$editor = array
	(
		"Atom",
		"Brackets",
		"Notepad++",
		"Meld",
		"Vim",
		"Emacs",
		"Coda"
	);
sort($editor);
$colors = array("azure","antique white","beige","balnched almond","corn silk","floral white","honey dew","ivory","lavender blush","lemon chiffon");
sort($colors);
$ubuntu = array(
	"artful","zesty","yakkety",
	"xenial","wily","vivid",
	"trusty","precise");
sort($ubuntu);
echo "<ul>";
for ($e = 0; $e < count($editor); $e++) {
	echo "<li>".$editor[$e]."</li>";
}
for ($c = 0; $c < count($colors); $c++) {
	echo $colors[$c] . " ";
}
for ($u = 0; $u < count($ubuntu); $u++) {
	echo $ubuntu[$u] . "...";
}
$three = array(
	"pieces"=>"Don't promise when you're happy.",
	"of"=>"Don't respond when you're angry.",
	"advice"=>"Don't decide when you're sad."
	);
$pho = array(
	"iso"=>"ISO: 100, 200, 400, 800, 1600.",
	"aperture"=>"1/15 (1/15th of a second), 1/30, 1/60, 1/125.",
	"shutterspd"=>"f/1.4, f/2.0, f/2.8, f/4.0, f/5.6, f/8.0."
	);
$form = array(
	"microsoft"=>"Halo 5: Guardians",
	"sony"=>"The Last Guardian",
	"nindies"=>"The Legend of Zelda"
	);
echo "<br>";
foreach ($three as $s => $ss){
	echo "Three " .$s. " - ".$ss;
	echo "<br>";
	}
echo "<br>";
foreach ($pho as $d => $dd) {
	echo "ex " .$d. " : " .$dd;
	echo "<br>";
}
echo "<br>";
foreach ($form as $t => $tt) {
	echo "<li>The " .$t. " have " .$tt;
	echo"<br>";
}