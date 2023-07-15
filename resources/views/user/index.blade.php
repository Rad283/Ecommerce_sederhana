<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <center>
                        <h1>Pesanan Anda</h1>
                    </center>
                    <br>
                    <table class="table my-0 table-bordered " id="dataTable">
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


                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($pesanans as $order)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $order->tanggal }}</td>
                                    <td>{{ $order->nama_pemesan }}</td>
                                    <td>{{ $order->alamat_pemesan }}</td>
                                    <td>{{ $order->no_hp }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->jumlah_pesanan }}</td>
                                    <td>{{ $order->deskripsi }}</td>
                                    <td>{{ $order->produk->nama }}</td>

                                    <td><a href="{{ url('admin/pesanan/delete/' . $order->id) }}"
                                            class="btn btn-danger">Delete</a></td>

                                </tr>
                                @php
                                    $no++;
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
