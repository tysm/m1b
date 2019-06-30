@extends('layouts.app')

@section('content')
<div class="loading" style="z-index: 1000000; display: none">Loading&#8230;</div>
		<div class="page-wrapper">
			<?php include_once("aside.php");?>
			<div class="page-container2">
				<br><br><br>
				<section>
					<!-- CONTENT -->
					
				</section>
				<section>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-12">
								<div class="copyright">
									<p>Plantar.io © 2018. <a href="#">Privacidade</a> · <a href="#">Termos de Uso</a> · <a href="#">Cookies</a>. Template by <a href=https://colorlib.com/>colorlib</a></p> 
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>			
		</div>
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mediumModalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="mediumModalBody"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">Salvar</button>
			</div>
		</div>
	</div>
</div>			
@endsection