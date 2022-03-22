<x-trangchu title="Trang chủ">

    <section class="my-3" id="slides">
        {{-- <div class="container shadow rounded"> --}}
            <div class="row">
                <x-slides />
            </div>
        {{-- </div> --}}
    </section>

    <div class="row">
        <h5 class="text-center badge bg-secondary mt-1">Product</h5>
        {{-- Form tìm kiếm --}}
        <form action="" method="">
            <div class="row">
                <div class="col-md-4">
                    <x-input name='from' label='Giá (từ)' />
                </div>
                <div class="col-md-4">
                    <x-input name='to' label='Giá (đến)' />
                </div>
                <div class="col-md-4">
                    <x-select-danh-muc name='id_danhmuc' label='Danh mục' />
                </div>
                <div class="col-md">
                    <button class="btn btn-outline-dark my-3" type="submit">Tìm kiếm</button>
                </div>
            </div>
        </form>
        {{-- End form tìm kiếm --}}
        <h5 class="text-danger">SẢN PHẨM MỚI NHẤT</h5>
        @foreach ($sanpham as $sp)
            <div id="cards" class="col-md-4 mt-3">
                <div class="card">
                    <span id="category" class="badge bg-danger">{{ $sp->danh_mucs->tendanhmuc }}</span>
                    <a href="#" onclick="{return alert('Ko co gi :D')}">
                        <img src="/storage/{{ $sp->hinhanh }}" class="card-img-top" height="300" alt="Product">
                    </a>
                    <div class="card-body text-center">
                        <p class="card-title">{{ $sp->tensanpham }}</p>
                        <p class="card-text text-danger fs-5 fw-bold">
                            @if (number_format($sp->gia) == 1)
                                Free
                            @else
                                {{ number_format($sp->gia) }} VNĐ
                            @endif
                        </p>
                        {{-- <p class="card-text">{{ $sp->mota }}</p> --}}
                        <a href="{{ route('xemchitiet', ['id' => $sp->id]) }}" class="btn btn-outline-dark">Xem
                            chi
                            tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-trangchu>
