<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> - NAMA_APLIKASI</title>

    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/choices.js/choices.min.css" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/css/bootstrap.css">

    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/iconly/bold.css">

    <!-- Custom -->
    <link href="<?= base_url() ?>/assets/custom/style.css" rel="stylesheet">

    <!-- DataTable -->
    <link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="assets/vendors/jquery-datatables/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/fontawesome/all.min.css">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }
    </style>

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/sweetalert2/sweetalert2.min.css">

    <!-- Form Editor -->
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/summernote/summernote-lite.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/mazer/dist/assets/css/app.css">
    <link rel="shortcut icon" href="<?= base_url() ?>/mazer/dist/assets/images/favicon.svg" type="image/x-icon">

</head>

<body>
    <div id="app">

        <!-- Content Include Header & Footer -->
        <?= $this->renderSection('content'); ?>

    </div>

    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/mazer/dist/assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="<?= base_url() ?>/mazer/dist/assets/js/pages/dashboard.js"></script>

    <!-- Include Choices JavaScript -->
    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/choices.js/choices.min.js"></script>
    <script src="<?= base_url() ?>/mazer/dist/assets/js/pages/form-element-select.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url() ?>/mazer/dist/assets/js/extensions/sweetalert2.js"></script>
    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

    <script src="<?= base_url() ?>/mazer/dist/assets/js/mazer.js"></script>

    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/jquery/jquery.min.js"></script>

    <!-- Form Editor -->
    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/summernote/summernote-lite.min.js"></script>

    <!-- DataTable-->
    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>


    <script src="<?= base_url() ?>/mazer/dist/assets/vendors/fontawesome/all.min.js"></script>

    <script>
        // Jquery Datatable
        let jquery_datatable = $(".table-res").DataTable({
            scrollX: true,
        });
    </script>

</body>

</html>