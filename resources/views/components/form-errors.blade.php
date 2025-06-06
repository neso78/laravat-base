@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mb-4">
        <div class="d-flex align-items-center">
            <i class="bi bi-exclamation-octagon-fill me-3 fs-4"></i>
            <div>
                <h5 class="alert-heading mb-2">Došlo je do greške!</h5>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
