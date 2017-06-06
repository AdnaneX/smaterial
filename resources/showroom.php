<?php
$title = 'Showroom';
$description = 'See what other users have made with SMaterial. Or show your own creativity\'s';
$keywords = 'showroom, show';

require_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<section class="row">
	<h2 class="col xs4 s12">Show your creations</h2>

	<p class="col xs4 m6">
		Have you made anything using SMaterial and would you like to show.
		Grab your chance fill out the form and yor creation might be shown.
	</p>

	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="col xs4 m6">
		<?php
		if( $_POST ) {
			$errors = array();
			$input = array();
			foreach( $_POST as $field => $value ) {
				$value = strip_tags( trim( $value ) );
				$input[$field] = $value;
				if( empty( $value ) ) {
					$errors[] = ucfirst( $field ).' is empty';
				}

				if( $field === 'email' ) {
					if( !filter_var( $value, FILTER_VALIDATE_EMAIL ) && !preg_match( '^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^', $value ) ) {
						$errors[] = ucfirst( $field ).': '.$value.' is not valid';
					}
				}
			}

			if( empty( $errors ) ) {
				$message = "Email: {$input['email']}, URL: {$input['url']}, name: {$input['name']}";
				if( mail( 'smaterial.dsuper.nl', 'SMaterial website submit', $message ) ) {
					echo '<span class="green-500-text">Successfully submitted</span>';
				} else {
					echo '<span class="red-500-text">Something went wrong submitting your website</span>';
				}
			} else {
				echo '<ul class="red-500-text">';
				foreach( $errors as $key => $error ) {
					echo '<li>'.$error.'</li>';
				}
				echo '</ul>';
			}
		}
		?>

		<div class="row floating-input">
			<input type="email" name="email" id="email" required class="col xs4 m6">
			<label for="email">Email</label>
		</div>

		<div class="row floating-input">
			<input type="url" name="url" id="url" required class="col xs4 m6">
			<label for="url">Url</label>
		</div>

		<div class="row floating-input">
			<input type="text" name="name" id="name" required class="col xs4 m6">
			<label for="name">Website name</label>
		</div>

		<button class="raised-button">Submit <i class="material-icons">send</i></button>
	</form>
</section>
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';