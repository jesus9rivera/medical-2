@extends('footer')
@extends('header')

@section('header')
	@parent

		<div ng-controller="controlador">

			<div class="contenido">
				<div ng-include="opcion"></div>
			</div>			

			<div class="menu">
				<a ng-click="cambiarPagina('default');" href=""><div class="logo"><img src="{{asset('imagenes/logo_medical2.png')}}"></div></a>
				<ul>
					<li>
						<i>MENÚ</i>
						<ul>
							<a ng-click="cambiarPagina('pUsuarios');" href=""><li> -Usuarios</li></a>
							<a ng-click="cambiarPagina('pEmpleados');" href=""><li> -Empleados</li></a>
							<a ng-click="cambiarPagina('pTickets');" href=""><li> -Tickets</li></a>
						</ul>		
					</li>
				</ul>
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