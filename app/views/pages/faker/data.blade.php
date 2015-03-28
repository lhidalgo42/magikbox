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
        <div id="response">

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
        $(document).ready(function () {
            setInterval(function(){
                $.ajax({
                    url: "/faker/data",
                    type: "post",
                    success: function(data)
                    {
                        console.log(data)
                    }
                });
            },30000);
        });

    </script>
@stop
