@extends('layouts.dashboardLayout')
@section('content')
    <p class="font-weight-bold"> <i class="fa-solid fa-eye"></i> Detail Tabungan {{ $siswa->nama }} </p>

    <div class="container-fluid">
        <div class="row">
            <!-- Left Side - Photo -->
            <div class="col-md-4">
                <img src="{{ asset('storage/'.$profil->image) }}" alt="" class="img-fluid rounded">
            </div>

            <!-- Right Side - Details -->
            <div class="col-md-8 mt-2">
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-warning p-2 rounded">Informasi Akun {{ $siswa->nama }}</span></a>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA AKUN : </span>
                    <input disabled value="{{ $siswa->nama }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">EMAIL : </span>
                    <input disabled value="{{ $siswa->email }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIS : </span>
                    <input disabled value="{{ $siswa->NIS }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <a><span class="badge text-bg-success p-2 rounded">Informasi Profil {{ $siswa->nama }}</span></a>
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NAMA : </span>
                    <input disabled value="{{ $profil->nama_siswa }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">NIS : </span>
                    <input disabled value="{{ $profil->NIS }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">KELAS : </span>
                    <input disabled value="{{ $profil->kelas }}" type="text" class="form-control">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <a href="/guru/siswa/view/{{ $profil->id }}/={{ urlencode($profil->nama_siswa) }}"><span class="badge text-bg-warning p-2 rounded">Lebih Detail Tentang {{ $profil->nama_siswa }} <i class="fa-solid fa-arrow-trend-up"></i></span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-success">{{ $menabungCount }}</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                            aria-valuemax="100" style="width: {{ $menabungCount }}%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Menabung</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-danger">{{ $menarikCount }}</div>
                                </div>
                                <div class="widget-content-right w-100">
                                    <div class="progress-bar-xs progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0"
                                            aria-valuemax="100" style="width: {{ $menarikCount }}%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Menarik</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                    <div class="widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left pr-2 fsize-1">
                                    <div class="widget-numbers mt-0 fsize-3 text-info">Rp. </div>
                                </div>
                            </div>
                            <div class="widget-content-left fsize-1">
                                <div class="text-muted opacity-6">Totals Saldo Sekarang</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class=" mb-2">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" id="liveSearch" placeholder="Cari" class="form-control">
                  </div>
            </div>
            <div class="table-responsive mb-5">
                <table class="table-borderless table-striped table-hover mb-0 table align-middle">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nama Siswa</th>
                            <th class="text-center">Penulis</th>
                            <th class="text-center">Saldo Sekarang</th>
                            <th class="text-center">Jenis Transaksi</th>
                            <th class="text-center">Saldo Transaksi</th>
                            <th class="text-center">Saldo Final</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">Dibuat</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($saving as $saving)
                        <tr>
                            <td class="text-muted text-center">{{$loop->iteration}}</td>
                            <td class="text-center">{{ $profil->nama_siswa }}</td>
                            <td class="text-center">{{ $saving->author->nama }}</td>
                            <td class="text-center">{{ $saving->saldo_sekarang }}</td>
                            <td class="text-center">
                                @if($saving->jenis_transaksi == 1)
                                <div class="badge badge-success">Menabung</div>
                                @else
                                <div class="badge badge-danger">Menarik</div>
                                @endif
                            </td>
                            <td class="text-center">{{ $saving->saldo_transaksi }}</td>
                            <td class="text-center">{{ $saving->saldo_final }}</td>
                            <td class="text-center">{{ $saving->keterangan }}</td>
                            <td class="text-center">{{ $saving->updated_at->diffForHumans() }}</td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-2"
                                class="btn btn-info btn-sm"><i class="fa-solid fa-user-pen"></i></button>
                                <button type="button" id="PopoverCustomT-2"
                                    class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection