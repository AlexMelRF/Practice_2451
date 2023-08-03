<div id="main_div">
	<h1>Some content of "About us" page</h1>
	<?php
		foreach($data as $row) {
			echo $row['row_1']."<br>".$row['row_2']."<br>".$row['row_3'];
		}
	?>
</div>
