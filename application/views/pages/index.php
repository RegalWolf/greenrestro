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
    	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
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
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        
                        <div class="form-group pull-right">
                            <div class="dropdown">
                              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Login Sebagai
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Pelanggan</a></li>
                                <li><a href="#">Pelayan</a></li>
                                <li><a href="#">Kasir</a></li>
                                <li><a href="#">Koki</a></li>
                                <li><a href="#">Pantry</a></li>
                                <li><a href="#">Customer Service</a></li>
                              </ul>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-submit btn-block">Login</button>
                    </form>
                    
                </div>
                <div class="col-md-4 col-sm-3 col-xs-1"></div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="<?php echo base_url('assets/js/dropdown_login.js'); ?>"></script>
</html>