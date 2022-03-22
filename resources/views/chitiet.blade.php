<x-trangchu title="Chi tiết sản phẩm">
    <h5 class="text-center badge bg-secondary mt-1 w-100">Chi tiết sản phẩm</h5>
    <div class="row py-3">
        <div class="col-md-5">
            <div class="image">
                <img src="/storage/{{ $sanpham->hinhanh }}" width="400" height="400" alt="">
            </div>
        </div>
        <div class="col-md-7">
            <h3 name='tensanpham' class="tensanpham">{{ $sanpham->tensanpham }}</h3>
            <p class="gia h3" style="color: red;">{{ number_format($sanpham->gia) }} VNĐ</p>
            <p>* Vui lòng chọn SIZE & MÀU SẮC</p>
            <form method="" action="">
                @csrf
                <div class="form-group">
                    <p>Màu</p>
                    <select class="form-select" name="mau" id="">
                        <option value="">Chọn một tùy chọn</option>
                        <option value="1">Trắng</option>
                        <option value="2">Đen</option>
                    </select>
                </div>
                <div class="form-group">
                    <p>Size</p>
                    <select class="form-select" name="size" id="">
                        <option value="">Chọn một tùy chọn</option>
                        <option value="1">M</option>
                        <option value="2">L</option>
                        <option value="3">XL</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <label for="soluong" class="form-label">Số lượng:</label>
                    <input name="soluong" id="soluong" type="number" min="1" max="100" value="1">
                    <hr>
                    <button class="btn btn-danger">Thêm vào giỏ</button>
                    <button class="btn btn-danger">Mua ngay</button>
                </div>
            </form>
        </div>
    </div>
</x-trangchu>
