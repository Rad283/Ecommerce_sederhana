<x-main>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            @if (auth()->user()->role == 'admin')
                <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
            @endif
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat Pemesan</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Nama Produk</th>

                        @if (Auth::user()->role == 'admin')
                            <th>Action</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $order)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $order->tanggal }}</td>
                            <td>{{ $order->nama_pemesan }}</td>
                            <td>{{ $order->alamat_pemesan }}</td>
                            <td>{{ $order->no_hp }}</td>
                            <td>{{ $order->email }}</td>
                            <td>{{ $order->jumlah_pesanan }}</td>
                            <td>{{ $order->deskripsi }}</td>
                            <td>{{ $order->nama_produk }}</td>
                            @if (Auth::user()->role == 'admin')
                                <td><a href="{{ url('admin/pesanan/edit/' . $order->id) }}"
                                        class="btn btn-success">Edit</a></td>
                                <td><a href="{{ url('admin/pesanan/delete/' . $order->id) }}"
                                        class="btn btn-danger">Delete</a></td>
                            @endif
                        </tr>
                        @php
                            $no++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
</x-main>
