@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Perfil</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <?php $user =  Profile::find(Auth::user()->id); ?>
        {{Form::open()}}
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {{Form::label('rut', 'Rut') }}
                    {{Form::text('rut',$user->rut,array('class' => 'form-control','id' => 'rut', 'placeholder' => 'Rut'))}}
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {{Form::label('name', 'Nombre') }}
                    {{Form::text('name',$user->name,array('class' => 'form-control','id' => 'name', 'placeholder' => 'Nombre'))}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {{Form::label('lastname_1', 'Primer Apellido') }}
                    {{Form::text('lastname_1',$user->lastname_1,array('class' => 'form-control','id' => 'lastname_1', 'placeholder' => 'Primer Apellido'))}}
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {{Form::label('lastname_2', 'Segundo Apellido') }}
                    {{Form::text('lastname_2',$user->lastname_2,array('class' => 'form-control','id' => 'lastname_2', 'placeholder' => 'Segundo Apellido'))}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {{Form::label('born', 'Fecha de Nacimiento') }}
                    <div class='input-group date' id='born-label'>
                        {{Form::text('born',$user->born,array('class' => 'form-control','id' => 'born', 'placeholder' => 'Fecha de Nacimiento'))}}
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {{Form::label('lastname_2', 'Segundo Apellido') }}
                    {{Form::text('lastname_2',$user->lastname_2,array('class' => 'form-control','id' => 'lastname_2', 'placeholder' => 'Segundo Apellido'))}}
                </div>
            </div>
        </div>

        {{Form::close()}}

    </div>
    <!-- /#page-wrapper -->
@stop

@section('js')
    <script>
        $(function() {

            $('#side-menu').metisMenu();

        });

    </script>
    <script type="text/javascript">
        $(function () {
            $('#born').datetimepicker();
        });
    </script>
@stop
