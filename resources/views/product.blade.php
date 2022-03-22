<x-trangchu title="{{ $danhmuc->tendanhmuc }}">
    <div class="row">
        {{-- Hiển thị tên danh mục --}}
        <h5 class="text-center badge bg-secondary mt-1">Danh mục: {{ $danhmuc->tendanhmuc }}</h5>
        {{-- Hiển thị sản phẩm theo danh mục --}}
        @if ($danhmuc->san_phams->count() > 0)
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
                            <a href="{{ route('xemchitiet', ['id' => $sp->id]) }}" class="btn btn-outline-dark">Xem
                                chi
                                tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p class="text-danger text-center fs-5">Chưa có sản phẩm!!!</p>
        @endif
    </div>
</x-trangchu>
