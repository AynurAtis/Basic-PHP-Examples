<?php
echo '<table border="1"><tr><th></th>';
for($i=0; $i<16; $i++)
	printf('<th>%d</th>', $i);
echo '</tr><tr>';
for($i=0; $i<=255; $i++){
	if($i==0) echo '<th>0</th>';
	printf('<td>%s</td>', chr($i));
	if(($i+1)%16==0 && $i!=255)
		printf('</tr><tr><th>%d</th>', ($i+1)/16);
}
echo '</tr></table>';
