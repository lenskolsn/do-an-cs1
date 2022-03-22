<x-admin title="Sửa sản phẩm">
    <div class="col-md-6">
        <form action="{{route('luusp',$sanpham->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input value='{{$sanpham->tensanpham}}' name='tensanpham' label='Tên sản phẩm'/>
            <x-input type='file' name='hinhanh' label='Hình ảnh'/>
            <x-select-danh-muc name='id_danhmuc' label='Danh mục'/>
            <x-input value='{{$sanpham->gia}}' name='gia' label='Giá'/>
            <x-input value='{{$sanpham->mota}}' name='mota' label='Mô tả'/>
            <button class="btn btn-success text-light mt-3">Cập nhật dữ liệu</button>
        </form>
        <a class="btn btn-outline-info mt-3" href="{{route('danhsachsp')}}">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
</x-admin>