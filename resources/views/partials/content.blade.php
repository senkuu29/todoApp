<div class="hero text-center py-5">
    <h1 class="typing-animation">Create Your Daily List Here</h1>
</div>

<div class="container my-4">
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h3 class="card-title ">Buatlah List Favoritmu</h3>
                    <p class="card-text">
                        Kami menyediakan tempat koleksi list yang bisa kamu gunakan kapan saja.
                    </p>
                    <button type="button" class="btn btn-primary btn-sm w-100 d-flex align-items-center justify-content-center gap-1 p-2 mt-3" 
                        data-bs-toggle="modal" data-bs-target="#addListModal">
                        <i class="bi bi-plus fs-5"></i> Tambah Daftar List
                    </button>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-primary">
                <div class="card-header bg-primary text-white">Total List</div>
                <div class="card-body text-center">
                    <h1 class="display-5 text-primary">{{ $lists->count() }}</h1>
                    <p class="card-text">Daftar yang telah Anda buat</p>
                </div>
            </div>
        </div> 
        <div class="col-md-4">
            <div class="card shadow-sm h-100 border-primary">
                <div class="card-header bg-primary text-white">Total List</div>
                <div class="card-body text-center">
                    <h1 class="display-5 text-primary">{{ $tasks->count() }}</h1>
                    <p class="card-text">Daftar yang telah Anda buat</p>
                </div>
            </div>
        </div> 
    </div>
</div>
<hr>