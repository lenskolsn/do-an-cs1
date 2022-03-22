<x-admin title="Danh sách sản phẩm">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <form class="d-flex" method="get">
                <input placeholder="Tìm kiếm" type="text" name="key" class="form-control">
                <button type="submit" class="btn btn-dark">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <div>{{ $sanpham->links() }}</div>
        </div>
    </div>
    <div class="col-md-12 py-1 mt-3">
        <table class="table table-light table-striped table-bordered table-hover">
            <thead>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($sanpham as $sp)
                    <tr>
                        <td>{{ $sp->id }}</td>
                        <td class="w-25">{{ $sp->tensanpham }}</td>
                        <td style="width: 100px;">
                            <img class="rounded shadow-sm" src="/storage/{{ $sp->hinhanh }}" width="100" height="100"
                                alt="">
                        </td>
                        <td>{{ $sp->danh_mucs->tendanhmuc ?? '' }}</td>
                        <td>{{ number_format($sp->gia) }}</td>
                        <td>{{ $sp->mota }}</td>
                        <td>
                            <a href="{{ route('chitietsp', $sp->id) }}" class="btn btn-info text-light"><i
                                    class="fas fa-eye"></i></a>
                            <a href="{{ route('suasp', $sp->id) }}" class="btn btn-warning text-light"><i
                                    class="fas fa-pen"></i></a>
                            <a onclick="{return confirm('Bạn có muốn xóa không?')}"
                                href="{{ route('xoasp', $sp->id) }}" class="btn btn-danger"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <div class="card-footer">
            
        </div> --}}
    </div>
</x-admin>
