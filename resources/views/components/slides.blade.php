{{-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators" style="margin-bottom: -5px;">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <div class="row d-flex m-auto" style="width: 1000px; align-items: center">
                <div class="col-lg-6 col-md-3">
                    <h5>LSN-CLOTHES</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                <div class="col-lg-6 col-md-8">
                    <img class="w-100" height='450'
                        src="https://png.pngtree.com/template/20200601/ourlarge/pngtree-fashion-sale-banner-design-concept-image_377637.jpg"
                        alt="">
                </div>
            </div>
        </div>
        @foreach ($banner as $bn)
            <div class="carousel-item" data-bs-interval="5000">
                <div class="row d-flex  -dark m-auto" style="width: 1000px; align-items: center">
                    <div class="col-lg-6 col-md-3">
                        <h5>{{ $bn->ten }}</h5>
                        <p>{{ $bn->mota }}</p>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <img class="w-100" height='450' src="/storage/{{ $bn->hinhanh }}" alt="">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}
<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://scontent.fvca1-3.fna.fbcdn.net/v/t1.15752-9/275664923_682159692975832_27705615719553204_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_ohc=EaaggSOK2LEAX9wqcX5&_nc_ht=scontent.fvca1-3.fna&oh=03_AVKTkvktU3XpXzZ7aj0IJLL4bqO6V67qeHCcepr-7OBf2g&oe=625A0D99"
                class="d-block w-100" height="470" alt="...">
            <div class="carousel-caption d-none d-md-block fs-5">
                <h5>NamLee Fashion</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="https://scontent.fvca1-3.fna.fbcdn.net/v/t1.15752-9/275664923_682159692975832_27705615719553204_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_ohc=EaaggSOK2LEAX9wqcX5&_nc_ht=scontent.fvca1-3.fna&oh=03_AVKTkvktU3XpXzZ7aj0IJLL4bqO6V67qeHCcepr-7OBf2g&oe=625A0D99"
                class="d-block w-100" height="470" alt="...">
            <div class="carousel-caption d-none d-md-block fs-5">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://scontent.fvca1-3.fna.fbcdn.net/v/t1.15752-9/275664923_682159692975832_27705615719553204_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=ae9488&_nc_ohc=EaaggSOK2LEAX9wqcX5&_nc_ht=scontent.fvca1-3.fna&oh=03_AVKTkvktU3XpXzZ7aj0IJLL4bqO6V67qeHCcepr-7OBf2g&oe=625A0D99"
                class="d-block w-100" height="470" alt="...">
            <div class="carousel-caption d-none d-md-block fs-5">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
