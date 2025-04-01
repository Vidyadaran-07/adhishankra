<head>
    <!-- 1️⃣ Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- 2️⃣ Page Title (Dynamic) -->
    <?php 
    $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "Home";
    ?>
    <title><?php echo $title ?> | Online Jewelry Shop System</title>

    <!-- 3️⃣ Custom Styles -->
    <link rel="stylesheet" href="assets/css/header.css">

    <!-- 4️⃣ Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- 5️⃣ Plugins & Third-Party Libraries (CSS) -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
    <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

    <!-- 6️⃣ Theme & Additional Styles -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="assets/dist/css/styles.css">

    <!-- 7️⃣ JavaScript Libraries & Plugins (JS) -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
</head>
