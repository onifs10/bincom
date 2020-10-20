<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ URL::asset('table2/images/icons/favicon.ico')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/vendor/perfect-scrollbar/perfect-scrollbar.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('table2/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<x-table-head>
							@foreach($columns as $cell)
								<x-table-head-cell>{{$cell}}</x-table-head-cell>
							@endforeach
						</x-table-head>
						<tbody>
							
							@foreach($result as $row)
								<x-table-row>
									@foreach($row as $cell)
										<x-table-cell>{{$cell}}</x-table-cell>
									@endforeach
								</x-table-row>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="{{ URL::asset('table2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('table2/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ URL::asset('table2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('table2/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('table2/js/main.js')}}"></script>

</body>
</html>