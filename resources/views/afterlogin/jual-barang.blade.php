@extends('afterlogin.template')
@section('title', 'Jual Barang - Gadget Galaxy')
@section('content')

    <body class="jualbarang-page">
        <div class="jualbarang-wrap">
            <div class="jualbarang-html">
                <form class="jualbarang-form" method="post" action="{{ route('jualBarang') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <h1>Jual Barang</h1>
                    <br>
                    <div class="jualbarang-form">
                        <div class="jual-htm">

                            <div class="group">
                                <label for="namabarang" class="label">NAMA BARANG</label>
                                <input id="namabarang" type="text" class="input" name="namabarang">
                                @error('namabarang')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="checkbox" class="label">JENIS BARANG</label>
                                <select name="jenisbarang" id="jenisbarang" class="input">
                                    <option class="input" value="komputer">Komputer</option>
                                    <option class="input" value="handphone">Handphone</option>
                                    <option class="input" value="laptop">Laptop</option>
                                    <option class="input" value="elektronik">Elektronik Lainnya</option>
                                </select>
                            </div>
                            <div class="group">
                                <label for="hargabarang" class="label">HARGA BARANG</label>
                                <input id="hargabarang" type="text" class="input" name="hargabarang">
                                @error('hargabarang')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="alamat" class="label">ALAMAT</label>
                                <textarea name="alamatbarang" id="alamat" class="input" cols="30" rows="10"></textarea>
                                @error('alamatbarang')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="deskripsibarang" class="label">DESKRIPSI BARANG</label>
                                <textarea name="deskripsibarang" id="deskripsibarang" class="input" cols="30"
                                    rows="10"></textarea>
                                @error('deskripsibarang')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <label for="fotobarang" class="label">Foto Barang</label>
                                <input type="file" name="fotobarang" id="fotobarang" class="input">
                                @error('fotobarang')
                                    <div class="pesan"><i class="fas fa-exclamation-circle"></i> {{ $message }}</div>
                                @enderror
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="jual">
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
