<x-main>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (auth()->user()->role == 'admin')
                <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Kategori
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table my-0 table-bordered " id="dataTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>

                            @if (Auth::user()->role == 'admin')
                                <th colspan="2">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($kategori as $kat)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $kat->nama_kategori }}</td>
                                @if (Auth::user()->role == 'admin')
                                    <td><a href="{{ url('admin/kategori/delete/' . $kat->id) }}"
                                            class="btn btn-danger">Delete</a></td>
                                @endif
                            </tr>
                            @php
                                $no++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
</x-main>
