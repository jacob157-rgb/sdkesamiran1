@extends('layouts.dashboardLayout')
@section('content')
<p class="font-weight-bold"> <i class="fa-solid fa-user-plus"></i> Daftarkan Akun Untuk Siswa</p>
<div class="col-md-6 col-lg-3">
    <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
        <div class="widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left pr-2 fsize-1">
                        <div class="widget-numbers mt-0 fsize-3 text-info">{{$siswa->count()}}</div>
                    </div>
                    <div class="widget-content-right w-100">
                        <div class="progress-bar-xs progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89"
                                aria-valuemin="0" aria-valuemax="100" style="width: {{$siswa->count()}}%;"></div>
                        </div>
                    </div>
                </div>
                <div class="widget-content-left fsize-1">
                    <div class="text-muted opacity-6">Totals Akun Siswa</div>
                </div>
            </div>
        </div>
    </div>
</div>
    <form method="POST" action="{{ url('/guru/akun-siswa') }}">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">{{ __('Nama') }}</label>
            <div class="col-sm-10">
                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                    value="{{ old('nama') }}" required autocomplete="nama" autofocus>
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="nis" class="col-sm-2 col-form-label">{{ __('NIS') }}</label>
            <div class="col-sm-10">
                <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis"
                    value="{{ old('nis') }}" required autocomplete="nis" autofocus>
                @error('nis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">{{ __('New Password') }}</label>
            <div class="col-sm-10">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Tambah') }}
                </button>
            </div>
        </div>
    </form>
    <div class=" mb-2">
        <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" id="liveSearch" placeholder="Cari Akun" class="form-control">
          </div>
    </div>
    <div class="table-responsive mb-5">
        <table class="table-borderless table-striped table-hover mb-0 table align-middle">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">NIS</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $siswa)
                <tr>
                    <td class="text-muted text-center">{{$loop->iteration}}</td>
                    <td class="text-center">{{ $siswa->nama }}</td>

                    <td class="text-center">
                        <div class="badge badge-success">{{ $siswa->NIS }}</div>
                    </td>
                    <td class="text-center">
                        <a href="/guru/edit/akun-siswa/{{$siswa->id}}" type="button" id="PopoverCustomT-2"
                            class="btn btn-info btn-sm"><i class="fa-solid fa-user-pen"></i></a>
                            <a href="/guru/delete/akun-siswa/{{$siswa->id}}" type="button" id="PopoverCustomT-2"
                                class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
