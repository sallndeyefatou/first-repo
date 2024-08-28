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
					<a href="{{route('quizz-list')}}" class="card-link text-primary">Dashboard</a>&nbsp;&nbsp;
					<a href="{{route('addUser')}}" class="card-link text-secondary">Add User</a>&nbsp;&nbsp;
					<a href="{{route('editUser')}}" class="card-link text-secondary">Edit User</a>
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
                            <div class="col-mb-6 col-sm-6">
                                <div class="title">
                                    <h4>Liste des utilisateurs</h4>
                                </div>
                            </div>
                           </div>
                        
						</div>				        
						<div class="page-header">
							@yield('head-bottom')
                            <div class="card-box mb-10">
                                <div class="pb-60">
                                    <table class="data-table table nowrap datatable-nosort">
                                        <thead>
                                            <tr>
                                                <th>Identifiant</th>
                                                <th>Prenom</th>
                                                <th>Nom</th>
                                                <th>Campagne</th>
                                                <th>Actions</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)

                                            <tr>
                                                <td class="table-plus">{{$user->identifiant}}</td>
                                                <td class="table-plus">
                                                    {{$user->prenom}}
                                                </td>
                                                <td class="table-plus">
                                                    {{$user->nom}}
                                                </td>									
                                                <td class="table-plus">
                                                    {{$user->campagne}}
                                                </td>
                                                <td>
                                                    <div class="table-actions">
                                                       						
                                                        <a href="{{--route('editUser')--}}" data-color="#265ed7"
                                                            ><i class="icon-copy dw dw-edit2"></i
                                                        ></a>
														<form action="{{route('user.destroy',$user->id)}}" method="GET">
                                                        <a href="{{--route('user.destroy',$user->id)--}}" data-color="#e95959"
                                                            ><i class="icon-copy dw dw-delete-3"></i
                                                        ></a>

														<!--button type="submit" class="btn btn-danger" onclick="return confirm(Etes-vous sur de vouloir supprimer cet utilisateur?);">Supprimer</button-->
													</form>
                                                    </div>
                                                </td>	
                                            </tr>
                                                
                                            @endforeach
                                            
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

<script type="text/javascript">
	$(document).ready(function() {
	    $('#mytable').dataTable( {
	        "bPaginate": false,
	        "bFilter": false,
	        "bInfo": false
	                 } );
	} );
</script>