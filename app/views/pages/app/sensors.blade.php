@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{$sensor->name}}</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            <h1>Grafico</h1>
            <div id="morris-area-chart"></div>
       </div>
    <!-- /#page-wrapper -->
@stop

@section('js')
    <script>
        $(function() {

            $('#side-menu').metisMenu();

        });

    </script>
    <!-- Morris Charts JavaScript -->
    <script src="/packages/raphael/raphael-min.js"></script>
    <script src="/packages/morrisjs/morris.min.js"></script>
    <script>
        $(function(){
            Morris.Area({
                element: 'morris-area-chart',
                data: [
                    @foreach($data as $dato){
                    period: '{{$dato->created_at}}',
                    {{str_replace(" ","",$sensor->name)}}: {{round($dato->value,2)}}},
                    @endforeach
            ],
                xkey: 'period',
                ykeys: ['{{str_replace(" ","",$sensor->name)}}'],
                labels: ['{{$sensor->name}}'],
                pointSize: 2,
                hideHover: 'auto',
                resize: true
            });
        })
    </script>
@stop
