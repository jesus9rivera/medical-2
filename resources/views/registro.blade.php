<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="utf-8">
        <title>Medical</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilosHome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body class="bodyRegistro">

        <div class="margen"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card registro" ng-controller="controlador" align="center">
                        <div class="card-header"><div class="titulo">Registrate</div></div>
                        <div class="card-body">
                            <form class="cuerpo" method="POST" action="/guardarUsuario">    
                                {{ csrf_field() }}
                                <br>                                          
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model=cliente.nombre name="nombre" type="text" placeholder="Nombre" class="form-control">
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="cliente.apellidos" name="apellidos" type="text" placeholder="Apellidos" class="form-control">
                                    </div>
                                </div><br>
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="cliente.correo" name="correo" type="email" placeholder="E-mail" class="form-control">
                                    </div>
                                </div><br>
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="cliente.contraseña" name="contraseña" type="password" placeholder="Contraseña" class="form-control">
                                    </div>
                                </div><br>
                          
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-danger">Aceptar</button>
                                    </div>                                    
                                </div>
                            </form>
                        </div> 
                        
                    </div>
                </div>
            </div>     
        </div>

    </body>
</html>
	
    <script type="text/javascript">

        var app= angular.module('app',[]);

        app.controller('controlador',function($scope,$http){
            $scope.cliente={};

            $scope.guardar=function(){
                 console.log($scope.cliente);
            }
           
        });

    </script>
