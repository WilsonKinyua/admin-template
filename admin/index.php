<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->

 
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Direct.co.ke - Showwroom Dashboard" />
	<meta name="author" content="Direct.co.ke" />
	<title>Showroom Admin | Direct.co.ke</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="../assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="../assets/css/material_style.css">
	<!-- inbox style -->
	<link href="../assets/css/pages/inbox.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme Styles -->
	<link href="../assets/css/theme/dark/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="../assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/style.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/theme/dark/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://radixtouch.com/templates/admin/smart/source/assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-dark dark-sidebar-color logo-dark dark-theme">
	<div class="page-wrapper">
		<!-- start header -->
		<?php include 'header.php'; ?>
		<!-- end header -->

		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<?php include 'sidebar.php'; ?>
			<!-- end sidebar menu -->

			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Lota Showroom</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.html">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">Dashboard</li>
							</ol>
						</div>
					</div>
					<!-- start widget -->
					
					<div class="state-overview">
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel purple">
									<div class="symbol">
										<i class="fa fa-car usr-clr"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="23">0</p>
										<p>Vehicles in Stock</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel orange">
									<div class="symbol">
										<i class="fa fa-cab"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
										<p>Sold Vehicles</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel deepPink-bgcolor">
									<div class="symbol">
										<i class="fa fa-times-circle-o"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
										<p>Sold Out</p>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6">
								<div class="overview-panel blue-bgcolor">
									<div class="symbol">
										<i class="fa fa-money"></i>
									</div>
									<div class="value white">
										<p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">0</p> 
										<p>January Sales (Ksh	)</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end widget --> 

					<!-- start new student list -->
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="card  card-box">
								<div class="card-head">
									<header>Recent Sales</header>
									<div class="tools">
										<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
										<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
										<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
									</div>
								</div>
								<div class="card-body ">
									<div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table">
												<thead>
													<tr>
														<th>No</th>
														<th>Vehicle </th>
														<th>Ref ID</th>
														<th>Date Sold</th>
														<th>Price</th>
														<th>Status</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Toyota Van</td>
														<td>#TX10093</td>
														<td>27/12/2021</td>
														<td>Ksh. 3,200,000</td>
														<td>
															<span class="label label-sm label-success">paid</span>
														</td>
														<td>
															<a href="javascript:void(0)" class="text-inverse"
																title="View Invoice" data-bs-toggle="tooltip">
																<i class="fa fa-bookmark-o"></i></a> 
																&nbsp;	&nbsp;
															<a href="javascript:void(0)" class=""
																data-bs-toggle="tooltip" title="Fully Paid"><i
																	class="fa fa-check"></i></a>
														</td>
													</tr> 

													<tr>
														<td>2</td>
														<td>BMW X4</td>
														<td>#BM104</td>
														<td>24/12/2021</td>
														<td>Ksh. 9,300,000</td>
														<td>
															<span class="label label-sm label-primary">deposit</span>
														</td>
														<td>

															<a href="javascript:void(0)" class="text-inverse"
																title="Record Payment" data-bs-toggle="tooltip">
																<i class="fa fa-bookmark-o"></i></a>  &nbsp;	&nbsp;
															<a href="javascript:void(0)" class=""
																data-bs-toggle="tooltip" title="Paid Patialy"><i
																	class="fa fa-check"></i></a>
														</td>
													</tr> 

													<tr>
														<td>3</td>
														<td>Tesla S3</td>
														<td>#TS012</td>
														<td>19/12/2021</td>
														<td>Ksh. 4,900,000</td>
														<td>
															<span class="label label-sm label-success">paid</span>
														</td>
														<td>

															<a href="javascript:void(0)" class="text-inverse"
																title="Record Payment" data-bs-toggle="tooltip">
																<i class="fa fa-bookmark-o"></i></a> 
																&nbsp;	&nbsp;
															<a href="javascript:void(0)" class=""
																data-bs-toggle="tooltip" title="Edit"><i
																	class="fa fa-check"></i></a>
														</td>
													</tr> 
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end new student list -->
				</div>
			</div>
			<!-- end page content -->

		</div>
		<!-- end page container -->

		<!-- start footer -->
		<?php include 'footer.php' ?>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/popper/popper.js"></script>
	<script src="../assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- bootstrap -->
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
	<script src="../assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="../assets/js/pages/sparkline/sparkline-data.js"></script>


	<script src="../assets/plugins/moment/moment.min.js"></script>
	<script src="../assets/plugins/counterup/jquery.waypoints.min.js"></script>
	<script src="../assets/plugins/counterup/jquery.counterup.min.js"></script>

	<!-- Common js-->
	<script src="../assets/js/app.js"></script>
	<script src="../assets/js/layout.js"></script>
	<script src="../assets/js/theme-color.js"></script>
	<!-- material -->
	<script src="../assets/plugins/material/material.min.js"></script>
	<!--apex chart-->
	<script src="../assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../assets/js/pages/chart/chartjs/home-data.js"></script>
	<!-- summernote -->
	<script src="../assets/plugins/summernote/summernote.js"></script>
	<script src="../assets/js/pages/summernote/summernote-data.js"></script>
	<!-- end js include path -->
</body>


<!--  10:58:51 -->
</html>