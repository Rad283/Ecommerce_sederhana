<x-main>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form method="post" action="{{ url('admin/kategori/store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="user_id" value=" @if (auth()->user() !== null) {{ auth()->user()->id }} @endif">
        <h4 style="text-align: center">Form Tambah Kategori</h4>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Kategori</label>
            <div class="col-8">
                <input id="nama_kategori" name="nama_kategori" type="text" class="form-control" spellcheck="false"
                    data-ms-editor="true">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</x-main>
