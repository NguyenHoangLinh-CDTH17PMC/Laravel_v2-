@extends('home')
@section('maincontent')
<div class="card-body">
    <h4 class="mb-3 header-title"><b style="font-size: 30px;font-family: Tahoma">CẬP NHẬT LĨNH VỰC {{ $id}}</b></h4>

    <form action="{{route('linhvuc.capnhat',['id'=>$id]) }}" method="POST">
    	@csrf
        <div class="form-group">
            <label for="exampleInputEmail1" style="font-size: 20px;font-family: Tahoma">Tên lĩnh vực</label>
            <input type="text" style="width: 30%; "  class="form-control" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Cập nhật lĩnh vực">
        </div>
        <button type="submit" class="btn btn-primary waves-effect waves-light">Cập nhật</button>
    </form>

</div>@endsection