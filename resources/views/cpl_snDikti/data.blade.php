@extends('main')

@section('title', 'CPL SN-DIKTI')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kurikulum</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Kurikulum</a></li>
                    <li class="active">Capaian Pembelajaran Lulusan SNDikti</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="options" id="option3" autocomplete="off"> CPL SN-DIKTI
                    </label>    
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option1" autocomplete="off" checked> CPL Prodi
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option1" autocomplete="off" checked> Profil Lulusan
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option2" autocomplete="off"> Capaian Pembelajaran Lulusan 
                    </label>
                    <label class="btn btn-secondary">
                      <input type="radio" name="options" id="option3" autocomplete="off"> Mata Kuliah
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> Bahan Kajian
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" id="option3" autocomplete="off"> CPMK
                    </label>  
                  </div>
                <div class="pull-right">
                    <a href="{{ url('cpl_snDikti/add') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>CPL SN-DIKTI</th>
                            <th>CPL Prodi</th>
                            <th>Deskripsi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cpl_snDikti as $key => $item)
                            <tr>
                                <td>{{ $item->Kode_CPL_SNDIKTI }}</td>
                                <td></td>
                                <td>{{ $item->Deskripsi }}</td>
                                <td class="text-center">
                                    <a href="{{ url('cpl_snDikti/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{ url('cpl_snDikti/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $cpl_snDikti->links() }}
                </div>
            </div>
        </div>      

    </div>

</div>
@endsection