<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Tabbed IFrames</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>


            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/anasayfa" class="nav-link {{ (request()->is('anasayfa')) ? 'active' : '' }} {{ (request()->is('/')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                ANASAYFA
                            </p>
                        </a>
                    </li>

                    <li class="nav-item {{ (request()->is('cari*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ (request()->is('cari*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                CARİ İŞLEMLERİ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/cari/ekle" class="nav-link {{ (request()->is('cari/ekle')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cari Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cari/listele" class="nav-link {{ (request()->is('cari/listele')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cari Listesi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cari/tahsilat" class="nav-link {{ (request()->is('cari/tahsilat')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tahsilat Yap</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cari/odeme" class="nav-link {{ (request()->is('cari/odeme')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ödeme Yap</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cari/borc" class="nav-link {{ (request()->is('cari/borc')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Borç Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/cari/alacak" class="nav-link {{ (request()->is('cari/alacak')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Alacak Ekle</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item {{ (request()->is('stok*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ (request()->is('stok*')) ? 'active' : '' }}" >
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                STOK İŞLEMLERİ
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/stok/ekle" class="nav-link {{ (request()->is('stok/ekle')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stok Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/stok/stokhareketekle" class="nav-link {{ (request()->is('stok/stokhareketekle')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stok Hareketi Ekle</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/stok/listele" class="nav-link {{ (request()->is('stok/listele')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Stok Listele</p>
                                </a>
                            </li>

                            </li>
                        </ul>
                    </li>
                    <li class="nav-item  {{ (request()->is('fatura*')) ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ (request()->is('fatura*')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                FATURA İŞLEMLERİ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/fatura/yenisatisfaturasi" class="nav-link {{ (request()->is('fatura/yenisatisfaturasi')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Yeni Satış Faturası</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fatura/yenialisfaturasi" class="nav-link {{ (request()->is('fatura/yenialisfaturasi')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Yeni Alış Faturası</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/fatura/satisfaturalari" class="nav-link {{ (request()->is('fatura/satisfaturalari')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Satış Faturaları</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fatura/alisfaturalari" class="nav-link {{ (request()->is('fatura/alisfaturalari')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Alış Faturaları</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="/fatura/yeniirsaliye" class="nav-link {{ (request()->is('fatura/yeniirsaliye')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Yeni İrsaliye</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/fatura/irsaliyeler" class="nav-link {{ (request()->is('fatura/irsaliyeler')) ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>İrsaliyeler</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper iframe-mode" data-widget="iframe" data-loading-screen="750">
        <div class="nav navbar navbar-expand-lg navbar-white navbar-light border-bottom p-0">

{{--            <a class="nav-link bg-light" href="#" data-widget="iframe-scrollleft"><i class="fas fa-angle-double-left"></i></a>--}}
            <ul class="navbar-nav" role="tablist">
                <li class="nav-item active btn-secondary " role="presentation"><a class="nav-link active text-white" data-toggle="row" id="tab-index" href="#panel-index" role="tab" aria-controls="panel-index" aria-selected="true">ANASAYFA</a></li>
            </ul>
{{--            <a class="nav-link bg-light" href="#" data-widget="iframe-scrollright"><i class="fas fa-angle-double-right"></i></a>--}}
            <a class="nav-link bg-danger" href="#" data-widget="iframe-close">Kapat</a>
            <a class="nav-link bg-light" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade active show" id="panel-index" role="tabpanel" aria-labelledby="tab-index">
                <iframe src="/anasayfa" style="height: 671px;"></iframe>
            </div>
            <div class="tab-empty">

            </div>
            <div class="tab-loading">
                <div>
                    <h2 class="display-4">Sayfa Yükleniyor <i class="fa fa-sync fa-spin"></i></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2021 <a href="https://www.oksijenyazilim.com">Oksijen Yazılım</a></strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 1.0.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/js/demo.js"></script>
</body>
</html>
