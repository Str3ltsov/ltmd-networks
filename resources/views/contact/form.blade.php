<form class="row mb-4" style="font-size: 16px">
    <div class="mb-3 mb-sm-0 col-md-4 col-12">
        <label for="name" class="form-label text-muted">
            {{ __('Jūsų vardas*') }}
        </label>
        <input type="text" class="form-control bg-white" id="name" name="name">
    </div>
    <div class="mb-3 mb-sm-0 col-md-4 col-12">
        <label for="email" class="form-label text-muted">
            {{ __('El. pašto adresas*') }}
        </label>
        <input type="email" class="form-control bg-white" id="email" name="email">
    </div>
    <div class="col-md-4 col-12">
        <label for="title" class="form-label text-muted">
            {{ __('Pavadinimas*') }}
        </label>
        <input type="text" class="form-control bg-white" id="title" name="title">
    </div>
    <div class="mt-3 mb-4 col-12">
        <label for="message" class="form-label text-muted">
            {{ __('Žinutė*') }}
        </label>
        <textarea class="form-control bg-white" rows="5" id="message" name="message"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-dark" style="font-size: 16px; padding: 8px 20px">
            {{ __('Siųsti') }}
        </button>
    </div>
</form>