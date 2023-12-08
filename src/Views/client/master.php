<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>



    <link href="/giaodien_USER/theplaza-master/img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/giaodien_USER/theplaza-master/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/giaodien_USER/theplaza-master/css/font-awesome_User.min.css" />
    <link rel="stylesheet" href="/giaodien_USER/theplaza-master/css/owl.carousel.css" />
    <link rel="stylesheet" href="/giaodien_USER/theplaza-master/css/styleUser.css" />
    <link rel="stylesheet" href="/giaodien_USER/theplaza-master/css/animate.css" />

</head>

<body>
    <?php require_once 'components/header.php'; ?>

    <!-- Chỗ này để content của Page -->
    <?php require_once $view . '.php'; ?>

    <?php require_once 'components/footer.php'; ?>
</body>

</html>