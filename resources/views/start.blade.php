@extends('auth.layouts.app')
@section('style')

<!-- Google Font -->
<!--<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet"
/>-->
<!-- CSS -->
<!--<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
<link
    rel="stylesheet"
    type="text/css"
    href="vendors/styles/icon-font.min.css"
/>-->
<link
    rel="stylesheet"
    type="text/css"
    href="{{asset('deskapp/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
/>
<link
    rel="stylesheet"
    type="text/css"
    href="{{asset('deskapp/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
/>
<!--<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />-->

<!--
        <link rel="stylesheet" type="text/css" href="{{asset('deskapp/vendors/styles/core.css')}}" />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('deskapp/vendors/styles/icon-font.min.css')}}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('deskapp/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('deskapp/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
        />
        <link rel="stylesheet" type="text/css" href="{{asset('deskapp/vendors/styles/style.css')}}" />
-->


@endsection
@section('content')
<div class="row align-items-center">
    <div class="col-md-6 col-lg-7">
        <img src="{{asset('deskapp/vendors/images/login-page-img.png')}}" alt="" />
    </div>
    <div class="col-md-6 col-lg-5">
        <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
                <!--<h2 class="text-center text-primary">Login To DeskApp</h2>-->
                    <div class="text-center">
                        <img src="{{asset('images/logo.png')}}" width="180" alt="" />
                    </div>                 
            </div>
            <form method="POST" action="{{route('evaluation')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-0 h-75">
                            <h6 class="text-center">{{$title}}<!--EVALUATIONS PAR LE STAGIAIRE--></h6>
                            <sub><h6 class="text-info text-center mt-1">{{$campagne}}</h6></sub>
                            <input type="hidden" name="evalchecked" id="evalchecked" value="{{$evalchecked}}" >
                            <hr>
                            <h6 class="text-left mt-2">
                                {{$description}}<!--Bienvenue à l'évaluation de la formation par le stagiaire !-->                                
                            </h6>
                            @if(@empty($campagne))
                                <h6 class="text-left mt-4">
                                    Nombre de questions :<strong>{{$Nbrequestions}}</strong>
                                </h6>
                                <h6 class="text-left mt-2">
                                    Type de réponse : <strong>{{$Typereponse}}<!--choix unique--></strong>
                                </h6>
                                <h6 class="text-left mt-2">
                                    Durée : <strong>{{$duree}}<!--1 heure--></strong>
                                </h6>
                            @else
                            <!-- multiple select row Datatable End -->
                            <!-- Checkbox select Datatable start -->
                            <div class="card-box mt-3">
                                <!--<div class="pd-20">
                                    <h4 class="text-blue h4">Evaluations annuelles</h4>
                                </div>-->
                                <div class="pb-0">
                                    <table class="checkbox-datatable table nowrap">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <!--<div class="dt-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            name="select_all"
                                                            value="1"
                                                            id="example-select-all"
                                                        />
                                                        <span class="dt-checkbox-label"></span>
                                                    </div>-->
                                                </th>
                                                <th>N°</th>
                                                <th>Thème</th>
                                                <!--<th>Actions</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($questionnaires as $questionnaire)
                                            <tr>
                                                <td>
                                                    <div class="dt-checkbox">
                                                        <input
                                                            type="checkbox"
                                                            name="checkboxselected"
                                                            value="{{$questionnaire->id}}"
                                                            id="example-select-all"
                                                        />
                                                        <span class="dt-checkbox-label"></span>
                                                    </div>    
                                                </td>
                                                <td>{{$questionnaire->id}}</td>
                                                <td>{{$questionnaire->que_quizz}}</td>
                                                <!--<td>
                                                    <div class="table-actions">
                                                        <a href="{{--route('evaluation.Mensuelle',['evaluation'=>$questionnaire->id])--}}" data-color="#00aff0"
                                                            ><i class="icon-copy dw dw-eye"></i
                                                        ></a>
                                                    </div>
                                                </td>-->
                                            </tr>
                                            @endforeach                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Checkbox select Datatable End -->
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="mb-0">
                            <hr>
                            <button class="btn btn-success btn-lg w-50" type="submit">Start</button>                                
                            <a class="btn btn-outline-primary btn-lg ml-1 w-25"
                                href="{{route('deconnexion')}}">Exit</a>
                        </div>
                    </div>
                </div>                               
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<!--<script src="vendors/scripts/core.js"></script>-->
<!--<script src="vendors/scripts/script.min.js"></script>-->
<!--<script src="vendors/scripts/process.js"></script>-->
<!--<script src="vendors/scripts/layout-settings.js"></script>-->
<!--<script src="{{--asset('deskapp/src/plugins/apexcharts/apexcharts.min.js')--}}"></script>-->
<script src="{{asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
<!--<script src="{{--asset('deskapp/vendors/scripts/dashboard3.js')--}}"></script>-->

<!--
        <script src="{{asset('deskapp/vendors/scripts/core.js')}}"></script>
        <script src="{{asset('deskapp/vendors/scripts/script.min.js')}}"></script>
        <script src="{{asset('deskapp/vendors/scripts/process.js')}}"></script>
        <script src="{{asset('deskapp/vendors/scripts/layout-settings.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{asset('deskapp/src/plugins/datatables/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/buttons.flash.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/pdfmake.min.js')}}"></script>
        <script src="{{asset('deskapp/src/plugins/datatables/js/vfs_fonts.js')}}"></script>

        <script src="{{asset('deskapp/vendors/scripts/datatable-setting.js')}}"></script>
-->



@endsection