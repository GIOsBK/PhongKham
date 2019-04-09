@extends('backend.master')
@section('title','Sửa chuyên khoa')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách chuyên khoa</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Sửa chuyên khoa
				</div>
				<div class="panel-body">
				@include('errors.note')
					<form method="post">
						<div class="form-group">
							<label>Tên chuyên khoa:</label>
							<input required type="text" name="name" class="form-control" placeholder="Tên chuyên khoa..." value="{{$spec->spec_name}}">
						</div>
						<div class="form-group" >
							<label>Giới thiệu chuyên khoa</label>
							<textarea required name="detail" class="form-control ckeditor">{{$spec->spec_detail}}</textarea>
							<script type="text/javascript">
								var editor = CKEDITOR.replace('description',{
									language:'vi',
									filebrowserImageBrowseUrl:'../../editor/ckfinder/ckfinder.html?Type=Images',
									filebrowserFlashBrowseUrl:'../../editor/ckfinder/ckfinder.html?Type=Flash',
									filebrowserImageUpBrowseUrl:'../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
									filebrowserFlashUpBrowseUrl:'../../editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
								});
							</script>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên chuyên khoa ..." value="Sửa">	
						</div>
						<div class="form-group">
							<a href="{{asset('admin/specialist')}}" class="form-control btn btn-danger"> Hủy bỏ</a>
						</div>
						{{csrf_field()}}
					</form>			
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop