<!DOCTYPE html>
<html>
<head>
<base href="{{asset('public/layout/backend')}}/">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- css2 -->

    <link rel="stylesheet" href="mstyle/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="mstyle/css/animate.css">
    
    <link rel="stylesheet" href="mstyle/css/owl.carousel.min.css">
    <link rel="stylesheet" href="mstyle/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="mstyle/css/magnific-popup.css">

    <link rel="stylesheet" href="mstyle/css/aos.css">

    <link rel="stylesheet" href="mstyle/css/ionicons.min.css">

    <link rel="stylesheet" href="mstyle/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="mstyle/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="mstyle/css/flaticon.css">
    <link rel="stylesheet" href="mstyle/css/icomoon.css">
    <!-- <link rel="stylesheet" href="mstyle/css/style.css"> -->


<!-- css2 -->

<title>@yield('title') | C2 Care</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{asset('admin/home')}}">C2 Care Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{asset('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="{{asset('admin/home')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>

			<li><a href="{{asset('admin/doctor')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Bác sĩ</a></li>
			<li role="presentation" class="divider"></li>

			<li><a href="{{asset('admin/specialist')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Chuyên khoa</a></li>
			<li role="presentation" class="divider"></li>

			<li><a href="{{asset('admin/diploma')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Học vị</a></li>
			<li role="presentation" class="divider"></li>

			<li><a href="{{asset('admin/statusshift')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Trạng thái ca làm việc</a></li>
			<li role="presentation" class="divider"></li>

			<li><a href="{{asset('admin/assignedshifts')}}"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Phân ca làm việc</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->

	<!-- main -->
	@yield('main')

<!--css2  -->

  <script src="mstyle/js/jquery.min.js"></script>
  <script src="mstyle/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="mstyle/js/popper.min.js"></script>
  <script src="mstyle/js/bootstrap.min.js"></script>
  <script src="mstyle/js/jquery.easing.1.3.js"></script>
  <script src="mstyle/js/jquery.waypoints.min.js"></script>
  <script src="mstyle/js/jquery.stellar.min.js"></script>
  <script src="mstyle/js/owl.carousel.min.js"></script>
  <script src="mstyle/js/jquery.magnific-popup.min.js"></script>
  <script src="mstyle/js/aos.js"></script>
  <script src="mstyle/js/jquery.animateNumber.min.js"></script>
  <script src="mstyle/js/bootstrap-datepicker.js"></script>
  <script src="mstyle/js/jquery.timepicker.min.js"></script>
  <script src="mstyle/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="mstyle/js/google-map.js"></script>
  <script src="mstyle/js/main.js"></script>

<!-- css2 -->





	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
	<script>
		$('#calendar').datepicker({
		});
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		});
		function changeImg(input){
		    //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
		    if(input.files && input.files[0]){
		        var reader = new FileReader();
		        //Sự kiện file đã được load vào website
		        reader.onload = function(e){
		            //Thay đổi đường dẫn ảnh
		            $('#avatar').attr('src',e.target.result);
		        }
		        reader.readAsDataURL(input.files[0]);
		    }
		}
		$(document).ready(function() {
		    $('#avatar').click(function(){
		        $('#img').click();
		    });
		});
	</script>		
</body>

</html>
