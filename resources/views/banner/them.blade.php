<x-admin title="Thêm banner">
    <div class="col-md-6">
        <form action="{{route('luubanner')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input name='ten' label='Tên banner'/>
            <x-input type='file' name='hinhanh' label='Hình ảnh'/>
            <x-input name='mota' label='Mô tả'/>
            <button class="btn btn-success text-light mt-3">Thêm dữ liệu</button>
        </form>
    </div>
</x-admin>