<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Realm - Tables</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Bluth Company">
    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/alertify.css" rel="stylesheet">
    <link rel="Favicon Icon" href="favicon.ico">
    <link href="http://fonts.useso.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrap">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <div class="logo">
                    <img src="assets/img/logo.png" alt="Realm Admin Template">
                </div>
                <a class="btn btn-navbar visible-phone" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="btn btn-navbar slide_menu_left visible-tablet">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="top-menu visible-desktop">
                    <ul class="pull-left">
                        <li><a id="messages" data-notification="2" href="#"><i class="icon-envelope"></i> Messages</a></li>
                        <li><a id="notifications" data-notification="3" href="#"><i class="icon-globe"></i> Notifications</a></li>
                    </ul>
                    <ul class="pull-right">
                        <li><a href="login.html"><i class="icon-off"></i> Logout</a></li>
                    </ul>
                </div>

                <div class="top-menu visible-phone visible-tablet">
                    <ul class="pull-right">
                        <li><a title="link to View all Messages page, no popover in phone view or tablet" href="#"><i class="icon-envelope"></i></a></li>
                        <li><a title="link to View all Notifications page, no popover in phone view or tablet" href="#"><i class="icon-globe"></i></a></li>
                        <li><a href="login.html"><i class="icon-off"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">

        <!-- Side menu -->
        <div class="sidebar-nav nav-collapse collapse">
            <div class="user_side clearfix">
                <img src="assets/img/odinn.jpg" alt="Odinn god of Thunder">
                <h5>Odinn</h5>
                <a href="#"><i class="icon-cog"></i> Settings</a>
            </div>
            <div class="accordion" id="accordion2">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_F79999" href="index-2.html"><i class="icon-dashboard"></i> <span>Dashboard</span></a>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_C3F7A7" data-toggle="collapse" data-parent="#accordion2" href="#collapse1"><i class="icon-magic"></i> <span>系统管理</span></a>
                    </div>
                    <div id="collapse1" class="accordion-body in collapse" style="height:auto">
                        <div class="accordion-inner">
                            <a class="accordion-toggle" href="ui_features.html"><i class="icon-star"></i> 系统用户管理</a>
                            <a class="accordion-toggle" href="forms.html"><i class="icon-list-alt"></i> Forms</a>
                            <a class="accordion-toggle active" href="tables.html"><i class="icon-table"></i> Tables</a>
                            <a class="accordion-toggle" href="buttons.html"><i class="icon-circle"></i> Buttons</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_9FDDF6 collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse2"><i class="icon-reorder"></i> <span>Components</span></a>
                    </div>
                    <div id="collapse2" class="accordion-body collapse">
                        <div class="accordion-inner">
                            <a class="accordion-toggle" href="notifications.html"><i class="icon-rss"></i> Notifications</a>
                            <a class="accordion-toggle" href="calendar.html"><i class="icon-calendar"></i> Calendar</a>
                            <a class="accordion-toggle" href="gallery.html"><i class="icon-picture"></i> Gallery</a>
                        </div>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_F6F1A2" href="tasks.html"><i class="icon-tasks"></i> <span>Tasks</span></a>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_C1F8A9" href="analytics.html"><i class="icon-bar-chart"></i> <span>Analytics</span></a>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_9FDDF6" href="tickets.html"><i class="icon-bullhorn"></i> <span>Support Tickets</span></a>
                    </div>
                </div>
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle b_F5C294" href="users.html"><i class="icon-user"></i> <span>Users</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Side menu -->

        <!-- Main window -->
        <div class="main_container" id="tables_page">
            <div class="row-fluid">
                <ul class="breadcrumb">
                    <li><a href="#">Home</a> <span class="divider">/</span></li>
                    <li><a href="#">Pages</a> <span class="divider">/</span></li>
                    <li class="active">Tables</li>
                </ul>
                <h2 class="heading">
                    Tables
                </h2>
            </div>


            <div class="row-fluid">
                <div class="widget widget-padding span12">
                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h5>Dynamic Table</h5>
                        <div class="widget-buttons">
                            <a href="http://www.datatables.net/usage/" data-title="Documentation" class="tip" target="_blank"><i class="icon-external-link"></i></a>
                            <a href="#" data-title="Collapse" data-collapsed="false" class="tip collapse"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="widget-body">
                        <table id="users" class="table table-striped table-bordered dataTable">
                            <thead>
                            <tr>
                                <th>User</th>
                                <th>Group</th>
                                <th>Registered</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Amie</td>
                                <td>Admin</td>
                                <td>20-05-2012</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Katy</td>
                                <td>User</td>
                                <td>12-08-2012</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Serena</td>
                                <td>User</td>
                                <td>05-01-2013</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Christian</td>
                                <td>User</td>
                                <td>18-07-2011</td>
                                <td><span class="label label-important">Banned</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Nelson</td>
                                <td>User</td>
                                <td>03-06-2012</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Odessa</td>
                                <td>User</td>
                                <td>08-05-2012</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Allan</td>
                                <td>User</td>
                                <td>06-04-2012</td>
                                <td><span class="label">Inactive</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Hillary</td>
                                <td>User</td>
                                <td>03-08-2012</td>
                                <td><span class="label label-success">Active</span></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-small dropdown-toggle" data-toggle="dropdown" href="#">
                                            Action
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#"><i class="icon-envelope"></i> Email</a></li>
                                            <li><a href="#"><i class="icon-edit"></i> Edit</a></li>
                                            <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div> <!-- /widget-body -->
                </div> <!-- /widget -->
            </div> <!-- /row-fluid -->

        </div>
        <!-- /Main window -->

    </div><!--/.fluid-container-->
</div><!-- wrap ends-->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/raphael-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src='assets/js/sparkline.js'></script>
<script type="text/javascript" src='assets/js/morris.min.js'></script>
<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.facybox.js"></script>
<script type="text/javascript" src="assets/js/jquery.alertify.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.knob.js"></script>
<script type='text/javascript' src='assets/js/fullcalendar.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.gritter.min.js'></script>
<script type="text/javascript" src="assets/js/realm.js"></script>
</body>
</html>

