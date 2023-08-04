<div id="main_div">
	<ul>
		<li>
			<h1>Some content of "About us" page</h1>
		</li>
		<li>
			<?php
				foreach($data as $row) {
					echo $row['row_1']."<br>".$row['row_2']."<br>".$row['row_3'];
				}
			?>
		</li>
</div>
