<x-admin title="Thêm sản phẩm">
    <div class="col-md-6">
        <form action="{{ route('luusp') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input name='tensanpham' label='Tên sản phẩm' />
            <x-input name='gia' label='Giá' />
            <x-input name='mota' label='Mô tả' />
            <x-input type='file' name='hinhanh' label='Hình ảnh' />
            <x-select-danh-muc name='id_danhmuc' label='Danh mục' />
            <button class="btn btn-success text-light mt-3">Thêm dữ liệu</button>
        </form>
        <a class="btn btn-outline-info mt-3" href="{{ route('danhsachsp') }}">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
</x-admin>
