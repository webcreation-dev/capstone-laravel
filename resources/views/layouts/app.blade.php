<!--
Product: Metronic is a toolkit of UI components built with Tailwind CSS for developing scalable web applications quickly and efficiently
Version: v9.4.14
Author: Keenthemes
Contact: support@keenthemes.com
Website: https://www.keenthemes.com
Support: https://devs.keenthemes.com
Follow: https://www.twitter.com/keenthemes
License: https://keenthemes.com/metronic/tailwind/docs/getting-started/license
-->
<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="light" dir="ltr" lang="en">

<head>
    <base href="../../">
    <title>
        SIGSC - Plan de Passation des Marchés (PPM)
    </title>
    <meta charset="utf-8" />
    <meta content="follow, index" name="robots" />
    <link href="https://127.0.0.1:8001/metronic-tailwind-html/demo1/network/user-table/team-crew" rel="canonical" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="Team crew table, powered by Tailwind CSS" name="description" />
    <meta content="@keenthemes" name="twitter:site" />
    <meta content="@keenthemes" name="twitter:creator" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="Metronic - Tailwind CSS Team Crew" name="twitter:title" />
    <meta content="Team crew table, powered by Tailwind CSS" name="twitter:description" />
    <meta content="assets/media/app/og-image.png') }}" name="twitter:image" />
    <meta content="https://127.0.0.1:8001/metronic-tailwind-html/demo1/network/user-table/team-crew"
        property="og:url" />
    <meta content="en_US" property="og:locale" />
    <meta content="website" property="og:type" />
    <meta content="@keenthemes" property="og:site_name" />
    <meta content="Metronic - Tailwind CSS Team Crew" property="og:title" />
    <meta content="Team crew table, powered by Tailwind CSS" property="og:description" />
    <meta content="assets/media/app/og-image.png') }}" property="og:image" />
    <link href="{{ asset('assets/media/app/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ asset('assets/media/app/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" />
    <link href="{{ asset('assets/media/app/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" />
    <link href="{{ asset('assets/media/app/favicon.ico') }}" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/keenicons/styles.bundle.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />

    <style>
        /* PPM Table - Grid lines */
        #ppm-table tbody td {
            border-right: 1px solid #e5e7eb;
            border-bottom: 1px solid #e5e7eb;
            padding: 8px 12px;
        }

        /* Sticky td cells keep their background solid */
        #ppm-table tbody td.sticky {
            background-color: white;
        }

        /* Hover per row - JS driven, removes group-hover conflicts */
        #ppm-table tbody tr.row-hovered td:not(.sticky) {
            background-color: #f0f9ff !important;
        }

        #ppm-table tbody tr.row-hovered td.sticky {
            background-color: #e0f2fe !important;
        }

        /* Lot separator - thick bottom border on last row of each lot */
        #ppm-table tbody tr.lot-end td {
            border-bottom: 2px solid #6b7280 !important;
        }

        /* SPM separator - even thicker border between SPM blocks */
        #ppm-table tbody tr.spm-end td {
            border-bottom: 3px solid #374151 !important;
        }

        /* Vertical separator after last frozen column (Description du Package) */
        #ppm-table tbody td.col-separator {
            border-right: 2px solid #9ca3af !important;
        }
    </style>
</head>

<body
    class="antialiased flex h-full text-base text-foreground bg-background demo1 kt-sidebar-fixed kt-header-fixed overflow-x-hidden w-full max-w-[100vw]">
    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('kt-theme')) {
                themeMode = localStorage.getItem('kt-theme');
            } else if (
                document.documentElement.hasAttribute('data-kt-theme-mode')
            ) {
                themeMode =
                    document.documentElement.getAttribute('data-kt-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches
                    ? 'dark'
                    : 'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- End of Theme Mode -->
    <!-- Page -->
    <!-- Main -->
    <div class="flex grow min-w-0">
        @include('partials.sidebar')
        <!-- Wrapper -->
        <div class="kt-wrapper flex grow flex-col min-w-0">
            @include('partials.header')
            
            @yield('content')
            
            @include('partials.modals')
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/core.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendors/ktui/ktui.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/layouts/demo1.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Re-bind timeline custom logic
            const cells = document.querySelectorAll('.toggle-timeline');
            const panel = document.getElementById('drawer_timeline');
            const closeBtn = document.getElementById('close_timeline');

            cells.forEach(cell => {
                cell.addEventListener('click', () => {
                    if(panel) panel.classList.remove('hidden');
                });
            });

            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    if(panel) panel.classList.add('hidden');
                });
            }
        });
    </script>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
