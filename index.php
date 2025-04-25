<!DOCTYPE html>
<html>
<head>
    <title>Welcome to My OpenShift PHP Site</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light text-center p-5">
    <div class="container">
        <h1 class="display-4 text-primary">🚀 Hello from OpenShift!</h1>
        <p class="lead">This is a simple PHP website deployed using Source-to-Image (S2I) on OpenShift.</p>
        <hr>
        <p>Server Time: <strong><?php echo date("Y-m-d H:i:s"); ?></strong></p>
        <footer class="mt-5 text-muted">© <?php echo date("Y"); ?> Jai Gupta</footer>
    </div>
</body>
</html>
