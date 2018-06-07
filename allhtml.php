<?php
foreach( glob('*.html') as $file ){
    if( is_file($file) ){
		$file_name = htmlspecialchars($file);
		printf('<a href="%s" target="_blank">%s</a><br>', $file_name, $file_name );
    }
}
