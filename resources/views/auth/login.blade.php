<x-layout>
    <x-slot name="title">Prijava</x-slot>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 pt-4">
                    <h4 class="card-title text-center text-primary">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Prijava
                    </h4>
                </div>

                <div class="card-body">
                    <x-form-errors/>

                    <form method="POST" action="{{ route('login.post') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="name-email" class="form-label">Korisnicko ime / Email</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text"
                                       class="form-control"
                                       id="name-email"
                                       name="name-email"
                                       placeholder="Korisnicko ime ili email ..."
                                       required
                                       value="{{ old('name-email') }}">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Lozinka</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock"></i>
                                </span>
                                <input type="password"
                                       class="form-control"
                                       id="password"
                                       name="password"
                                       placeholder="Unesite lozinku"
                                       required>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Prijavi se
                            </button>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Zapamti me</label>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-white border-0 pb-4 text-center">
                    <p class="mb-0">Nemate račun?
                        <a href="{{ route('register') }}" class="text-decoration-none">Registrirajte se</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            console.log('Pozdrav iz login strane!');
        </script>
    </x-slot>
</x-layout>


