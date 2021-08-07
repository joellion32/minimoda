<div class="col-md-3 col-md">
			<div class=" possible-about">
					<h4>Clasificar productos</h4>
						<div class="tab1">
							<ul class="place">
								
								<li class="sort">Clasificar por <span>precio</span></li>
								<li class="by"><img src="<?=base_url?>assets/images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
						
						
						<a href="#">
							<input type="checkbox"  id="brand" value="">
							<label for="brand"><span></span><b>RD$.3000-RD$.4000</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="brand1" value="">
							<label for="brand1"><span></span> <b>RD$.3000-RD$.2000</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="brand2" value="">
							<label for="brand2"><span></span> <b>RD$.2000-RD$.1000</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="brand3" value="">
							<label for="brand3"><span></span> <b>RD$.1000-RD$.500</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="brand4" value="">
							<label for="brand4"><span></span><b>RD$.500-Menos</b></label>
						</a>
						
					</div>
					</div>
					
						<div class="tab3">
							<ul class="place">
								
								<li class="sort">Clasificar por <span>colores</span> </li>
								<li class="by"><img src="<?=base_url?>assets/images/do.png" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<ul class="w_nav2">
				<li><a class="color1" href="#"></a></li>
				<li><a class="color2" href="#"></a></li>
				<li><a class="color3" href="#"></a></li>
				<li><a class="color4" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
				<li><a class="color12" href="#"></a></li>
				<li><a class="color13" href="#"></a></li>
				<li><a class="color14" href="#"></a></li>
				<li><a class="color15" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
			</ul>
						</div>
						<div class="tab4">
							<ul class="place">
								
								<li class="sort">Clasificar por<span> descuento</span> </li>
								<li class="by"><img src="<?=base_url?>assets/images/do.png" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="single-bottom">
						
						
						<a href="#">
							<input type="checkbox"  id="up" value="">
							<label for="up"><span></span><b>Hasta 10%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up1" value="">
							<label for="up1"><span></span> <b>10%-20%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up2" value="">
							<label for="up2"><span></span> <b>20%-30%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up3" value="">
							<label for="up3"><span></span> <b>30%-40%</b></label>
						</a>
						<a href="#">
							<input type="checkbox"  id="up4" value="">
							<label for="up4"><span></span><b>40%-50%</b></label>
						</a>
						
					</div>
						</div>
						<div class="tab5">
							<ul class="place">
								
								<li class="sort">Clasificar por <span>rating</span> </li>
								<li class="by"><img src="<?=base_url?>assets/images/do.png" alt=""></li>
								<div class="clearfix"> </div>
							</ul>
							<div class="star-at">
							<div class="two">
								<a href="#"> <i></i>  </a>	
								<a href="#"> <i></i>  </a>
								<a href="#"> <i></i>  </a>
								<a href="#"> <i></i>  </a>
								<a href="#"> <i></i>  </a>
							</div>
							<div class="two">
								<a href="#"> <i></i>  </a>	
								<a href="#"> <i></i>  </a>
								<a href="#"> <i></i>  </a>
								<a href="#"> <i></i>  </a>
								
							</div>
							<div class="two">
								<a href="#"> <i></i>  </a>	
								<a href="#"> <i></i>  </a>
								<a href="#"> <i></i>  </a>
								
							</div>
							<div class="two">
								<a href="#"> <i></i>  </a>	
								<a href="#"> <i></i>  </a>
								
							</div>
							</div>
						
						</div>
						
						<!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .w_nav2").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .star-at").hide();
								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .star-at").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .star-at").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .w_nav2").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .star-at").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .star-at").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
								$(".tab5 ul").click(function(){
									$(".tab5 .star-at").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .w_nav2").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})	
							});
						</script>
						<!-- script -->
					</div>
					<div class="content-bottom-grid">
					<h3>Los más vendidos</h3>
					<?php while($mas_vendidos = $vendidos->fetch_object()) :?>
					<div class="latest-grid">
						<div class="news">
							<a href="<?=base_url?>Home/product_detail&id=<?=$mas_vendidos->id_producto?>"><img class="img-responsive" src="<?=$mas_vendidos->imagen_producto?>" title="name" alt=""></a>
						</div>
						<div class="news-in">
							<h6><a href="<?=base_url?>Home/product_detail&id=<?=$mas_vendidos->id_producto?>"><?=$mas_vendidos->nombre_producto?></a></h6>
							<ul>
								<li>Precio: <span>RD$ <?=$mas_vendidos->precio?></span>
							</ul>
						</div>
					<div class="clearfix"> </div>
				</div>
				<?php endwhile;?>
				</div>
				<!---->
				<div class="money">
					<h3>Metodos de pago</h3>
						<ul class="money-in">
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p1.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p2.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p3.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p4.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p5.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p6.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p1.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p4.png" title="name" alt=""></a></li>
						<li><a href="#"><img class="img-responsive" src="<?=base_url?>assets/images/p2.png" title="name" alt=""></a></li>

						</ul>
					</div>
			</div>