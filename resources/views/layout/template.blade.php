<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB SMK Darul Ma'arif</title>

    <link rel="shortcut icon" href="/assets/compiled/svg/favicon.svg" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="/assets/compiled/css/table-datatable.css" />
    <link rel="stylesheet" href="/assets/compiled/css/app.css" />
    <link rel="stylesheet" href="/assets/compiled/css/app-dark.css" />
    <link rel="stylesheet" href="/assets/compiled/css/auth.css" />
</head>

<body>
    @yield('content')

    <script src="assets/static/js/components/dark.js"></script>
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="assets/compiled/js/app.js"></script>

    <script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/assets/static/js/pages/simple-datatables.js"></script>

    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/static/js/pages/dashboard.js"></script>
    <script>
        setTimeout(function() {
            bootstrap.Alert.getOrCreateInstance(document.querySelector(".alert")).close();
        }, 2000)
    </script>
</body>

</html>
