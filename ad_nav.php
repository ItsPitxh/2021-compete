<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administer | Lannapoly</title>
    <!-- css -->
    <link rel="stylesheet" href="style/style/ad.css">
    <link rel="stylesheet" href="style/css/bootstrap.css">
</head>

<body>
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #1a1a1a">
            <a class="navbar-brand" href="#">#</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="ad_accept.php" id="accept">Accept</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ad_blocked.php" id="ee">block</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="cc">#</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="" id="ll">Logout</a>
                    </li>
                </ul>
            </div>
            <a href="logout_fn.php" id="logout" class="btn btn-danger">Logout</a>
        </nav>
    </div>

    <div class="sidenav">
        <a href="ad_accept.php">Accept</a>
        <hr color="grey">
        <a href="ad_blocked.php">Block</a>
        <hr color="grey">
        <a href="ad_report.php">Report</a>
        <hr color="grey">
    </div>

    <!-- js -->
    <script src="style/js/jquery-3.6.0.min.js"></script>
    <script src="style/js/bootstrap.bundle.min.js"></script>
</body>

</html>