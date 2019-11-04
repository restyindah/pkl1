<!DOCTYPE html>
<html lang="en">
<head>
<title>RestyIndah</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{  asset('assets/backend/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{  asset('assets/backend/css/bootstrap-responsive.min.css')}}" />
<link rel="stylesheet" href="{{  asset('assets/backend/css/fullcalendar.css')}}" />
<link rel="stylesheet" href="{{  asset('assets/backend/css/matrix-style.css')}}" />
<link rel="stylesheet" href="{{  asset('assets/backend/css/matrix-media.css')}}" />
<link href="font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{  asset('assets/backend/css/jquery.gritter.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('DataTables/datatables.min.css')}}"/>

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">RestyIndah</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
   
   
  
  
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="/admin/distributor"><i class="icon icon-signal"></i> <span>Distributor</span></a> </li>
    <li> <a href="/admin/pasok"><i class="icon icon-inbox"></i> <span>Pasok</span></a> </li>
    <li><a href="/admin/buku"><i class="icon icon-th"></i> <span>buku</span></a></li>
    <li><a href="/admin/penjualan"><i class="icon icon-fullscreen"></i> <span>penjualan</span></a></li>
    <li><a href="/admin/kasir"><i class="icon icon-th-list"></i>Kasir</span></a></li>
      
    </li>
   
    </li>
    
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div class="container-fluid">
    <div class="row-fluid">
      @yield('content')
    </div>
  </div>
</div>
<!--End-Action boxes-->    

<!--Chart-box-->    
  
<!--End-Chart-box--> 
   

<!--end-main-container-part-->

<!--Footer-part-->



<!--end-Footer-part-->

<script src="{{ asset('assets/backend/js/excanvas.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.ui.custom.js')}}"></script> 
<script src="{{ asset('assets/backend/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.flot.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.flot.resize.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.peity.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/fullcalendar.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.dashboard.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.gritter.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.interface.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.chat.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.validate.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.form_validation.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.wizard.js')}}"></script> 
<script src="{{ asset('assets/backend/js/jquery.uniform.js')}}"></script> 
<script src="{{ asset('assets/backend/js/select2.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.popover.js')}}"></script> 
<script src="{{ asset('DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js')}}"></script> 
<script src="{{ asset('assets/backend/js/matrix.tables.js')}}"></script> 
<script type="text/javascript" src="{{asset('DataTables/datatables.min.js')}}"></script>


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }
  </script>
   <script>
   $(document).ready(function() {
    $('#datatable').DataTable();
} );
   
   </script>
</script>
</body>
</html>
