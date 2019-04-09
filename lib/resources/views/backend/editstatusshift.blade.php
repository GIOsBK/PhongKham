@extends('backend.master')
@section('title','Sửa trang thái ca làm việc')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách trạng thái ca làm việc</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Sửa trạng thái
				</div>
				<div class="panel-body">
				@include('errors.note')
					<form method="post">
						<div class="form-group">
							<label> Tên trạng thái:</label>
							<input required type="text" name="name" class="form-control" placeholder="Tên trạng thái..." value="{{$stat->stat_name}}">
						</div>
						<div class="form-group">
							<label> Mô tả trạng thái:</label>
							<input required type="text" name="description" class="form-control" placeholder="Mô tả..." value="{{$stat->stat_description}}">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên chuyên khoa ..." value="Sửa">	
						</div>
						<div class="form-group">
							<a href="{{asset('admin/statusshift')}}" class="form-control btn btn-danger"> Hủy bỏ</a>
						</div>
						{{csrf_field()}}
					</form>			
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@stop