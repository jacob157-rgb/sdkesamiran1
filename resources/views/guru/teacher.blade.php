@extends('layouts.dashboardLayout')
@section('content')
<form method="POST" action="{{ url('/guru/teacher') }}" enctype="multipart/form-data">
        @csrf
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">Foto <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="file" name="image" class="form-control @if ($errors->has('image')) is-invalid @endif"
                    placeholder="Pilih foto">
                <small>Tipe image : JPG/JPEG/PNG. Max : 10 MB.</small>
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="users_id" class="col-sm-2 col-form-label">{{ __('Nama Akun') }}</label>
            <div class="col-sm-10">
                <select id="users_id" class="form-control @error('users_id') is-invalid @enderror" name="users_id" required>
                    <option value="">--- Select Akun Guru ---</option>
                    @foreach ($guruUsers as $guruUser)
                        <option value="{{ $guruUser->id }}" {{ old('users_id') == $guruUser->id ? 'selected' : '' }}>
                            {{ $guruUser->nama }}
                        </option>
                    @endforeach
                </select>
                @error('users_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="tittle" class="col-sm-2 col-form-label">{{ __('Title') }}</label>
            <div class="col-sm-10">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                    name="title" value="{{ old('title') }}" required placeholder="Guru Kelas 1" autocomplete="title"
                    autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

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
            <label for="roles" class="col-sm-2 col-form-label">{{ __('Type Jabatan') }}</label>
            <div class="col-sm-10">
                <select id="roles" class="form-control @error('roles') is-invalid @enderror" name="roles" required>
                    <option value="">--- Select Type Jabatan ---</option>
                    <option value="1" {{ old('roles') == '1' ? 'selected' : '' }}>Kepala Sekolah</option>
                    <option value="2" {{ old('roles') == '2' ? 'selected' : '' }}>Guru</option>
                    <option value="3" {{ old('roles') == '3' ? 'selected' : '' }}>Staf</option>
                </select>
                @error('roles')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="nip" class="col-sm-2 col-form-label">{{ __('NIP') }}</label>
            <div class="col-sm-10">
                <input id="nip" type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                    value="{{ old('nip') }}" required autocomplete="nip" autofocus>
                @error('nip')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="jabatan" class="col-sm-2 col-form-label">{{ __('Jabatan') }}</label>
            <div class="col-sm-10">
                <input id="jabatan" type="text" class="form-control @error('jabatan') is-invalid @enderror"
                    name="jabatan" value="{{ old('jabatan') }}" required autocomplete="jabatan" autofocus>
                @error('jabatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">{{ __('Alamat') }}</label>
            <div class="col-sm-10">
                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror"
                    name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>
                @error('alamat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="no_tlp" class="col-sm-2 col-form-label">{{ __('No. Tlp') }}</label>
            <div class="col-sm-10">
                <input id="no_tlp" type="text" class="form-control @error('no_tlp') is-invalid @enderror"
                    name="no_tlp" value="{{ old('no_tlp') }}" required autocomplete="no_tlp" autofocus>
                @error('no_tlp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
    </form>
@endsection
