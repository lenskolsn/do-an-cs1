<x-admin title="Sửa banner">
    <div class="col-md-6">
        <form action="{{route('luubanner',$banner->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input value='{{$banner->ten}}' name='ten' label='Tên banner'/>
            <x-input type='file' name='hinhanh' label='Hình ảnh'/>
            <x-input value='{{$banner->mota}}' name='mota' label='Mô tả'/>
            <button class="btn btn-success text-light mt-3">Cập nhật dữ liệu</button>
        </form>
    </div>
</x-admin>   