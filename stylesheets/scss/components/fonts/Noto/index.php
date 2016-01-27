<?php
$files = scandir('./');

foreach( $files as $key => $value ) {
	if( !in_array( $value, array( '.', '..', 'index.php', 'LICENSE_OFL.txt' ) ) ) {
		$values = explode('-', $value);
		$font = $values[0];
		$type = substr($values[1], 0, -4);

		echo '/* '.$font.'<br>';
		echo '@font-face {<br>
				font-family: "Noto";<br>
				src: url(\'#{$noto-font-path}'.$value.');<br>
				font-weight: ';
		switch($type) {
			case 'Bold':
				echo '700';
				break;
			case 'BoldItalic':
				echo '700';
				break;
			case 'Regular':
				echo '400';
				break;
			case 'Italic':
				echo '400';
				break;
			case 'Light':
				echo '300';
				break;
			case 'DemiLight':
				echo '300';
				break;
			case 'Black':
				echo '900';
				break;
			case 'Medium':
				echo '500';
		}

		echo '<br>';

		if( strpos($value, 'Italic') !== false) {
			echo 'font-style: italic;<br>';
		} else {
			echo 'font-style: normal;<br>';
		}
		echo '}<br>
			*/<br><br>';
	}
}
