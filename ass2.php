
<?php

// Captain's Assignment Two PHP Form

echo '<br>' . '<br>' ;

echo "<font size=\"12\" face='Arial'>";
echo "<table>";

$GET_array = $_GET;
	foreach($GET_array as $key=>$val){
		if($val !== ""){
		echo $key . ': ' . $val . '<br>';

		
		
		}
	}

echo "</table>";
echo "</font>"; 




	
echo '<br>';


 ?>