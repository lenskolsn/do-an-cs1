<x-admin title="Danh sách khách hàng">
    <div class="col-md">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Giới tính</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($khachhang as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->tenkhachhang}}</td>
                      <td>{{$item->diachi}}</td>
                      <td>{{$item->sdt}}</td>
                      <td>{{$item->gioitinh}}</td>
                      <td>
                        <a href="" class="btn btn-info text-light"><i class="fas fa-eye"></i></a>
                        <a href="" class="btn btn-warning text-light"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-admin>
