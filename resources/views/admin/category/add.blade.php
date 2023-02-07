@extends('admin.home')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Tên danh mục <span class="icon-required">*</span></label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" placeholder="Vui lòng điền tên danh mục">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Ảnh danh mục</label>
            <div class="col-sm-12 col-md-10">
                <input type="file" class="form-control-file form-control height-auto" id="upload">
                <div id="image_show">
                    abc
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Hiển thị danh mục</label>
            <div class="custom-control custom-switch pl-5 pt-2">
                <input type="checkbox" checked class="custom-control-input" id="categoryStatus">
                <label style="font-size: 30px;" class="custom-control-label" for="categoryStatus"></label>
              </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Hoàn thành</button>
        </div>
    </form>
@endsection
