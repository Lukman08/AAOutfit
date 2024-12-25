@extends('guest.layout')

@section('content')
    <!-- Shop Product Start -->
    <div class="container-fluid pt-5">
        <div class="col-12 pb-1">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search by name">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <div class="dropdown ml-4">
                    <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Sort by
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="#">Latest</a>
                        <a class="dropdown-item" href="#">Popularity</a>
                        <a class="dropdown-item" href="#">Best Rating</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row px-xl-5 pb-3">
            @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4 shadow-sm">
                        
                        <!-- Product Image -->
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid custom-img" src="{{ asset('storage/' . $product->gambar) }}" alt="{{ $product->nama }}">
                        </div>
        
                        <!-- Product Info -->
                        <div class="card-body text-center p-0 pt-3 pb-2">
                            <h6 class="text-truncate mb-2">{{ $product->nama }}</h6>
                            <h6 class="mb-0 text-primary">Rp {{ number_format((float) $product->harga, 0, ',', '.') }}</h6>
                        </div>
        
                        <!-- Dropdown in Footer -->
                        <div class="card-footer bg-light border p-2">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-custom dropdown-toggle w-100" type="button" id="dropdownMenuButton{{ $product->id }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Beli Disini
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $product->id }}">
                                    @if($product->tiktok)
                                        <a class="dropdown-item" href="{{ $product->tiktok }}" target="_blank">TikTok Shop</a>
                                    @endif
                                    @if($product->shopee)
                                        <a class="dropdown-item" href="{{ $product->shopee }}" target="_blank">Shopee</a>
                                    @endif
                                </div>
                            </div>
                        </div>
        
                    </div>
                </div>
            @endforeach
        </div>
                
        

        <div class="col-12 pb-1">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center mb-3">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Shop Product End -->
@endsection
