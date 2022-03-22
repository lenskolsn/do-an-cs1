<x-admin title="Danh sách nhân viên">
    <div class="col-md-8 m-auto">
        <table class="table table-light table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên nhân viên</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if ($item->is_admin == 1)
                                <span class="badge bg-success">Yes</span>
                            @else
                                <span class="badge bg-danger">No</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->is_admin != 1) {{--Nếu không phải admin thì có thể xóa--}}
                                <a href="" class="btn btn-warning"><i class="fas fa-edit text-light"></i></a>
                                <a href="{{ route('xoanhanvien', ['id' => $item->id]) }}" class="btn btn-danger"><i
                                        class="fas fa-trash"></i></a>
                            @else {{--Admin không được xóa--}}
                                <a href="" class="btn btn-warning"><i class="fas fa-edit text-light"></i></a>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin>
