@if ($message = session('success'))
    <div class="alert alert-success alert-block d-flex justify-content-between">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = session('error'))
    <div class="alert alert-danger alert-block d-flex justify-content-between">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = session('warning'))
    <div class="alert alert-warning alert-block d-flex justify-content-between">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($message = session('info'))
    <div class="alert alert-info alert-block d-flex justify-content-between">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif