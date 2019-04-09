@extends('backend.master')
@section('title','Danh sách chuyên khoa')
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
					Thêm chuyên khoa
				</div>
				<div class="panel-body">
				@include('errors.note')
					<form method="post">
						<div class="form-group">
							<label>Tên chuyên khoa:</label>
							<input required type="text" name="name" class="form-control" placeholder="Tên chuyên khoa...">
						</div>
						<div class="form-group" >
							<label>Giới thiệu chuyên khoa</label>
							<textarea required name="detail" class="form-control ckeditor"></textarea>
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
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên chuyên khoa..." value="Thêm mới">						
						</div>
						{{csrf_field()}}
					</form>	
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách chuyên khoa</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Tên chuyên khoa</th>
									<th>Giới thiệu về chuyên khoa</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
							@foreach($speclistlist as $spec)
								<tr>
									<td>{{$spec->spec_name}}</td>
									<td>{{$spec->spec_detail}}</td>
									<td>
										<a href="{{asset('admin/specialist/edit/'.$spec->spec_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{asset('admin/specialist/delete/'.$spec->spec_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
									</td>
								</tr>
							@endforeach	
							</tbody>
						</table>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop