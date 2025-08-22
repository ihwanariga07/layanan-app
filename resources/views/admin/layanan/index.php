@extends('layouts.app')

@section('title', 'Manajemen Layanan')

@section('content')
<div class="container-fluid mt-4">
    <div class="row mb-3">
        <div class="col">
            <h4 class="text-white">Manajemen Layanan</h4>
        </div>
        <div class="col text-end">
            <a href="{{ route('layanan.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Tambah Layanan
            </a>
        </div>
    </div>

    <div class="card bg-dark text-white shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered text-white">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                        
@endsection
