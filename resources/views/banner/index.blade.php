<x-admin title="Danh sách banner">
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-md-12 mt-3">
        <table class="table table-light table-bordered table-striped">
            <thead>
                <th>#</th>
                <th>Tên banner</th>
                <th>Hình ảnh</th>
                <th>Mô tả</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($banner as $bn)
                    <tr>
                        <td>{{ $bn->id }}</td>
                        <td>{{ $bn->ten }}</td>
                        <td>
                            <img src="/storage/{{ $bn->hinhanh }}" width="100" height="100" alt="">
                        </td>
                        <td>{{ $bn->mota }}</td>
                        <td>
                            <a href="{{ route('suabanner', $bn->id) }}" class="btn btn-warning text-light"><i
                                    class="fas fa-pen"></i></a>
                            <a onclick="{return confirm('Bạn có muốn xóa không?')}"
                                href="{{ route('xoabanner', $bn->id) }}" class="btn btn-danger"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $banner->links() }}
    </div>
</x-admin>
