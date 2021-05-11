<?php
echo '<table border="1"><tr>';
for($i=0; $i<=255; $i++){
	printf('<td>%s</td>', chr($i));
	if(($i+1)%16==0 && $i!=255) echo '</tr><tr>';
}
echo '</tr></table>';
