<section class="sidebar">
    <div style="padding: 15px; background: #168cda; margin-top: -50px; margin-right: -1px;">
        <a href="/">
            <img src="https://cdn.freebiesupply.com/logos/large/2x/laravel-1-logo-black-and-white.png" width="100%" alt="MicroServ">
        </a>
    </div>

    <!-- Sidebar user panel -->


    <div class="user-panel" style="border-bottom: 0px solid #eeeeee;">
        <div class="pull-left image">
            <img src="/images/user-default.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            {{--<p class="adjust-sidebar-text">{{ Auth::user()->getFullName() }}</p>--}}
            {{--<p class="adjust-sidebar-text text-blue">{{ Auth::user()->role->name }}</p>--}}
            <p class="adjust-sidebar-text">Nombre usuario</p>
            <p class="adjust-sidebar-text text-blue">Rol Usuario</p>
        </div>
    </div>
{{--<!-- search form -->--}}
{{--<form action="#" method="get" class="sidebar-form">--}}
{{--<div class="input-group">--}}
{{--<input type="text" name="q" class="form-control" placeholder="Buscar...">--}}
{{--<span class="input-group-btn">--}}
{{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
{{--</button>--}}
{{--</span>--}}
{{--</div>--}}
{{--</form>--}}
<!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">ADMINISTRACIÓN</li>
        <!-- DASHBOARD -->
        <li class="active" }}>
            <a href="#">
                <i class="fa fa-th"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="treeview ">
            <a href="#">
                <i class="fa fa-gears"></i> <span>Menu 1</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">

                <li>
                    <a href="#">
                        <i class="fa fa-angle-right"></i>
                        <span>Menu 1.1</span>
                    </a>
                </li>


                <!-- TICKETS -->
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-angle-right"></i> <span>Menu 1.2</span>
                        <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">

                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                Menu 1.2.1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                Menu 1.2.2
                            </a>
                        </li>

                    </ul>

                </li>

            </ul>
        </li>


    </ul>

</section>