<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top" style="background-color: #D4AF37;">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="javascript: void(0);">
                             <img src="/cit_parking_system/images/ic_logo.png" alt="logo" class="logo-default" /> </a>
                        <!-- <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div> -->
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
                               
                            </li>
                            <!-- END TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="/cit_parking_system/images/profile2.jpg"/>
									<span class="username username-hide-on-mobile" style="color: #000000;"> <?php echo $session->get('fname'); ?> </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    
                                    <li>
                                        <a href="<?php echo "?task=logout"; ?>">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container" style="background-color: #8B0000;">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper" >
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse" style="background-color: #8B0000;">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                           
                            <li class="nav-item start active open">
                                <a href="javascript:void(0);" onclick="dashboard();" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="nav-item start">
                                        <a href="javascript:void(0);" onclick="viewHsArea('High School Area');" class="nav-link ">
                                            <span class="title">High School Area</span>
                                            <span id="high_school_badge" class="badge badge-success"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item start ">
                                        <a href="javascript:void(0);" class="nav-link ">
                                            <span class="title">Academic Area</span>
                                            <span id="academic_badge" class="badge badge-success">9/70</span>
                                        </a>
                                    </li>
                                    <li class="nav-item start ">
                                        <a href="javascript:void(0);" class="nav-link ">
                                            <span class="title">ST Building Area</span>
                                            <span id="st_bldg_badge" class="badge badge-danger">0/50</span>
                                        </a>
                                    </li>
									<li class="nav-item start ">
                                        <a href="javascript:void(0);" class="nav-link ">
                                            <span class="title">Backgate Area</span>
                                            <span id="backgate_badge" class="badge badge-success">2/89</span>
                                        </a>
                                    </li>
									<li class="nav-item start ">
                                        <a href="javascript:void(0);" class="nav-link ">
                                            <span class="title">Canteen Area</span>
                                            <span id="canteen_badge" class="badge badge-danger">0/87</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" onclick="getParkingHistory();" class="nav-link ">
                                            <span class="title">Parking History</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" onclick="getViolations();" class="nav-link ">
                                            <span class="title">Violations</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
					<div id="container"></div>
                    <div class="page-content" id="dashboard_container">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 id="dashboard" class="page-title"> Dashboard
                            
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
						<div class="row" id="parking-area">
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="javascript:void(0);" onclick="viewHsArea('High School Area');">
                                    <img src="/cit_parking_system/images/ic_hs_area_.png" width="242" height="160" style="margin-left: 2px; margin-top: 2px;"/>
									<div class="visual">
                                        <!-- <i class="fa fa-comments"></i> -->
										<!-- <img src="/cit_parking_system/images/ic_hs_area_.png" width="246" height="120" style="margin-right: 150px;"/>-->
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span id="high_school_badge_board" data-counter="counterup" data-value="1349">0</span>
                                        </div>
                                        <div class="desc"> High School Area </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <img src="/cit_parking_system/images/ic_no_image_available.png" width="242" height="160" style="margin-left: 2px; margin-top: 2px;"/>
									<div class="visual">
                                        <!-- <i class="fa fa-bar-chart-o"></i> -->
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="12,5">9/50</span> </div>
                                        <div class="desc"> Academic Area </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                                    <img src="/cit_parking_system/images/ic_no_image_available.png" width="242" height="160" style="margin-left: 2px; margin-top: 2px;"/>
									<div class="visual">
                                        <!--<i class="fa fa-shopping-cart"></i>-->
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="549">0/50</span>
                                        </div>
                                        <div class="desc"> ST Building Area </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
									<img src="/cit_parking_system/images/ic_no_image_available.png" width="242" height="160" style="margin-left: 2px; margin-top: 2px;"/>
                                    <div class="visual">
                                        <!--<i class="fa fa-globe"></i>-->
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="89">2/89</span></div>
                                        <div class="desc"> Backgate Area </div>
                                    </div>
                                </a>
                            </div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 yellow" href="#">
									<img src="/cit_parking_system/images/ic_no_image_available.png" width="242" height="160" style="margin-left: 2px; margin-top: 2px;"/>
                                    <div class="visual">
                                        <!--<i class="fa fa-globe"></i>-->
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="89">0/87</span></div>
                                        <div class="desc"> Canteen Area </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div id="parking-area-holder-canvas" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <canvas id="parking-area-canvas" onclick="updateParkingSlot();" width="1000" height="690">
                            </div>
							<div id="static2" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false" data-attention-animation="false">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title" id="header-title">Full Width</h4>
									<input type="hidden" id="task" />
								</div>
								<div class="modal-body" id="modal-title">
									<p> Would you like to continue with some arbitrary task? </p>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" id="cancel" class="btn btn-outline dark">Cancel</button>
									<button type="button" data-dismiss="modal" id="continue" onclick="deleteSelected();" class="btn green">Ok</button>
								</div>
							</div>
							
							<div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4 class="modal-title">Edit Violation</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>Parking Area</label>
										<select id="area" class="form-control">
											<option>High School Area</option>
											<option>Academic Area</option>
											<option>ST Building Area</option>
											<option>Backgate Area</option>
											<option>Canteen Area</option>
										</select>
									</div>
									<div class="form-group">
										<label>Plate Number</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="pnumber" class="form-control" placeholder="e.g. AB XXXX">
									</div>
									<div class="form-group">
										<label>Car Model</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="car_model" class="form-control" placeholder="e.g. Toyota">
									</div>
									<div class="form-group">
										<label>Car Color</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="car_color" class="form-control" placeholder="e.g. Black">
									</div>
									<div class="form-group">
										<label>Violation</label>
										<input type="text" id="violation" class="form-control" placeholder="e.g. Parked Improperly">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-outline dark">Cancel</button>
									<button type="button" data-dismiss="modal" onclick="editSelected();" class="btn green">Update</button>
								</div>
							</div>
							
							<div id="stack2" class="modal fade" tabindex="-1" data-focus-on="input:first">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
									<h4>Add Violation</h4>
								</div>
								<div class="modal-body">
									<div class="form-group">
										<label>Parking Area</label>
										<select id="a_area" class="form-control">
											<option>High School Area</option>
											<option>Academic Area</option>
											<option>ST Building Area</option>
											<option>Backgate Area</option>
											<option>Canteen Area</option>
										</select>
									</div>
									<div class="form-group">
										<label>Plate Number</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="a_pnumber" class="form-control" placeholder="e.g. AB XXXX">
									</div>
									<div class="form-group">
										<label>Make</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="a_make" class="form-control" placeholder="e.g. Toyota">
									</div>
									<div class="form-group">
										<label>Model</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="a_car_model" class="form-control" placeholder="e.g. Fortuner">
									</div>
									<div class="form-group">
										<label>Car Color</label>
										<input type="hidden" id="id" class="form-control">
										<input type="text" id="a_car_color" class="form-control" placeholder="e.g. Black">
									</div>
									<div class="form-group">
										<label>Violation</label>
										<input type="text" id="a_violation" class="form-control" placeholder="e.g. Parked Improperly">
									</div>
									<div class="form-group">
										<label>Additional Details</label>
										<textarea class="form-control" id="a_additional_details" rows="2"></textarea>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" data-dismiss="modal" class="btn btn-outline dark">Cancel</button>
									<button type="button" data-dismiss="modal" onclick="addViolation();" class="btn green">Save</button>
								</div>
							</div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->
               
				</div>
			</div>
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2017 &copy; CIT-U Parking System
                    
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>