<?php require_once('layouts/header.php');?>
<div class="page">
		<h6><a href="#">Regístrate</a></span></h6>
</div>

<div class="content">
		<div class="account-in register-top">
							<h2>Regístrate</h2>
							<div class=" account-top register">
								<form action="<?=base_url?>User/save" method="post">
								<div> 	
									<span>Nombre*</span>
									<input name="nombre" type="text"> 
								</div>
								<div> 	
									<span>Correo*</span>
									<input name="email" type="text"> 
								</div>
								<div> 
									<span  class="pass">Contraseña*</span>
									<input name="password" type="password">
								</div>				
									<input type="submit" value="Regístrarse"> 
								</form>
							</div>	
					</div>	
		    </div>
<?php require_once('layouts/footer.php')?>