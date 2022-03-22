<x-admin title="Chi tiết sản phẩm">
    <div class="col-md-8 m-auto">
        <table class="table table-light table-bordered table-striped">
            <tbody>
                <tr>
                    <div class="text-center py-2">
                        <img class="rounded shadow-sm" src="/storage/{{ $sanpham->hinhanh }}" width="250" height="250" alt="">
                    </div>
                </tr>
                <tr>
                    <th>Tên sản phẩm:</th>
                    <td>{{ $sanpham->tensanpham }}</td>
                </tr>
                <tr>
                    <th>Giá:</th>
                    <td>{{ $sanpham->gia }}</td>
                </tr>
                <tr>
                    <th>Danh mục:</th>
                    <td>{{ $sanpham->danh_mucs->tendanhmuc ?? '' }}</td>
                </tr>
                <tr>
                    <th>Được thêm vào lúc:</th>
                    <td>{{ $sanpham->created_at->format('d/m/Y H:i:s')}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <a class="btn btn-outline-info mt-3" href="{{ route('danhsachsp') }}">
        <i class="fas fa-arrow-left"></i>
    </a>
</x-admin>
