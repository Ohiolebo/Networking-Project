
<!doctype html>
<html lang="en">

<head>
    <title>:: Lucid :: Login</title>
    <?php
    include_once "component/style.php";
    ?>
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="top">
                        <img src="../assets/images/logo-white.svg" alt="Lucid">
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Reset Password</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small" action="index.php">
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control" id="signin-email" placeholder="Password">
                                </div>
                                <div class="form-group">
                                <div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" id="signin-password" placeholder="Confirm Password">
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style=" width:15px; height:15px;">
                                    <label class="form-check-label font-weight-normal text-black-50" for="flexCheckDefault" style="margin-top:2px">
                                        Remember Me
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.php">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="page-register.html">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->
</body>

</html>
