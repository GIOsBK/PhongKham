@extends('backend.master')
@section('title','Danh sách bác sĩ')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bác sĩ</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách bác sĩ</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/doctor/add')}}" class="btn btn-primary">Thêm bác sĩ mới</a>
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<!-- <th>ID</th> -->
											<th width="12%">Họ tên</th>
											<th width="10%">Hình ảnh</th>
											<!-- <th>Tuổi</th> -->
											<th>Học vị</th>
											<th>Chuyên khoa</th>
											<th>Email</th>
											<!-- <th width="10%">Mật khẩu</th> -->
											<!-- <th width="30%">Thông tin chi tiết</th> -->
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
									@foreach($doctorlist as $doctor)
										<tr>
											<td>{{$doctor->full_name}}</td>
											<td>
												<img width="200px" height="150px" src="{{asset('lib/storage/app/avatar/'.$doctor->avatar)}}" class="thumbnail" id="img_doct">
											</td>
											<!-- <td>{{$doctor->old}}</td> -->
											<td>{{$doctor->dipl_name}}</td>
											<td>{{$doctor->spec_name}}</td>
											<td>{{$doctor->email}}</td>
											<td>
												<a href="{{asset('admin/doctor/edit/'.$doctor->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Xem chi Tiết</a>
												<a href="{{asset('admin/doctor/delete/'.$doctor->id)}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>							
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
<!-- <script type="text/javascript">
	var editor = CKEDITOR.replace('décription',{
		language:'vi',
		filebrowserImageBrowseUrl:'../../ckfinder/ckfinder.html?Type=Images',
		filebrowserFlashBrowseUrl:'../../ckfinder/ckfinder.html?Type=Flash',
		filebrowserImageUpBrowseUrl:'../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
		filebrowserFlashUpBrowseUrl:'../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
	});
</script> -->