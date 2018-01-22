<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="UTF-8" />
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="<?php echo base_url(); ?>web_assets/img/favicon.png">
		<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>panel_assets/css/matrix-login.css" />
        <link href="<?php echo base_url() ?>panel_assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">

            <form id="loginform" method="POST" class="form-vertical" action="<?php echo base_url() ?>member/adminlogin">
				 <div class="control-group normal_text"> <h3><img src="<?php echo base_url() ?>panel_assets/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="username" autofocus="1" autocomplete="off" required="1" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="password" required="1" />
                        </div>
                    </div>
                </div>
                <div class="form-actions text-center">
                    <span class="text-center"><button type="submit" class="btn btn-success" /> Login</button></span>
                </div>
            </form>
        </div>
        
        <script src="<?php echo base_url() ?>panel_assets/js/jquery.min.js"></script>  
        <script src="<?php echo base_url() ?>panel_assets/js/matrix.login.js"></script> 
    </body>

</html>
