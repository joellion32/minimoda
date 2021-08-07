<?php require_once('layouts/header.php');?>

<div class="page">
	<h6><a href="#">Personaliza tu pedido</a></h6>
</div>

<div class="content">
	<!---->
	<div class="contact">
		<div class="col-md-12 contact-top">
			<h3>PERSONALIZA TU PEDIDO</h3>
			<div id="content" style="margin-left:150px" class="row">
				<div style="margin:2px" class="col-xs-6 col-md-5">
					<a id="subir" style="cursor:pointer" class="thumbnail">
						<img src="<?=base_url?>assets/images/subir.jpg" alt="...">
					</a>
				</div>

				<div style="margin:2px" class="col-xs-6 col-md-5">
					<a id="bot" style="cursor:pointer" id="bot" class="thumbnail">
						<img src="<?=base_url?>assets/images/bot.jpg" alt="...">
					</a>
				</div>
			</div>

			<form id="upload" style="display:none">
				<div class="form-group">
					<label for="exampleFormControlFile1">Subir foto</label>
					<input type="file" class="form-control-file" id="exampleFormControlFile1">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Cantidad</label>
					<input type="number" class="form-control" id="count" aria-describedby="emailHelp" value="1">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Correo Electronico</label>
					<input type="email" class="form-control" id="exampleInputPassword1">
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Telefono</label>
					<input type="text" class="form-control" id="exampleInputPassword1">
				</div>

				<button type="button" class="btn btn-primary">Subir</button>
			</form>


			<form id="bot1" style="display:none">
				<div class="form-group">
					<label for="exampleInputEmail1">Tipo de artículo</label>
					<select class="form-control" id="article">
						<option selected disabled>Elige el articulo</option>
						<option value="1">Vestido personalizado</option>
						<option value="2">Traje o conjunto personalizado</option>
						<option value="3">Tshirt o Blusa personalizada</option>
					</select>
				</div>

				<div id="color" style="display:none" class="form-group">
					<label for="exampleInputEmail1">Selecciona color</label>
					<input type="color" class="form-control" id="exampleInputPassword1">
				</div>


				<div id="design" style="display:none" class="form-group">
					<label for="exampleInputEmail1">Desea algun diseño</label>
					<select class="form-control" id="Sdesign">
						<option value="Si">Si</option>
						<option value="No">No</option>
					</select>
				</div>

				<div id="letters" style="display:none" class="form-group">
					<label for="exampleInputEmail1">Desea que lleve letras</label>
					<select class="form-control" id="Sletters">
						<option value="Si">Si</option>
						<option value="No">No</option>
					</select>
				</div>

				<button type="button" id="search" class="btn btn-primary" disabled>Buscar</button>
			</form>

			<div id="images" style="display:none" class="row">
				<h2>Resultados de busqueda</h2>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>

<script>
	$("#subir").click(function (e) {
		$("#upload").css("display", "block");
		$("#content").css("display", "none");
	});

	$("#bot").click(function (e) {
		$("#bot1").css("display", "block");
		$("#content").css("display", "none");
	});

	//obtener valor del select 
	$("#article").change(function (e) {
		var val = $(this).val();
		$("#color").css("display", "block");
		$("#design").css("display", "block");
		$("#letters").css("display", "block");
	});


	$("#letters").change(function (e) {
		var val = $(this).val();
		$("#search").attr("disabled", false);
	});


	// traer imagenes 
	$("#search").click(function (e) {
		$("#search").attr("disabled", true);
		$("#images").css("display", "block");
		e.preventDefault();
		$.ajax({
			type: "GET",
			url: "https://jirehpainting-4b899.firebaseio.com/Vestidos.json",
			dataType: "JSON",
			success: function (response) {
				$.each(response, function (indexInArray, value) {
					$("#images").append(`
					<div class="col-xs-6 col-md-3">
					<a href="http://localhost/minimoda/Home/contact" class="thumbnail">
						<img style="width: 150px; height: 200px" src="${value.url}" alt="imagen">
					</a>
				</div>

					 `);
				});
			}
		});
	});
</script>

<?php require_once('layouts/footer.php')?>