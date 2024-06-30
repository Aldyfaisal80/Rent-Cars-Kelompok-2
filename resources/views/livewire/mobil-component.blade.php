<div class="container px-4 pt-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Data Mobil</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Polisi</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mobil as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="text-capitalize">{{ $data->nopolisi }}</td>
                                <td class="text-capitalize">{{ $data->merk }}</td>
                                <td class="text-capitalize">{{ $data->jenis }}</td>
                                <td>Rp. {{ $data->harga }}</td>
                                <td><img src="{{ asset('storage/mobil/' . $data->foto) }}" width="100"
                                        alt="{{ $data->merk }}"></td>
                                <td>
                                    <button wire:click="edit({{ $data->id }})"
                                        class="btn btn-info text-white">Edit</button>
                                    <button wire:click="destroy({{ $data->id }})"
                                        class="btn btn-danger">Delete</button></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Data Mobil Belum Ada!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $mobil->links() }}
                <button wire:click="create()" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
    @if ($addPage)
        @include('mobil.create')
    @endif
    @if ($editPage)
        @include('mobil.edit')
    @endif
</div>
