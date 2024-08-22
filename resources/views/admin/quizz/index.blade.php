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
					<a href="{{route('quizz-list')}}" class="card-link text-secondary">List</a>&nbsp;&nbsp;
					<a href="{{route('listUser')}}" class="card-link text-secondary">Users</a>
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
				    <div class="col-md-12 col-lg-12">
					    <div class="page-header">
						   @yield('head-top')
						  
						
						   <div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="title">
										<h4>Liste des quizz mensuels</h4>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 text-right">
									<div class="title">
										@if(session('success'))
										<div class="alert alert-success">
											{{ session('success') }}
										</div>
									@endif
										<a class="btn btn-secondary" href="{{route('quizz-add')}}"> Add new quizz</a>
									</div>
								</div>
						  </div>
						  <script type="text/javascript">
							$(document).ready(function() {
								$('#mytable').dataTable( {
									"bPaginate": false,
									"bFilter": false,
									"bInfo": false
											} );
							} );
						</script>
						
						@section('head-bottom')
						<form  method="GET"  action="{{route('quizz.store')}}" >
							@csrf
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="card-box mb-30">
										<div class="pb-20">
											
											<table class="data-table table nowrap datatable-nosort">
												<thead>
													<tr>
														<!--<th>Date</th>-->
														<th>Campagne</th>
														<th>Quizz</th>
														<th>NQues</th>
														<th>Duree</th>
														<th>Etat</th>
														<th>Actions</th>
													</tr>
												</thead>
												@if(isset($quizzs))
												
												<tbody>
													@foreach ($quizzs as $quizz)
													<tr>
														<td class="table-plus">
															{{$quizz->nomcampagne}}
														</td>
														<td class="table-plus" >
															{{$quizz->nomquizz}}
														</td>
														<td class="table-plus">
															{{$quizz->nbques}}
														</td>									
														<td class="table-plus">
															{{$quizz->duree}}
														</td>
														<td class="table-plus">
														
															{{$quizz->etat}}
														</td>
														<td>
															<div class="table-actions">
																<a href="{{route('showQuizz')}}" data-color="#265ed7">
																	<i class="icon-copy dw dw-eye"></i>
																</a>
																<a href="{{route('quizz-question-add',['quizz1_id' => $quizz->id])}}" data-color="#265ed7"
																	><i class="icon-copy bi bi-plus"></i
																></a>
																<a href="{{route('quizz.edit')}}" data-color="#265ed7"
																	><i class="icon-copy dw dw-edit2"></i
																></a>
																<form action="{{route('quizz.destroy'/*[id]*/)}}" method="POST">
																<a href="{{--route('quizz.destroy',['quizz1_id'])--}}" data-color="#e95959"
																	><i class="icon-copy dw dw-delete-3"></i
																></a>
															</form>
															</div>
														</td>	
													</tr>
													@endforeach
												</tbody>
												@endif
											</table>
										</form>
										</div>
									</div>
								</div>
							</div>
						@endsection	
						</div>				        
						<div class="page-header">
							@yield('head-bottom')
						</div>				        
				    </div>
				    
				</div>		
			</div>
		</div>

		<div class="footer-wrap pd-20 mb-20 card-box">
					PCCI - EVALUATIONS By
			<a href="https://pcci-group.com/" target="_blank">DSI</a>
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


