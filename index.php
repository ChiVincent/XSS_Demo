<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XSS Demo</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="login.php" class="form-horizontal panel panel-default" method="POST" id="loginForm">
            <div class="panel-heading">
                Login
            </div>
            <div class="panel-body">
                <?php if(isset($_GET['m']) ): ?>
                    <div class="alert alert-danger">
                        <?php echo $_GET['m'] ?>
                    </div>
                <?php endif; ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Username: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Password: </label>
                    <div class="col-sm-3">
                        <input type="password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <button class="col-sm-offset-2 btn btn-primary">Login</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>