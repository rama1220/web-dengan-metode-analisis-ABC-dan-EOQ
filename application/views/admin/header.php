<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">Admin</li>

                    <!-- Dashboard -->

                    <li class="active">
                        <a href="<?php echo base_url() ?>Dashboard"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Operation</li>
                    <!-- menu Operation -->
                    <li class="menu-item">
                        <a href="<?php echo base_url() ?>Amenities"> <i class="menu-icon fa fa-folder-o" aria-hidden="true"></i>Amenities</a>

                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url() ?>Inputdata"> <i class="menu-icon fa fa-cogs"></i>Input Data</a>

                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url() ?>Dataamenities"> <i class="menu-icon fa fa-table"></i>Data Amenities</a>
                    </li>
                    <li class="menu-item">
                        <a href="<?php echo base_url() ?>Hasil"> <i class="menu-icon fa fa-file-text-o" aria-hidden="true"></i>Hasil Pengendalian</a>

                    </li>


                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class=" menu-icon fa fa-quora" aria-hidden="true"></i>EOQ</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url() ?>Eoq">input Value</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url() ?>Eoq/hasil">Hasil EOQ</a></li>
                        </ul>
                    </li>


                    <li class="menu-item">
                        <a href="<?php echo base_url() ?>Hasil/diagram"> <i class="menu-icon fa fa-bar-chart" aria-hidden="true"></i></i>Diagram Pareto</a>

                    </li>


                    <li class="menu-title">Closing</li>
                    <!-- Sing Out -->
                    <li class="menu-itemn">
                        <a href="<?php echo base_url() ?>Login" aria-haspopup="true"> <i class="menu-icon fa fa-sign-out" aria-hidden="true"></i>Sign Out</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand"><img src="<?php echo base_url() ?>assets/images/vinn.png" width="50%" alt="Logo"></a>

                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                </div>
            </div>

        </header>
        <!-- /#header -->