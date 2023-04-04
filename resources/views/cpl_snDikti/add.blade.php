@extends('main')

@section('title', 'CPL')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>SI-OBE</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Capaian Pembelajaran Lulusan SNDikti</a></li>
                    <li class="active">Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Capaian Pembelajaran Lulusan SNDikti</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('cpl_snDikti') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('cpl_snDikti/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Kode_CPL_SNDIKTI</label>
                                <input type="text" name="Kode_CPL_SNDIKTI" class="form-control @error('Kode_CPL_SNDIKTI') is-invalid @enderror" value="{{ old('Kode_CPL_SNDIKTI') }}" autofocus>
                                @error('Kode_CPL_SNDIKTI')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi Capaian</label>
                                <textarea name="Deskripsi" class="form-control @error('Deskripsi') is-invalid @enderror">{{ old('Deskripsi') }}</textarea>
                                @error('Deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>      

    </div>

</div>
@endsection