@extends('backend.master')
@section('title','Danh sách phân ca làm việc')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách phân ca</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm phân ca mới
				</div>
				<div class="panel-body">
				@include('errors.note')
					<!-- <form method="post">
						<div class="form-group">
							<label>Tên Học vị:</label>
							<input required type="text" name="name" class="form-control" placeholder="Tên học vị...">
						</div>
						<div class="form-group">
							<label>Giá khám / 1 ca:</label>
							<input type="text" name="price" class="form-control" placeholder="giá khám / 1 ca...">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên học vị..." value="Thêm mới">						
						</div>
						{{csrf_field()}}
					</form>	 -->
					<form method="post" class="appointment-form ftco-animate">
						<div class="d-md-flex">
							<div class="form-group">
								<label>Tên ca:</label>
								<input required type="text" name="name" class="form-control" placeholder="Tên ca làm việc">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="input-wrap form-group">
								<label>Thời gian bắt đầu:</label>
								<input required type="text" name="timeStart" class="form-control appointment_time" placeholder=" Thời gian bắt đầu ca">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="input-wrap form-group">
								<label>Thời gian kết thúc:</label>
								<input required type="text" name="timeFinish" class="form-control appointment_time" placeholder=" Thời gian kết thúc ca">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<label>Hệ số:</label>
								<input required type="text" name="factor" class="form-control" placeholder="Hệ số tiền">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<label>Mô tả:</label>
								<input name="description" id="" cols="30" rows="2" class="form-control" placeholder="Mô tả">
							</div>
							<div class="form-group ml-md-4">
								<input type="submit" name="submit" value="Thêm ca mới" class="btn btn-secondary py-3 px-4 form-control btn-primary">
							</div>
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-8 col-lg-8">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách ca</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th style="width:15%">Tên ca</th>
									<th style="width:10%">Giờ bắt đầu</th>
									<th style="width:10%">Giờ kết thúc</th>
									<th style="width:10%">Hệ số</th>
									<th>Mô tả</th>
									<th style="width:25%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
							@foreach($assilist as $assi)
								<tr>
									<td>{{$assi->assi_name}}</td>
									<td>{{$assi->assi_timeStart}}</td>
									<td>{{$assi->assi_timeFinish}}</td>
									<td>{{$assi->assi_factor}}</td>
									<td>{{$assi->assi_description}}</td>
									<td>
										<a href="{{asset('admin/assignedshifts/edit/'.$assi->assi_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{asset('admin/assignedshifts/delete/'.$assi->assi_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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