<div class="navbar-default sidebar" role="navigation">
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
                <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            @foreach(Control::where('users_id','=',Auth::user()->id)->get() as $control)
                <li>
                    <a href="#"><i class="fa fa-home fa-fw"></i> {{$control->name}} <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        @foreach(Product::where('controls_id','=',$control->id)->get() as $product)
                            <?php $sensor = Sensor::where('products_id', '=', $product->id)->where('highlight', 1)->get()->first(); ?>
                            <li>
                                <a href="#">{{$sensor->tag}} {{$sensor->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            @endforeach

            <li>
                <a href="/dashboard/calendar"><i class="fa fa-table fa-fw"></i> Calendario</a>
            </li>
            <li>
                <a href="/dashboard/functions"><i class="fa fa-edit fa-fw"></i> Funciones</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i> Configuraciones<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="panels-wells.html">Panels and Wells</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="notifications.html">Notifications</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="icons.html"> Icons</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="/help"><i class="fa fa-question-circle"></i> Ayuda </a>
            </li>
            <li>
                <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->