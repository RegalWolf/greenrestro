<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>

        <meta charset="UTF-8">
        <meta name="author" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">   
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap/css/bootstrap.min.css');?>">
		<script type="text/javascript" src="<?php echo base_url('assets/css/bootstrap/js/bootstrap.min.js'); ?>"></script>
    </head>
    <body>
        <div class="container-fluid bg">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-1"></div>
                <div class="col-md-4 col-sm-6 col-xs-10">
                    <div class="image">
                        <img src="<?php  echo base_url('assets/image/login.png')?>" alt="">
                    </div>
                    
                    <form class="form-container">
                        <div class="form-group">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-submit btn-block">Login</button>
                    </form>
                    
                </div>
                <div class="col-md-4 col-sm-3 col-xs-1"></div>
            </div>
        </div>
    </body>
</html>