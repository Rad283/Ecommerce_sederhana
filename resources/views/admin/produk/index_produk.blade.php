<x-main>
    <div class="container-fluid">

        @if (auth()->user()->role == 'admin')
            <center>
                <a href="{{ route('produk.create') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
            </center>
        @endif
        <br>
        <div class="card shadow">
            <div class="card-header py-3">

                <div class="row">
                    <div class="col-md-6">
                        <p class="text-primary m-0 fw-bold">Daftar Produk</p>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('produk.index') }}" method="get" id="myForm">



                            <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label">
                                    <button type="reset" onclick="myFunction()"
                                        class="btn btn-danger btn-sm mr-2">RESET
                                    </button><input type="text" class="" aria-controls="dataTable"
                                        placeholder="Cari nama produk" name="string" value=""></label>

                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                <br>

                            </div>
                        </form>
                    </div>
                    <div class="col-md-12">
                        <center>
                            @if ($string !== '')
                                <h1>menampilkan hasil untuk {{ $string }}</h1>
                            @endif
                        </center>
                    </div>

                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <div class="table-responsive table mt-2" id="dataTable" role="grid"
                            aria-describedby="dataTable_info">

                            <table class="table my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>kode</th>
                                        <th>Harga Beli</th>
                                        <th>Harga Jual</th>
                                        <th>Stok</th>
                                        <th>Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        @if (auth()->user()->role == 'admin')
                                            <th class="text-center">Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produks as $produk)
                                        <tr>
                                            <td>{{ $produk->nama }}</td>
                                            <td>{{ $produk->kode }}</td>
                                            <td>RP. {{ $produk->harga_beli }}<br></td>
                                            <td>RP. {{ $produk->harga_jual }}</td>
                                            <td>{{ $produk->stok }}</td>
                                            <td>{{ $produk->kategori->nama_kategori }}</td>
                                            <td>{{ $produk->deskripsi }}</td>
                                            <td class="text-center"><img
                                                    src="{{ asset('storage/' . $produk->gambar) }}"
                                                    style="width: 150px;">
                                            </td>
                                            <td class="text-center align-content-around d-flex justify-content-around">
                                                @if (auth()->user()->role == 'admin')
                                                    <a href="{{ route('produk.edit', $produk) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>

                                                    <form action="{{ route('produk.destroy', $produk) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm ml-2" type="submit"
                                                            onclick="return confirm('Apakah ingin menghapus?')">Hapus</button>
                                                    </form>
                                                @endif


                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr></tr>
                                </tfoot>
                            </table>
                        </div>
                        <br>



                    </div>
                    <div class="row">

                        <div class="col-md-12">
                            {{ $produks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function myFunction() {
                document.getElementById("myForm").reset();
                document.getElementById("myForm").submit();

            }
        </script>
</x-main>
