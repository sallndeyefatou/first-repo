<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<title>PCCI - EVALUATIONS</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('deskapp/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('deskapp/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('deskapp/vendors/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('deskapp/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('deskapp/vendors/styles/icon-font.min.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{asset('deskapp/vendors/styles/style.css')}}" />


		@yield("style")



		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div class="container-fluid d-flex justify-content-between align-items-center">
				<div class="brand-logo">
					<a href="login.html">
					<!--<img src="{{asset('deskapp/vendors/images/deskapp-logo.svg')}}" alt="" />-->
       				 <img src="{{asset('deskapp/vendors/images/Logo-pcci-evaluations.png')}}" alt="" />						
					</a>
				</div>
				<div class="text-left" id="menu">
					<a href="#" class="card-link text-primary">Dashboard</a>&nbsp;&nbsp;
					<a href="#" class="card-link text-secondary">Add Quizz</a>&nbsp;&nbsp;
					<a href="#" class="card-link text-secondary">List</a>&nbsp;&nbsp;
					<a href="#" class="card-link text-secondary">Users</a>
				</div>
				<div class="text-center" id="divtimer">
					<h1 class="text-center"><span class="text-primary" id='timer'></span></h1>
				</div>
				<div class="login-menu" id="divdate">
					<ul>
						<li><a href="#">{{Date('d-M-Y')}}</a></li>
					</ul>
				</div>
				@if (auth()->check())
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
							<span class="user-icon">
								<img src="{{asset('deskapp/vendors/images/photo1.jpg')}}" alt="" />
							</span>
							<span class="user-name">{{ Auth::user()->prenom.' '.Auth::user()->nom }}</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
							<a class="dropdown-item" href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
							>
								<i class="dw dw-logout"></i> Déconnexion
							</a>
		                    <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
		                        @csrf
		                    </form>							
						</div>
					</div>
				</div>
				@endif
			</div>
		</div>
		<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
			<div class="container">
				<div class="row align-items-center">
				    <div class="col-md-6 col-lg-7">
					    <div class="page-header">
						   <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="title">
										<h4>Liste des quizz</h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 text-right">
									<div class="title">
										<a class="btn btn-secondary" href="#" data-toggle="modal" data-target="#bd-example-modal-lg"> Add new quizz</a>
									</div>
								</div>
							</div>
						</div>				        
						<div class="page-header">
							<div class="row">
								<div class="col-md-12 col-sm-12">

									<!-- Export Datatable start -->
									<div class="card-box mb-30">
										<!--
										<div class="pd-20">
											<h4 class="text-blue h4">Data Table with Export Buttons</h4>
										</div>
									    -->
										<div class="pb-20">
											<table class="data-table table nowrap datatable-nosort">
											<!--<table class="data-table table stripe hover nowrap">-->
											<!--<table
												class="table hover multiple-select-row data-table-export nowrap"
											>-->
												<thead>
													<tr>
														<th>Date</th>
														<th>Quizz</th>
														<th>NQues</th>
														<th>Duree</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">
															2829 Trainer Avenue Peoria, IL 61602
														</td>
														<td>
															25
														</td>									
														<td>
															3600
														</td>
														<td>
															<div class="table-actions">
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy dw dw-eye"></i
																></a>
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy bi bi-plus"></i
																></a>							
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy dw dw-edit2"></i
																></a>
																<a href="#" data-color="#e95959"
																	><i class="icon-copy dw dw-delete-3"></i
																></a>
															</div>
														</td>	
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
														<td>
															<div class="table-actions">
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy dw dw-eye"></i
																></a>
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy bi bi-plus"></i
																></a>							
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy dw dw-edit2"></i
																></a>
																<a href="#" data-color="#e95959"
																	><i class="icon-copy dw dw-delete-3"></i
																></a>
															</div>
														</td>		
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
														<td>
															<div class="table-actions">
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy dw dw-eye"></i
																></a>
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy bi bi-plus"></i
																></a>							
																<a href="#" data-color="#265ed7"
																	><i class="icon-copy dw dw-edit2"></i
																></a>
																<a href="#" data-color="#e95959"
																	><i class="icon-copy dw dw-delete-3"></i
																></a>
															</div>
														</td>		
													</tr>
													<!--
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
													<tr>
														<td>29-03-2018</td>
														<td class="table-plus">2829 Trainer Avenue Peoria, IL 61602</td>
														<td>25</td>									
														<td>3600</td>
													</tr>
												-->
												</tbody>
											</table>
										</div>
									</div>
									<!-- Export Datatable End -->

								</div>
							</div>
						</div>				        
				    </div>
				    <div class="col-md-6 col-lg-5">
				        <div class="login-box bg-white box-shadow border-radius-10">
				            <div class="login-title">
				                    <div class="text-center">
				                        <img src="{{asset('images/logo.png')}}" width="180" alt="" />
				                    </div>                 
				            </div>
				            <form>
				                @csrf
				                <div class="row">
				                    <div class="col-sm-12">
				                        <div class="input-group mb-4 h-75">
				                            <a class="btn btn-outline-primary btn-lg btn-block"
				                                href="{{route('evalSelectedTo',['evalSelectedTo'=>'EvalStagiaire'])}}">EVALUATIONS PAR LE STAGIAIRE</a>
				                        </div>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="col-sm-12">
				                        <div class="input-group mb-4">
				                            <a class="btn btn-outline-primary btn-lg btn-block"
				                                href="{{route('evalSelectedTo',['evalSelectedTo'=>'EvalMensuelle'])}}">EVALUATIONS MENSUELLES</a>
				                        </div>
				                    </div>
				                </div>
				                <div class="row">
				                    <div class="col-sm-12">
				                        <div class="input-group mb-4">
				                            <a class="btn btn-outline-primary btn-lg btn-block"
				                                href="{{route('accueil')}}">TESTS RECRUTEMENT</a>
				                        </div>
				                    </div>
				                </div> 
				                <div class="row">
				                    <div class="col-sm-12">
				                        <div class="input-group mb-4">
				                            <a class="btn btn-outline-info btn-lg btn-block"
				                                href="{{route('evalSelectedTo',['evalSelectedTo'=>'Administrations'])}}">ADMINISTRATIONS</a>
				                        </div>
				                    </div>
				                </div>                                               
				            </form>
				        </div>
				    </div>
				</div>		
			</div>
		</div>


		<div
			class="modal fade bs-example-modal-lg"
			id="bd-example-modal-lg"
			tabindex="-1"
			role="dialog"
			aria-labelledby="myLargeModalLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myLargeModalLabel">
							Large modal
						</h4>
						<button
							type="button"
							class="close"
							data-dismiss="modal"
							aria-hidden="true"
						>
							×
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="input-group custom">
								<input
									type="text"
									class="form-control form-control-lg"
									placeholder="THEMES QUIZ MENSUEL JUILLET 2023"
								/>
								<!--<div class="input-group-append custom">
									<span class="input-group-text"
										><i class="icon-copy dw dw-user1"></i
									></span>
								</div>-->
							</div>
							<div class="input-group custom">
								<select
									class="custom-select2 form-control"
									name="state"
									style="width: 100%; height: 38px">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
								</select>
							</div>
							<div class="input-group custom">
								<input
									type="text"
									class="form-control form-control-lg"
									placeholder="3600"
								/>
								<!--<div class="input-group-append custom">
									<span class="input-group-text"
										><i class="icon-copy dw dw-user1"></i
									></span>
								</div>-->
							</div>							
							<!--<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<a
											class="btn btn-primary btn-lg btn-block"
											href="#"
											>Save</a
										>
									</div>
								</div>
							</div>-->
						</form>
					</div>
					<div class="modal-footer">
						<!--<button
							type="button"
							class="btn btn-secondary"
							data-dismiss="modal"
						>
							Close
						</button>-->
						<button type="button" class="btn btn-primary">
							Enregister
						</button>
					</div>
				</div>
			</div>
		</div>
	

		<div class="footer-wrap pd-20 mb-20 card-box">
					PCCI - EVALUATIONS By
			<a href="https://github.com/dropways" target="_blank"
						>DSI</a
					>
		</div>


		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{asset('deskapp/vendors/scripts/core.js')}}"></script>
		<script src="{{asset('deskapp/vendors/scripts/script.min.js')}}"></script>
		<script src="{{asset('deskapp/vendors/scripts/process.js')}}"></script>
		<script src="{{asset('deskapp/vendors/scripts/layout-settings.js')}}"></script>
		<script src="{{--asset('deskapp/src/plugins/apexcharts/apexcharts.min.js')--}}"></script>
		<script src="{{asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{--asset('deskapp/vendors/scripts/dashboard3.js')--}}"></script>
		<!-- Google Tag Manager (noscript) -->



		<!-- js -->
		<script src="{{--asset('deskapp/vendors/scripts/core.js')--}}"></script>
		<script src="{{--asset('deskapp/vendors/scripts/script.min.js')--}}"></script>
		<script src="{{--asset('deskapp/vendors/scripts/process.js')--}}"></script>
		<script src="{{--asset('deskapp/vendors/scripts/layout-settings.js')--}}"></script>


		<script src="{{--asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js')--}}"></script>
		<!-- buttons for Export datatable -->
		<script src="{{--asset('deskapp/src/plugins/datatables/js/dataTables.buttons.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/buttons.bootstrap4.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/buttons.print.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/buttons.html5.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/buttons.flash.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/pdfmake.min.js')--}}"></script>
		<script src="{{--asset('deskapp/src/plugins/datatables/js/vfs_fonts.js')--}}"></script>
		<!-- Datatable Setting js -->
		<script src="{{--asset('deskapp/vendors/scripts/datatable-setting.js')--}}"></script>



		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->

		@yield("script")
		
	</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
	    $('#mytable').dataTable( {
	        "bPaginate": false,
	        "bFilter": false,
	        "bInfo": false
	                 } );
	} );
</script>