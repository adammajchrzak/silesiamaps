<?php
foreach ($_GET['item'] as $position => $item) : 
		  $sql[] = "UPDATE `table` SET `position` = $position WHERE `id` = $item"; 
		endforeach; 
		print_r ($sql);
?>