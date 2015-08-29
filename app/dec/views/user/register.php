<?php

use dec\components\Url;

?>
<div class="user-register">
	<div class="body-content">
		<div class="row">
			<div class="col-xs-offset-3 col-xs-6">
				<h1>Velkommen til brukerregistrering.</h1>
				<form id="form-register" action="<?= Url::to('user', 'register') ?>" method="post", role="form">
					<div class="form-group">
						<label for="InputName">Navn</label>
						<input name="User[name]" type="text" class="form-control" id="InputName" placeholder="Fullt navn">
					</div>
					<div class="form-group">
						<label for="InputEmail">E-post address</label>
						<input name="User[email]" type="email" class="form-control" id="InputEmail" placeholder="E-post">
					</div>
					<div class="form-group">
						<label for="InputPassword">Password</label>
						<input name="User[password]" type="password" class="form-control" id="InputPassword" placeholder="Passord">
					</div>
					<div class="checkbox">
						<label>
						<input name="User[remember]" type="checkbox"> Husk meg!
						</label>
					</div>
					<button type="submit" class="btn btn-block btn-success">Register</button>
				</form>
			</div>
		</div>
	</div>
</div>
