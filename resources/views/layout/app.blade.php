<!DOCTYPE html>
<html language="{{ config('app.locale')}}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>{{ config('app.name', 'AceDepot Staffing')}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Victor Awotidebe">
    
  <!--Imported code for Bootstrap-->
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
	<!--End of Imported code for Bootstrap-->
    
	<!-- Styles -->
	<!--Extra link-->
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}" />

	<link rel="stylesheet" type="text/css" href="{{asset('css/css/vendor.bundle.css')}}" />
	{{-- <link rel="stylesheet" type="text/css" href="{{asset('css/css/style.css')}}" /> --}}
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
			
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}" />
	<link rel="stylesheet" href="{{asset('css/icons.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
	<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/colors/colors.css')}}" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<link rel="stylesheet" href="assets/plugins/css/plugins.css">      
  <link href="assets/css/styles.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" id="jssDefault" href="assets/css/colors/green-style.css">
	<!--Dynamic StyleSheets added from a view would be pasted here-->
	@yield('styles')
			
			<!--Extra link-->
    
	<script language="javascript">
		document.onmousedown=disableclick;
		status="Right Click Disabled";
		function disableclick(e)
		{
			if(event.img==1)
			{
			alert(status);
			return false;
			}
		}
	</script>
</head>
<body>

	<div class="Loader"></div>

	<div class="wrapper">
		@include('inc.nav')
		<div class="clearfix"></div>
		@yield('content')
		<div class="clearfix"></div>
		@include('inc.footer')
		<div class="clearfix"></div>
		@include('inc.popups')

		@include('inc.scripts')

		@yield('scripts')
	</div>
</body>
</html>