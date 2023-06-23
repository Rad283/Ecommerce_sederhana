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
                                <form action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    Nama <input type="text" name="nama" id="nama" required>
                                    <br>
                                    <br>
                                    kode <input type="text" name="kode" id="kode" required>
                                    <br>
                                    <br>
                                    Harga Jual <input type="number" name="harga_jual" id="harga_jual" required>
                                    <br>
                                    <br>
                                    Harga Beli <input type="number" name="harga_beli" id="harga_beli" required>
                                    <br>
                                    <br>
                                    stok <input type="number" name="stok" id="stok" required>
                                    <br>
                                    <br>
                                    Deskripsi
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" required></textarea>
                                    <br>
                                    <br>
                                    {{-- preview gambar dengan js  --}}
                                    Upload Gambar
                                    <img id="load" src="https://muhammad-radhitya-alif.netlify.app/no-image.png"
                                        alt="your image" style="max-height: 250px;" />
                                    <input accept="image/*" type='file' id="gambar" name="gambar" required />
                                    <br>
                                    <br>
                                    Kategori <select name="kategori_id" id="kategori_id" required>
                                        @foreach ($kategoris as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
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
