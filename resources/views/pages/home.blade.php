@extends('layouts.app')

@section('content')
<div id="content" class="container-fluid px-3 py-3">

        <!-- Wrapper untuk daftar tugas -->
    <div class="row flex-nowrap overflow-auto " style="height: 100vh;">
        @foreach ($lists as $list)
            <div class="col-12 col-md-6 col-lg-3 ">
                <div class="card shadow-sm mb-3 ">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="card-title">{{ $list->name }}</h5>

                         <button type="button" class="btn btn-sm btn-primary d-flex align-items-center justify-content-center gap-1"
                             data-bs-toggle="modal" data-bs-target="#addTaskModal" data-list="{{ $list->id }}">
                            <i class="bi bi-plus fs-6"></i> 
                         </button>

                        <form action="{{ route('lists.destroy', $list->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm p-0">
                                <i class="bi bi-trash fs-5 text-danger"></i>
                            </button>
                        </form>
                    </div>
                    
                    <div class="card-body d-flex flex-column gap-2 overflow-auto" style="max-height: 60vh;">
                        @foreach ($tasks as $task)
                            @if ($task->list_id == $list->id)
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href=" {{ route('tasks.show',$task->id)}}" class="fw-bold m-0 {{ $task->is_completed ? 'text-decoration-line-through text-muted' : '' }}">
                                                {{ $task->name }}
                                            </a> 


                                            <span class="badge text-bg-{{ $task->priorityClass }}">
                                                {{ $task->priority }}
                                            </span>
                                        </div>
                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm p-0">
                                                <i class="bi bi-x-circle text-danger fs-5"></i>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text text-truncate">{{ $task->description }}</p>
                                    </div>
                                    @if (!$task->is_completed)
                                        <div class="card-footer p-2">
                                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm btn-primary w-100 p-1">
                                                    <i class="bi bi-check fs-6"></i> Selesai
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                    
                    <!-- Footer untuk jumlah tugas dan tombol tambah -->
                    <div class="card-footer d-flex flex-column gap-2 p-2">
                        <p class="m-0 text-center small text-muted">{{ $list->tasks->count() }} Tugas</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    </div>
</div>
@endsection
