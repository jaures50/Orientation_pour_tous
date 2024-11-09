<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tableau de Bord')</title>

    <!-- Police Google -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Icons -->
    <link rel="stylesheet" href="/assets_admin/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="/assets_admin/vendor/fonts/tabler-icons.css">
    <link rel="stylesheet" href="/assets_admin/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets_admin/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="/assets_admin/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="/assets_admin/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets_admin/vendor/libs/node-waves/node-waves.css">
    <link rel="stylesheet" href="/assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets_admin/vendor/libs/typeahead-js/typeahead.css">
    <link rel="stylesheet" href="/assets_admin/vendor/libs/apex-charts/apex-charts.css">
    <link rel="stylesheet" href="/assets_admin/vendor/libs/swiper/swiper.css">
    <link rel="stylesheet" href="/assets_admin/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
    <link rel="stylesheet" href="/assets_admin/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="/assets_admin/vendor/css/pages/cards-advance.css">

    <!-- Helpers -->
    <script src="/assets_admin/vendor/js/helper.js"></script>

    <!-- Template customizer & Theme config files -->
    <script src="/assets_admin/vendor/js/template-customizer.js"></script>
    <script src="/assets_admin/js/config.js"></script>

    <style>
        /* Styles généraux */
        body {
            font-family: 'Nunito', sans-serif;
            background-color: white;
        }

        /* Navbar et Footer */
        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }

        .nav-link {
            font-size: 22px;
            font-weight: 500;
            margin: 0 10px;
        }

        /* Selects personnalisés */
        .form-select {
            background-color: #f1f1f1;
            border-radius: 20px;
            padding: 5px 20px;
            font-size: 1rem;
            border: none;
            transition: background-color 0.3s;
        }

        .form-select:hover {
            background-color: #e0e0e0;
        }

        /* Footer */
        footer {
            background-color: #f8f9fa;
            padding: 20px;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>

</head>


<body class="pt-5"  >
    <!-- Layout wrapper -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

                <div class="layout-wrapper layout-content-navbar" style="width: 200px;">
                    <div class="layout-container">
                        <!-- Menu -->

                        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                            <div class="app-brand demo">
                                <a href="index.html" class="app-brand-link">

                                    <span class="app-brand-text demo menu-text fw-bold">Tableau de bords</span>
                                </a>

                                <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                                    <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                                    <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
                                </a>
                            </div>

                            <div class="menu-inner-shadow"></div>

                            <ul class="menu-inner py-1">
                                <!-- Dashboards -->


                                <!-- Layouts -->


                                <!-- Front Pages -->


                                <!-- Apps & Pages -->
                                <li class="menu-header small text-uppercase">
                                    <span class="menu-header-text">Apps &amp; Pages</span>
                                </li>
                                <li class="menu-item">

                                    <!-- eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee -->

                                    <a href="{{ route('etablissements.create') }}" class="menu-link">
                                        <div data-i18n="Analytics">Ajouter un établissements</div>
                                    </a>

                                </li>
                                <li class="menu-item">


                                    <a href="{{ route('etablissements.tout') }}" class="menu-link">
                                        <div data-i18n="Analytics">Liste des établissements</div>
                                    </a>

                                </li>
                                <li class="menu-item">



                                    <a href="{{ route('administrateur.create') }}" class=" menu-link">
                                        <div data-i18n="CRM">Ajouter une pub</div>
                                    </a>

                                </li>
                                <li class="menu-item">



                                    <a href="{{ route('administrateur.create') }}" class=" menu-link">
                                        <div data-i18n="CRM">Ajouter une pub</div>
                                    </a>

                                </li>
                                <!-- e-commerce-app menu start -->

                                <!-- e-commerce-app menu end -->
                                <!-- Academy menu start -->

                                <!-- Academy menu end -->






                                <!-- Components -->
                                <li class="menu-header small text-uppercase">
                                    <span class="menu-header-text">Components</span>
                                </li>
                                <!-- Cards -->

                                <!-- User interface -->


                                <!-- Extended components -->


                                <!-- Icons -->


                                <!-- Forms & Tables -->
                                <li class="menu-header small text-uppercase">
                                    <span class="menu-header-text">Forms &amp; Tables</span>
                                </li>
                                <!-- Forms -->


                                <!-- Charts & Maps -->

                            </ul>

                        </aside>
                        <!-- / Menu -->



                        <!-- Layout container -->


                        <!-- / Layout page -->
                    </div>

                    <!-- Overlay -->
                    <div class="layout-overlay layout-menu-toggle"></div>

                    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                    <div class="drag-target"></div>
                </div>

            </div>
            <div class="col-md-10">


                <main>
                    @yield('content')
                </main>

            </div>
        </div>
    </div>




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="/assets_admin/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets_admin/vendor/libs/popper/popper.js"></script>
    <script src="/assets_admin/vendor/libs/bootstrap.js"></script>
    <script src="/assets_admin/vendor/libs/node-waves/node-waves.js"></script>
    <script src="/assets_admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/assets_admin/vendor/libs/hammer/hammer.js"></script>
    <script src="/assets_admin/vendor/libs/i18n/i18n.js"></script>
    <script src="/assets_admin/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="/assets_admin/vendor/js/menu.js"></script>

    <!-- Vendors JS -->
    <script src="/assets_admin/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="/assets_admin/vendor/libs/swiper/swiper.js"></script>
    <script src="/assets_admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="/assets_admin/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets_admin/js/dashboards-analytics.js"></script>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>