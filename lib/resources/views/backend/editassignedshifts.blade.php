@extends('backend.master')
@section('title','Sửa phân ca làm việc')
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
					Sửa phân ca
				</div>
				<div class="panel-body">
					@include('errors.note')
					<form method="post" class="appointment-form ftco-animate">
						<div class="d-md-flex">
							<div class="form-group">
								<label>Tên ca:</label>
								<input type="text" name="name" class="form-control" placeholder="Tên ca làm việc" value="{{$assi->assi_name}}">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="input-wrap form-group">
								<label>Thời gian bắt đầu:</label>
								<input type="text" name="timeStart" class="form-control appointment_time" placeholder=" Thời gian bắt đầu ca" value="{{$assi->assi_timeStart}}">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="input-wrap form-group">
								<label>Thời gian kết thúc:</label>
								<input type="text" name="timeFinish" class="form-control appointment_time" placeholder=" Thời gian kết thúc ca" value="{{$assi->assi_timeFinish}}">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<label>Hệ số:</label>
								<input type="text" name="factor" class="form-control" placeholder="Hệ số tiền" value="{{$assi->assi_factor}}">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<label>Mô tả:</label>
								<input name="description" id="" cols="30" rows="2" class="form-control" placeholder="Mô tả" value="{{$assi->assi_description}}"></input>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên chuyên khoa ..." value="Sửa">	
						</div>
						<div class="form-group">
							<a href="{{asset('admin/assignedshifts')}}" class="form-control btn btn-danger"> Hủy bỏ</a>
						</div>
						{{csrf_field()}}
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop