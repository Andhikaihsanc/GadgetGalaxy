@extends('beforelogin.template')
@section('title', 'Product Detail - Gadget Galaxy')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="{{ asset('assets/css/profilestyle.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dropdown.css') }}">
    <script src="https://kit.fontawesome.com/df75941921.js" crossorigin="anonymous"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/profile.js') }}"></script>
    <script src="{{ asset('assets\vendor\jquery\jquery.min.js') }}"></script>

@section('content')

    @foreach ($produk as $item)
        @foreach ($user as $u)
            <div class="container" id="profile-container">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title mb-4">
                                    <div class="d-flex justify-content-start">
                                        <div class="image-container">
                                            <img src="{{ url('assets/images/barang/' . $item->gambar) }}" id="imgProfile"
                                                style="width: 150px; height: 150px" class="img-thumbnail" />
                                        </div>
                                        <div class="userData ml-3">
                                            <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a
                                                    href="javascript:void(0);">{{ $item->nama }}</a></h2>
                                            <h6 class="d-block"><strong>Rp {{ number_format($item->harga) }}</strong>
                                            </h6>
                                            <br>
                                            <h5 class="d-block">Contacts:</h5>
                                            <h6 class="d-block">{{ $u->noHP }}</h6>
                                            <h6 class="d-block">{{ $u->email }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="basicInfo-tab" data-toggle="tab"
                                                    href="#basicInfo" role="tab" aria-controls="basicInfo"
                                                    aria-selected="true">Description</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content ml-1" id="myTabContent">
                                            <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                                aria-labelledby="basicInfo-tab">
                                                <div class="row">
                                                    <div class="col-md-12 col-6">
                                                        {{ $item->deskripsi }}
                                                        <br>
                                                        <hr>
                                                        Address: {{ $item->alamat }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endforeach
@endsection
