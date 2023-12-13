@extends('afterlogin.template')
@section('title', 'Product - Gadget Galaxy')
@section('content')

    <div class="search-bar-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <form method="GET" action="/search">
                        <div class="input-group">
                            <input type="search" name="search" id="searchbar" class="form-control"
                                placeholder="Search Product..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-link"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Products</h2>
                    </div>
                </div>

                @if (isset($dataCari))
                    <?php $jumlah = 0; ?>
                    @foreach ($dataCari as $item)
                        <?php $jumlah += 1; ?>
                    @endforeach
                    @if ($jumlah > 0)
                        @foreach ($dataCari as $item)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <a href="{{ route('detail', ['id' => $item->id]) }}"><img
                                            src="{{ url('assets/images/barang/' . $item->gambar) }}" alt=""></a>
                                    <div class="down-content">
                                        <a href="{{ route('detail', ['id' => $item->id]) }}">
                                            <h4>{{ Str::limit($item->nama, 20) }}</h4>
                                        </a>
                                        <strong>Rp. {{ number_format($item->harga) }}</strong>
                                        <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                        <div class="col-md-4">
                            <h5>Product not found</h5>
                        </div>

                    @endif
                @else
                    @foreach ($produk as $item)
                        <div class="col-md-4">
                            <div class="product-item">
                                <a href="{{ route('detail', ['id' => $item->id]) }}"><img
                                        src="{{ url('assets/images/barang/' . $item->gambar) }}" alt=""></a>
                                <div class="down-content">
                                    <a href="{{ route('detail', ['id' => $item->id]) }}">
                                        <h4>{{ Str::limit($item->nama, 20) }}</h4>
                                    </a>
                                    <br>
                                    <strong>Rp. {{ number_format($item->harga) }}</strong>
                                    <p>{{ Str::limit($item->deskripsi, 100) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @if (isset($produk))
                {{ $produk->links() }}
            @endif
        </div>
    </div>


    @if (session('message'))
        <div class="alert alert-danger" role="alert" style="padding: 5px; font-size: 400px;">
            {{ session('message') }}
        </div>
    @endif
@endsection
