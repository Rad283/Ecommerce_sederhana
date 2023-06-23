<x-main>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container">
                        <h1>Form tambah produk</h1>
                        <br>
                        <form action="{{ route('produk.update', $produk) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            Nama <input type="text" name="nama" id="nama" required
                                value="{{ $produk->nama }}">
                            <br>
                            <br>
                            Kode <input type="text" name="kode" id="kode" required
                                value="{{ $produk->kode }}">
                            <br>
                            <br>
                            Harga Jual <input type="number" name="harga_jual" id="harga_jual" required
                                value="{{ $produk->harga_jual }}">
                            <br>
                            <br>
                            Harga Beli <input type="number" name="harga_beli" id="harga_beli" required
                                value="{{ $produk->harga_beli }}">
                            <br>
                            <br>
                            stok <input type="number" name="stok" id="stok" required
                                value="{{ $produk->stok }}">
                            <br>
                            <br>
                            Deskripsi
                            <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" required>{{ $produk->deskripsi }}</textarea>
                            <br>
                            <br>
                            {{-- preview gambar dengan js  --}}
                            Upload Gambar
                            <img id="load" src="{{ asset('storage/' . $produk->gambar) }}" alt="your image"
                                style="max-height: 250px;" />
                            <input accept="image/*" type='file' id="gambar" name="gambar" required />
                            <br>
                            <br>
                            Kategori <select name="kategori_id" id="kategori_id" required>
                                <option value="{{ $produk->kategori_id }}">{{ $produk->kategori->nama_kategori }}
                                </option>
                                @foreach ($kategoris as $kategori)
                                    @if ($kategori->id != $produk->kategori->id)
                                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <button type="submit" class="btn">Kirim</button>
                        </form>

                    </div>


                    {{-- buat nampilin gambar yang baru diupload --}}
                    <script type="text/javascript">
                        gambar.onchange = evt => {
                            const [file] = gambar.files
                            if (file) {
                                load.src = URL.createObjectURL(file)
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-main>
