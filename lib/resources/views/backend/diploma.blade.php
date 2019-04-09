@extends('backend.master')
@section('title','Danh sách học vị')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh sách học vị</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm học vị
				</div>
				<div class="panel-body">
				@include('errors.note')
					<form method="post">
						<div class="form-group">
							<label>Tên Học vị:</label>
							<input required type="text" name="name" class="form-control" placeholder="Tên học vị...">
						</div>
						<div class="form-group">
							<label>Giá khám / 1 ca:</label>
							<input required type="text" name="price" class="form-control" placeholder="giá khám / 1 ca...">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên học vị..." value="Thêm mới">						
						</div>
						{{csrf_field()}}
					</form>	
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách học vị</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Học vị</th>
									<th>Giá khám/ 1ca</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
							@foreach($dipllist as $dipl)
								<tr>
									<td>{{$dipl->dipl_name}}</td>
									<td>{{$dipl->dipl_price}}</td>
									<td>
										<a href="{{asset('admin/diploma/edit/'.$dipl->dipl_id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{asset('admin/diploma/delete/'.$dipl->dipl_id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
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