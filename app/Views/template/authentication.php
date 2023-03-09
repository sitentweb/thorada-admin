<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Thorada Finance Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />


    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <link href="/assets/css/main.css?v=1.1" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.css">

    <?= $this->renderSection('styles') ?>
</head>

<body>
    <main>

        <?= $this->renderSection('content') ?>
        <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                    document.write(new Date().getFullYear());
                </script>
                &copy; Thorada Finance.
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>
    </main>
    <script src="/assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-toast-plugin@1.3.2/dist/jquery.toast.min.js"></script>
    <script src="/assets/js/main.js?v=1.1" type="text/javascript"></script>

    <?= $this->renderSection('moreScripts') ?>

</body>

</html>