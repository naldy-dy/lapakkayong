<form action="{{$url}}" method="post" class="btn-group"onclick="return confirm('yakin ingin menghapus data ini?')">
	@csrf
	@method("delete")
	<button class="btn btn-success"><i class="fa fa-trash-o"></i></button>
</form>