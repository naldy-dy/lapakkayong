@extends('admin.template.base')

@section('content')
	<!-- konten disini -->
	<div class="">
		<div class="col-md-8 mx-auto" style="margin:auto;">
			<div class="card card-default">
				<div class="bg-info card-header">
					Ganti Password
				</div>
				<div class="card-body">
					<form action="{{url('setting-admin')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="control-label">Currrent Password</label>
							<input type="password" class="form-control" name="current">
						</div>
						<div class="form-group">
							<label class="control-label">New Password</label>
							<input type="password" class="form-control" name="new">
						</div>
						<div class="form-group">
							<label class="control-label">Confirm New Password</label>
							<input type="password" class="form-control" name="confirm">
						</div>
						<div class="form-group">
							<button class="btn btn-info"> <i class="fa fa-save"></i> Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!-- end contten -->
@endsection