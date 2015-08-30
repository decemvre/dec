<?php

use dec\components\Url;

?>
<div class="user-register">
	<div class="body-content">
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<?php 
				if ($model->hasErrors()) {
					foreach ($model->errors as $key => $error) {
						echo "<div class='alert alert-danger' role='alert'><p>$error</p></div>";
					}
				} ?>

				<h1>Velkommen til brukerregistrering.</h1>
				<form id="form-register" action="<?= Url::to('user', 'register') ?>" method="post", role="form">
					<div class="form-group">
						<label for="InputName">Navn</label>
						<input name="RegisterForm[name]" type="text" class="form-control" id="InputName" placeholder="Fullt navn" value="<?= $model->name ?>">
					</div>
					<div class="form-group">
						<label for="InputEmail">E-post address</label>
						<input name="RegisterForm[email]" type="email" class="form-control" id="InputEmail" placeholder="E-post" value="<?= $model->email ?>">
					</div>
					<div class="form-group">
						<label for="InputPassword">Passord</label>
						<input name="RegisterForm[password]" type="password" class="form-control" id="InputPassword" placeholder="Passord" value="<?= $model->password ?>">
					</div>
					<div class="checkbox">
						<label>
							<input name="RegisterForm[remember]" type="checkbox"> Husk meg!
						</label>
					</div>
					<button type="submit" class="btn btn-block btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</div>
