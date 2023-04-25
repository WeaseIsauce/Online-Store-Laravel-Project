@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')
  
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
  
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb"> <a href="index.html"> <i class="icon-dashboard"></i> <span class="label label-important">20</span> My Dashboard </a> </li>
                <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
                <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
                <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
                <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
                <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
                <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
                <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
                <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
                <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>

            </ul>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/excanvas.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.min.js')}}"></script>
    <script src="{{asset('js/jquery.flot.resize.min.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.dashboard.js')}}"></script>
    <script src="{{asset('js/jquery.gritter.min.js')}}"></script>
    <script src="{{asset('js/matrix.interface.js')}}"></script>
    <script src="{{asset('js/matrix.chat.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.wizard.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.form_validation.js')}}"></script>
    <script type="text/javascript">
        
        function goPage (newURL) {

            
            if (newURL != "") {

               
                if (newURL == "-" ) {
                    resetMenu();
                }
               
                else {
                    document.location.href = newURL;
                }
            }
        }

        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
@endsection