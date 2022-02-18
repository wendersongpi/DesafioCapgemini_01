<?php

$n = 6;

while ($n >= 0){
    
	switch ($n--) {
		case 1:
			echo '<div style="padding:0 0 10px 50px; border-bottom: 1px black dashed; border-right: 1px black dashed; border-left: 1px black dashed; width:100px">******</div>';
			break;
		case 2:
			echo '<div style="padding:0 0 10px 50px; border-right: 1px black dashed; border-left: 1px black dashed; width:100px">&nbsp;&nbsp;*****</div>';
			break;
		case 3:
			echo '<div style="padding:0 0 10px 50px; border-right: 1px black dashed; border-left: 1px black dashed; width:100px">&nbsp;&nbsp;&nbsp;&nbsp;****</div>';
			break;	
		case 4:
			echo '<div style="padding:0 0 10px 50px; border-right: 1px black dashed; border-left: 1px black dashed; width:100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;***</div>';
			break;				
		case 5:
			echo '<div style="padding:0 0 10px 50px; border-right: 1px black dashed; border-left: 1px black dashed; width:100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;**</div>';
			break;
		case 6:
			echo '<div style="padding:10px 0 0 50px; border-top: 1px black dashed; border-right: 1px black dashed; border-left: 1px black dashed; width:100px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*</div>';
			break;
	}
}		
?>