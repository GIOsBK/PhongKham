@extends('backend.master')
@section('title','Danh sách trạng thái ca làm việc')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách trạng thái ca làm việc</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-4 col-lg-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm trạng thái ca làm việc
				</div>
				<div class="panel-body">
				@include('errors.note')
					<form method="post">
						<div class="form-group">
							<label> Tên trạng thái:</label>
							<input required type="text" name="name" class="form-control" placeholder="Tên trạng thái...">
						</div>
						<div class="form-group">
							<label> Mô tả trạng thái</label>
							<input required type="text" name="description" class="form-control" placeholder="Mô tả...">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên học vị..." value="Thêm mới">						
						</div>
						{{csrf_field()}}
					</form>	
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-8 col-lg-8">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách trạng thái</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th style="width:25%">Trạng thái</th>
									<th>Mô tả</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
							@foreach($statlist as $stat)
								<tr>
									<td>{{$stat->stat_name}}</td>
									<td>{{$stat->stat_description}}</td>
									<td>
										<a href="{{asset('admin/statusshift/edit/'.$stat->stat_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{asset('admin/statusshift/delete/'.$stat->stat_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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