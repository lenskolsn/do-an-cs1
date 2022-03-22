<x-admin title="Danh mục">
    {{-- @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}
    <div class="row d-flex align-items-center">
        <div class="col-md-6">
            <form action="{{ route('luudm') }}" method="post">
                @csrf
                <x-input name='tendanhmuc' label='Tên danh mục' />
                <div class="mt-3">
                    <input checked='check' type='radio' name='trangthai' value='0' />Private
                    <input type='radio' name='trangthai' value='1' />Public
                </div>
                <button class="btn btn-success text-light mt-3">Thêm dữ liệu</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div>{{ $danhmuc->links() }}</div>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <table class="table table-light table-bordered table-hover table-striped">
            <thead>
                <th>#</th>
                <th>Tên danh mục</th>
                <th>Tổng sản phẩm</th>
                <th>Trạng thái</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($danhmuc as $dm)
                    <tr>
                        <td>{{ $dm->id }}</td>
                        <td>{{ $dm->tendanhmuc }}</td>
                        <td>{{ $dm->san_phams->count() }}</td>
                        <td>
                            @if ($dm->trangthai == 0)
                                <span class="badge bg-danger">Private</span>
                            @else
                                <span class="badge bg-success">Public</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('suadm', $dm->id) }}" class="btn btn-warning text-light"><i
                                    class="fas fa-pen"></i></a>
                            <a onclick="{return confirm('Bạn có muốn xóa không?')}"
                                href="{{ route('xoadm', $dm->id) }}" class="btn btn-danger"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin>
