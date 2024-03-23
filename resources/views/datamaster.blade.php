@extends('layout/main')

@section('title','Disdikpora | Paud Dikmas - Data Master')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table Data Master</h1>
    <p class="mb-4">Sensitive data dilarang merubah atau menambahkan data tanpa perintah khusus dari ter<a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Jabatan</th>
                            <th>Tempat Tgl Lahir</th>
                            <th>Kecamatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Status Kepegawaian</th>
                            <th>Lembaga</th>
                            <th>Tamat Mengajar</th>
                            <th>Masa Kerja</th>
                            <th>PMMS</th>
                            <th>Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_master as $index => $item)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$item->nama_lengkap}}</td>
                                <td>{{$item->jabatan}}</td>
                                <td>{{$item->tempat_tgl_lahir}}</td>
                                <td>{{$item->kecamatan}}</td>
                                <td>{{$item->pend_terakhir}}</td>
                                <td>{{$item->status_kepegawaian == 1 ? 'Induk' : 'Non Induk'}}</td>
                                <td>{{$item->lembaga}}</td>
                                <td>{{$item->tmt_mengajar}}</td>
                                <td>{{$item->masa_kerja}}</td>
                                <td>{{$item->status_pmms}}</td>
                                <td>{{$item->ket}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection