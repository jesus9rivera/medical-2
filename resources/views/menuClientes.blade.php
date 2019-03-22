@extends('footer')
@extends('header')

@section('header')
	@parent

		<div ng-controller="controlador">

			<div class="clientes">
				<h1>Usuarios</h1>
			</div>
			<div class="row">

				<div class="col-lg-6">
					<div class="formClientes">
						<div class="tituloForm">Datos</div><br>
						<form>
							<div class="row justify-content-center">
								<div class="col-lg-6">
									<input class="form-control" type="text" name="tipo" placeholder="Tipo de ticket">
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-12">
									<textarea class="form-control" rows="5" placeholder="Describe detalladamente tu duda o problema"></textarea>
								</div>
							</div><br>
							<div class="row">
								<div class="col-lg-3">
									<button class="btn btn-danger">Enviar</button>
								</div>
							</div>						
						</form>
					</div>
				</div>

				

				<div class="col-lg-6">
					<div class="tablaEmpl">
						<table class="table table-striped">
							<thead class="thead-dark">
								<tr>
									<th>FECHA</th>
									<th>TIPO</th>
									<th>DESCRIPCION</th>
									<th>ESTADO</th>
									<th></th>
								</tr>
							</thead>
							<tbody class="tbody-light">
								<tr>
									<td>24/02/2019</td>
									<td>soporte</td>
									<td>no se utilizar la app</td>
									<td>pendiente</td>
									
								</tr>
								<tr>
									<td>01/0372019</td>
									<td>error</td>
									<td>me saca de la aplicacion</td>
									<td>pendiente</td>
								
								</tr>
							</tbody>
						</table>
					</div>
				</div>

			</div>
			
		</div>

	@section('footer')
		@parent

		app.controller('controlador',function($scope,$http){
			$scope.opcion="default";
			
			$scope.cambiarPagina=function($pagina){
				$scope.opcion=$pagina;
			}
		});

		</script>

	@endsection

@endsection