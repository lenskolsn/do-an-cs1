<x-admin title="Dashboard">
    <p class="text-primary display-5 text-center">Welcome! {{ Auth::user()->name }}</p>
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h5>Tổng sản phẩm</h5>
                    <p class="fs-5 fw-bold">{{ $sp }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <a href="{{route('danhsachsp')}}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner"> 
                    <h5>Danh mục</h5>
                    <p class="fs-5 fw-bold">{{ $dm }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-clipboard-list"></i>
                </div>
                <a href="{{route('danhmuc')}}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning text-light">
                <div class="inner">
                    <h5>Tài khoản</h5>
                    <p class="fs-5 fw-bold">{{ $tk }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <a href="{{route('danhsachnhanvien')}}" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger text-light">
                <div class="inner"> 
                    <h5>Đơn Hàng</h5>
                    <p class="fs-5 fw-bold">{{ $dh }} (Demo)</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <a href="" class="small-box-footer">Xem chi tiết <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</x-admin>