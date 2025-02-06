@extends('layouts.app')

@section('content')
<div id="content" class="p-4 bg-light shadow-sm rounded my-5">
    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4">
        <h1 class="text-primary mb-0 align-items-center">Detail Tugas</h1>
        <a href="{{ route('home') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </div>
    
    <div class="row align-items-center">
        <div class="col-md-8">
            <h3 class="mb-2 text-dark font-weight-bold">{{$task->name}}</h3>
            <p class="text-muted">{{$task->description}}</p>
        </div>
        <div class="col-md-4 text-end">
            <span class="badge bg-{{$task->priorityClass}} text-white fs-6 py-2 px-3">
                <i class="bi bi-exclamation-circle me-1"></i> {{$task->priority}}
            </span>
            <span class="badge bg-{{$task->status ? 'success' : 'danger'}} text-white fs-6 py-2 px-3">
                <i class="bi {{$task->status ? 'bi-check-circle' : 'bi-x-circle'}} me-1"></i>
                {{$task->status ? 'Selesai' : 'Belum Selesai'}}
            </span>
        </div>
    </div>
</div>
    
@endsection

