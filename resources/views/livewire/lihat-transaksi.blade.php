<div class="container px-4 pt-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <h6 class="mb-4">Data Transaksi</h6>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No Polisi</th>
                            <th scope="col">Merek</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Ponsel</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Pesan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Lama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Proses</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="text-capitalize">{{ $data->mobil->nopolisi }}</td>
                                <td class="text-capitalize">{{ $data->mobil->merk }}</td>
                                <td class="text-capitalize">{{ $data->nama }}</td>
                                <td class="text-capitalize">{{ $data->ponsel }}</td>
                                <td class="text-capitalize">{{ $data->alamat }}</td>
                                <td class="text-capitalize">{{ $data->tgl_pesan }}</td>
                                <td class="text-capitalize">{{ $data->total }}</td>
                                <td class="text-capitalize">{{ $data->lama }}</td>
                                <td class="text-capitalize">{{ $data->status }}</td>
                                <td>
                                    @if ($data->status == 'WAIT')
                                        <button class="btn btn-sm btn-success" wire:click="proses({{ $data->id }})">PROSES</button>
                                    @elseif ($data->status == 'PROSES')
                                        <button class="btn btn-sm btn-success" wire:click="selesai({{ $data->id }})">SELESAI</button>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Data Mobil Belum Ada!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{ $transaksi->links() }}
            </div>
        </div>
    </div>
</div>
