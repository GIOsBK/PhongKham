@extends('backend.master')
@section('title','Sửa thông tin bác sĩ')
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
					<div class="panel-heading">Sửa thông tin bác sĩ</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-5">
									<div class="form-group" >
										<label>Họ tên</label>
										<input required type="text" name="full_name" class="form-control" value="{{$doctor->full_name}}"> 
									</div>
									<div class="form-group" >
										<label>Tuổi</label>
										<input required type="number" name="old" class="form-control" value="{{$doctor->old}}">
									</div>
									<div class="form-group" >
										<label>Hình ảnh</label>
										<input required id="img" type="file" name="avatar" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="{{asset('lib/storage/app/avatar/'.$doctor->avatar)}}">
									</div>
									<div class="form-group" >
										<label>Số Điện Thoại</label>
										<input required type="text" name="phone_number" class="form-control" value="{{$doctor->phone_number}}">
									</div>
									<div class="form-group" >
										<label>Học vị</label>
										<select required name="user_dipl" class="form-control">
										@foreach($dipllist as $dipl)
											<option value="{{$dipl->dipl_id}}" @if($doctor->user_dipl == $dipl->dipl_id) selected  @endif > {{$dipl->dipl_name}}</option>
										@endforeach
					                    </select>
									</div>
								</div>
								<div class="col-xs-5">
									
									<div class="form-group" >
										<label>Chuyên khoa</label>
										<select required name="user_spec" class="form-control">
										@foreach($speclist as $spec)
											<option value="{{$spec->spec_id}}" @if($doctor->user_spec == $spec->sepc_id) selected  @endif>{{$spec->spec_name}}</option>
										@endforeach
					                    </select>
									</div>
									<div class="form-group" >
										<label>Email</label>
										<input required type="text" name="email" class="form-control" value="{{$doctor->email}}">
									</div>
									<div class="form-group" >
										<label>Mật khẩu</label>
										<input required type="text" name="password" class="form-control" value="{{$doctor->password}}">
									</div>
									<div class="form-group" >
										<label>Thông tin chi tiết</label>
										<textarea required name="detail" class="form-control ckeditor">{{$doctor->user_detail}}</textarea>
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
									<input type="submit" name="submit" class="form-control btn btn-primary" placeholder="Tên chuyên khoa ..." value="Cập Nhật">	
									</div>
									<div class="form-group">
										<a href="{{asset('admin/doctor')}}" class="form-control btn btn-danger"> Hủy bỏ</a>
									</div>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop
