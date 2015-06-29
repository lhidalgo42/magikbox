<div class="navbar-default sidebar" role="navigation" style="background-color: #BEBEBE;border-color: #BEBEBE;">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="/"><i class="fa fa-dashboard fa-fw"></i>Resumen Temperaturas </a>
            </li>

            @foreach(Control::where('users_id','=',Auth::user()->id)->get() as $control)
                <li class="active">
                    <a href="#" class="active"><i class="fa fa-home fa-fw"></i> {{$control->name}} <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        @foreach(Product::where('controls_id','=',$control->id)->get() as $product)
                            <?php $sensor = Sensor::where('products_id', '=', $product->id)->where('highlight', 1)->get()->first(); ?>
                            <li>
                                <a href="/sensor/{{$sensor->id}}">{{$sensor->tag}} {{$sensor->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            @endforeach
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Configuraciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="#/mail">Correos</a>
                    </li>
                    <li>
                        <a href="#/notifications">Notifications</a>
                    </li>
                    <li>
                        <a href="#/advanced/config">Configuraciones Avanzadas</a>
                    </li>
                    <li>
                        <a href="#/support">Soporte</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#/help"><i class="fa fa-question-circle"></i> Ayuda </a>
            </li>
            <li>
                <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->