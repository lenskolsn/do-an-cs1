<x-admin title="Sửa danh mục">
    <div class="col-md-6">
        <form action="{{ route('luudm', $danhmuc->id) }}" method="post">
            @csrf
            <x-input value='{{ $danhmuc->tendanhmuc }}' name='tendanhmuc' label='Tên danh mục' />
            <div class="mt-3">
                <input checked='check' type='radio' name='trangthai' value='0' />Private
                <input type='radio' name='trangthai' value='1' />Public
            </div>
            <button class="btn btn-success text-light mt-3">Cập nhật dữ liệu</button>
        </form>
        <a class="btn btn-outline-info mt-3" href="{{ route('danhmuc') }}">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
</x-admin>
