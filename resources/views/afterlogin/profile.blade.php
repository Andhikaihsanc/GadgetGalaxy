@extends('afterlogin.template')
@section('title', 'Profile - Gadget Galaxy')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@section('content')

    <link rel="stylesheet" href="assets/css/profilestyle.css">
    <script src="assets\js\profile.js"></script>
    <script src="assets\vendor\jquery\jquery.min.js"></script>

    <div class="container" id="profile-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <form action="{{ route('profile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="image-container">
                                        @if (Auth::user()->foto == '')
                                            <img src="{{ url('assets/images/user/user-kosong.png') }}" id="imgProfile"
                                                style="width: 150px; height: 150px" class="img-thumbnail" />
                                        @else
                                            <img src="{{ url('assets/images/user/' . Auth::user()->foto) }}" id="imgProfile"
                                                style="width: 150px; height: 150px" class="img-thumbnail" />
                                        @endif

                                        <div class="middle">
                                            <input type="file" style="display: none;" id="profilePicture" name="foto" />
                                            <input type="button" class="btn btn-secondary" id="btnChangePicture"
                                                value="Change" />


                                        </div>
                                    </div>
                                    <input type="submit" class="" id="" value="Submit" />
                                </form>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">
                                        {{ Auth::user()->name }}</h2>
                                    <h6 class="d-block">{{ Auth::user()->jumlah }} Barang</h6>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                        value="Discard Changes" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo"
                                            role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab"
                                            href="#connectedServices" role="tab" aria-controls="connectedServices"
                                            aria-selected="false">Posted Items</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                        aria-labelledby="basicInfo-tab">

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ Auth::user()->name }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">E-Mail</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ Auth::user()->email }}
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Username</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ Auth::user()->username }}
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Phone Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{ Auth::user()->noHP }}
                                            </div>
                                        </div>
                                        <hr />
                                    </div>

                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel"
                                        aria-labelledby="ConnectedServices-tab">
                                        <div class="row">
                                            @if (isset($produk))
                                                @foreach ($produk as $item)
                                                    <div class="col-md-4">
                                                        <div class="product-item">
                                                            <a href="{{ route('detail', ['id' => $item->id]) }}"><img
                                                                    src="{{ url('assets/images/barang/' . $item->gambar) }}"
                                                                    alt=""></a>
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
                                            @endif
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
@endsection
