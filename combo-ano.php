<?php

//COMBO FOR

// VAlor inicial - $i é uma expressão do php que trás a data, neste caso "date("Y"), o Y trará o ano atual em 4 digitos, caso quisesse em dois digitos usaria y, 

//Condição se $i  for > que Ano atual ( date("Y")) com menos 100 (no caso 1918) , INCREMENTAR com + 1




echo "<select>"; // inicio tag do combo

for ($i=date("Y"); $i >= date("Y")-100 ; $i--){


	//option value = o valor que alimenta o select(combo)

	//.$i.'</option>' é o que vai mostrar no combo




	echo $i . '<option value="'.$i.'">'.$i.'</option>'; 


}


echo "</select>"; // fim da tag do combo
?>