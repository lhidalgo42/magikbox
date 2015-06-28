@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Configuracion > Sensores</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <h1>Control</h1>
        <?php $control = Control::where('users_id',$user->id)->get(); ?>
            @if(count($control) == 1)
        <div class="form-group">
            {{Form::label('control', 'Nombre caja Control') }}
            {{Form::text('control',Input::old('control'),array('class' => 'form-control','id' => 'control', 'placeholder' => 'Nombre caja Control'))}}
        </div>


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
