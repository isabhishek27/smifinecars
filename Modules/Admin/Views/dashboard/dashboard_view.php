<!DOCTYPE html>
<html>

<head><?php echo view('Modules\Admin\Views\inc\top_head'); ?></head>

<body class="header-white sidebar-light">
	
    <?php echo view('Modules\Admin\Views\inc\header'); ?>

    <?php echo view('Modules\Admin\Views\inc\left'); ?>	

	<div class="main-container">
		<div class="pd-ltr-20">

			<!-- <div class="row">
				<div class="col-xl-3 mb-30">
					<a href="product.html" class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div class="circleImg one"><i class="icon-copy ion-cube"></i></div>

							</div>
							<div class="widget-data">
								<div class="h4 mb-0">2000</div>
								<div class="weight-600 font-14">Total Products</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xl-3 mb-30">
					<a href="order.html" class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div class="circleImg two"><i class="icon-copy ion-ios-cart"></i></div>


							</div>
							<div class="widget-data">
								<div class="h4 mb-0">4000</div>
								<div class="weight-600 font-14">Total Order</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xl-3 mb-30">
					<a href="customer.html" class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div class="circleImg three"><i class="icon-copy ion-person-stalker"></i></div>

							</div>
							<div class="widget-data">
								<div class="h4 mb-0">850</div>
								<div class="weight-600 font-14">Total Cutomers</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							<div class="progress-data">
								<div class="circleImg four"><i class="icon-copy ion-social-usd"></i></div>
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">$10000.00</div>
								<div class="weight-600 font-14">Total Sales</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-8 mb-30">
					<div class="card-box height-100-p pd-20">
						<h2 class="h4 mb-20">Salse Statistic</h2>



						<div class="text-center">

							<div id="bar-chart"></div>
						</div>

					</div>
				</div>
				<div class="col-xl-4 mb-30">
					<div class="card-box height-100-p pd-20">

						<div class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3">
							<div class="h5 mb-md-0">Product Sold</div>
							<div class="form-group mb-md-0">
								<div class="dropdown bootstrap-select form-control form-control-sm">
									<select class="form-control form-control-sm selectpicker" tabindex="-98">
										<option value="">Today</option>
										<option value="">Week</option>
										<option value="">Month</option>
										<option value="">Year</option>
									</select>


									<div class="dropdown-menu ">
										<div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
											<ul class="dropdown-menu inner show" role="presentation"></ul>
										</div>
									</div>
								</div>
							</div>
						</div>




						<div class="mt-3">


							<div class="mb-4">
								<div class="small text-gray-500">Oblong T-Shirt
									<div class="small float-right"><b>600 of 800 Items</b></div>
								</div>
								<div class="progress" style="height: 10px;">
									<div class="progress-bar" role="progressbar" style="background:#1276BD; width:80%;"
										aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="mb-4">
								<div class="small text-gray-500">Gundam 90'Editions
									<div class="small float-right"><b>500 of 800 Items</b></div>
								</div>
								<div class="progress" style="height: 10px;">
									<div class="progress-bar" role="progressbar" style="background:#1276BD; width:70%;"
										aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="mb-4">
								<div class="small text-gray-500">Rounded Hat
									<div class="small float-right"><b>455 of 800 Items</b></div>
								</div>
								<div class="progress" style="height: 10px;">
									<div class="progress-bar" role="progressbar" style="background:#1276BD; width:60%;"
										aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="mb-4">
								<div class="small text-gray-500">Indomie Goreng
									<div class="small float-right"><b>400 of 800 Items</b></div>
								</div>
								<div class="progress" style="height: 10px;">
									<div class="progress-bar" role="progressbar" style="background:#1276BD; width:50%;"
										aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<div class="mb-4">
								<div class="small text-gray-500">Remote Control Car Racing
									<div class="small float-right"><b>200 of 800 Items</b></div>
								</div>
								<div class="progress" style="height: 10px;">
									<div class="progress-bar" role="progressbar" style="background:#1276BD; width:30%;"
										aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>


							<div class="mb-4">
								<div class="small text-gray-500">Gundam 90'Editions
									<div class="small float-right"><b>500 of 800 Items</b></div>
								</div>
								<div class="progress" style="height: 10px;">
									<div class="progress-bar" role="progressbar" style="background:#1276BD; width:70%;"
										aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>


			<div class="card-box mb-20 dataTables_wrapper dt-bootstrap4 pb-20">
				<h2 class="h4 pd-20">Lates Order</h2>





                <div class="table-responsive">


                    <table class="nowrap table" id="myDataTable">
                        <thead>
                            <tr>
                                <th class="table-plus">Invoice</th>
                                <th>Customer</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                                <th>Order Status</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220081</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">John Doe</h5>
                                    Mob: 800 888 8800<br>
                                    Email: johndoe@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220082</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">Alex Smith</h5>
                                    Mob: 800 888 8800<br>
                                    Email: alexsmith@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220081</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">John Doe</h5>
                                    Mob: 800 888 8800<br>
                                    Email: johndoe@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220082</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">Alex Smith</h5>
                                    Mob: 800 888 8800<br>
                                    Email: alexsmith@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220081</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">John Doe</h5>
                                    Mob: 800 888 8800<br>
                                    Email: johndoe@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220082</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">Alex Smith</h5>
                                    Mob: 800 888 8800<br>
                                    Email: alexsmith@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220081</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">John Doe</h5>
                                    Mob: 800 888 8800<br>
                                    Email: johndoe@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220082</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">Alex Smith</h5>
                                    Mob: 800 888 8800<br>
                                    Email: alexsmith@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220081</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">John Doe</h5>
                                    Mob: 800 888 8800<br>
                                    Email: johndoe@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td class="table-plus">
                                    <a href="#" class="btn-link"><strong>UBN220082</strong></a><br>
                                    Dated: 05 Nov 2024, 08:30pm

                                </td>
                                <td>
                                    <h5 class="font-16">Alex Smith</h5>
                                    Mob: 800 888 8800<br>
                                    Email: alexsmith@gmail.com

                                </td>
                                <td>$120.00</td>
                                <td>Paid - <a href="#" class="btn-link">Mark Unpaid</a> <br>
                                    Method: Paypal


                                </td>
                                <td>
                                    <select class="form-control form-control-sm" style="width: 120px;">

                                        <option>Pending</option>
                                        <option>Delivered</option>
                                        <option>Canceled</option>
                                        <option>Closed</option>

                                    </select>

                                </td>

                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                            role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>View Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Delivery
                                                Invoice</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View Picking Slip
                                                Invoice</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>







                        </tbody>
                    </table>

			    </div>


			</div> -->
			<div class="row" style="min-height:480px;">
                <div class="pd10">Welcome to Admin Panel</div>
            </div>    
            <?php echo view('Modules\Admin\Views\inc\footer'); ?>

		</div>

	</div>

	<?php echo view('Modules\Admin\Views\inc\bottom'); ?>

</body>

</html>