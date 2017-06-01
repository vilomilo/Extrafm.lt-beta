<?php include('includes/header.php'); ?>

	<?php if($type == 'login'): ?>
	<div id="contentwrapper" xmlns="http://www.w3.org/1999/html">

	<div class="region region-highlighted">
	<center>
		<div id="block-block-17" class="block block-block first last odd">
			<div class="view view-startseite-sammler-nicht-prio view-id-startseite_sammler_nicht_prio view-display-id-block_11 view-dom-id-9a497fad3d89902d74f5c337f8972e96">
			<h2 class="form-signin-heading">Prašome prisijugngti</h2>
			<form name="prisjungimas" method="post" action="<?= ($settings->enable_https) ? secure_url('login') : URL::to('login') ?>" class="form-signin">
				<input type="text" class="form-control" placeholder="Vartotojo vardas" tabindex="0" id="email" name="email" value="">
				<input type="password" class="form-control" placeholder="Slaptažodis" id="password" name="password" value="">
				<!-- Redirect after login, neþinau ar veikia, px sueis -->
				<a href=""><button class="btn btn-lg btn-primary btn-block" type="submit" href="">Prisijungti</button></a>
				<br />
				<input type="hidden" id="redirect" name="redirect" value="<?= Input::get('redirect') ?>" />
				<a href="<?= ($settings->enable_https) ? secure_url('password/reset') : URL::to('password/reset') ?>">Pamiršote slaptažodį?</a>
				<input type="hidden" name="_token" value="<?= csrf_token() ?>" />
			</form>

		</div>
		</center>
	</div>
<?php if (isset($_POST['prisijungimas']))
    {   
    ?>
<script type="text/javascript">
window.location = "http://extrafm.eu/admin";
</script>      
    <?php
    }?>
	<?php elseif($type == 'signup'): ?>
<?php echo '<br><br>'; ?>
		<?php include('partials/signup.php'); ?>

	<!-- SHOW FORGOT PASSWORD FORM -->
	<?php elseif($type == 'forgot_password'): ?>
<?php echo '<br><br>'; ?>
		<?php include('partials/form-forgot-password.php'); ?>

	<!-- SHOW RESET PASSWORD FORM -->
	<?php elseif($type == 'reset_password'): ?>
<?php echo '<br><br>'; ?>
		<?php include('partials/form-reset-password.php'); ?>

	<?php endif; ?>

<?php include('includes/footer.php'); ?>