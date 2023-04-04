@extends('main')

@section('title', 'Matriks')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Matriks</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Matriks</a></li>
                    <li class="active">CPL SNDikti & CPL Dikti</li>
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
                <div class="pull-left">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary active">
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> CPL SNDikti & CPL Prodi
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off"> CPL Prodi & PL
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" name="options" id="option3" autocomplete="off"> CPL Prodi & BK
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> CPL Prodi & MK
                        </label>
                        <label class="btn btn-secondary">
                            <input type="radio" name="options" id="option3" autocomplete="off"> MK & BK
                        </label>  
                      </div>
                        
                </div>
                <div class="pull-right">
                    <a href="{{ url('profil/add') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                    <a href="{{ url('profil/add') }}" class="btn btn-warning btn-sm">
                        <i class="fa fa-file-pdf-o"></i> Export
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center" style="vertical-align: middle">CPL SN Dikti</th>
                            <th colspan="13" class="text-center">CPL Prodi</th>
                        </tr>
                        <tr>
                            <th class="text-center">CPL0 1</th>
                            <th class="text-center">CPL0 2</th>
                            <th class="text-center">CPL0 3</th>
                            <th class="text-center">CPL0 4</th>
                            <th class="text-center">CPL0 5</th>
                            <th class="text-center">CPL0 6</th>
                            <th class="text-center">CPL0 7</th>
                            <th class="text-center">CPL0 8</th>
                            <th class="text-center">CPL0 9</th>
                            <th class="text-center">CPL1 0</th>
                            <th class="text-center">CPL1 1</th>
                            <th class="text-center">CPL1 2</th>
                            <th class="text-center">CPL1 3</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>Bertakwa kepada Tuhan Yang Maha Esa dan mampu menunjukkan sikap religius.</td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                            </tr>
                            <tr>
                                <td>Menjunjung tinggi nilai kemanusiaan dalam menjalankan tugas berdasarkan agama, moral dan etika.</td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                            </tr>
                            <tr>
                                <td>Berkontribusi dalam peningkatan mutu kehidupan bermasyarakat, berbangsa, dan bernegara berdasarkan Pancasila.</td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                                <td class="text-center" style="vertical-align: middle">
                                    <input type="checkbox" >
                                </td>
                            </tr>
                    </tbody>
                </table>
                <div class="pull-right">
                </div>
            </div>
        </div>      

    </div>

</div>
@endsection