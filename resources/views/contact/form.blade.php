<form method="post" action="{{ route('submitContactForm') }}" class="row mb-4" style="font-size: 16px">
    @csrf
    @method('POST')
    <div class="mb-3 mb-sm-0 col-md-4 col-12">
        <label for="name" class="form-label text-muted">
            {{ __('Jūsų vardas*') }}
        </label>
        <input type="text" class="form-control bg-white @error('name') border-danger @enderror" id="name" name="name">
        @error('name')
            <div class="text-danger pt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 mb-sm-0 col-md-4 col-12">
        <label for="email" class="form-label text-muted">
            {{ __('El. pašto adresas*') }}
        </label>
        <input type="email" class="form-control bg-white @error('email') border-danger @enderror" id="email" name="email">
        @error('email')
            <div class="text-danger pt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-4 col-12">
        <label for="title" class="form-label text-muted">
            {{ __('Pavadinimas*') }}
        </label>
        <input type="text" class="form-control bg-white @error('title') border-danger @enderror" id="title" name="title">
        @error('title')
            <div class="text-danger pt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-3 mb-4 col-12">
        <label for="message" class="form-label text-muted">
            {{ __('Žinutė*') }}
        </label>
        <textarea class="form-control bg-white @error('message') border-danger @enderror" rows="5" id="message" name="message"></textarea>
        @error('message')
            <div class="text-danger pt-1">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-dark" style="font-size: 16px; padding: 8px 20px">
            {{ __('Siųsti') }}
        </button>
    </div>
</form>