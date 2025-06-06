<x-layout>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 pt-4">
                    <h4 class="card-title text-center text-primary">
                        <i class="bi bi-person-plus me-2"></i>Kreiranje novog korisničkog računa
                    </h4>
                </div>

                <div class="card-body">
                    <x-form-errors/>

                    <form method="POST" action="{{ route('register.post') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Ime i prezime</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-person"></i>
                                    </span>
                                    <input type="text"
                                           class="form-control"
                                           id="name"
                                           name="name"
                                           placeholder="Vaše ime i prezime"
                                           required
                                           value="{{ old('name') }}">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email adresa</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-envelope"></i>
                                    </span>
                                    <input type="email"
                                           class="form-control"
                                           id="email"
                                           name="email"
                                           placeholder="vas@email.com"
                                           required
                                           value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
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
                                           required
                                           minlength="8">
                                </div>
                                <div class="form-text">Minimalno 8 znakova</div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="password_confirmation" class="form-label">Potvrda lozinke</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-lock-fill"></i>
                                    </span>
                                    <input type="password"
                                           class="form-control"
                                           id="password_confirmation"
                                           name="password_confirmation"
                                           placeholder="Ponovite lozinku"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">
                                    Prihvaćam <a href="#" class="text-decoration-none">Uslove korištenja</a> i
                                    <a href="#" class="text-decoration-none">pravila privatnosti</a>
                                </label>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-person-plus me-2"></i>Registruj se
                            </button>
                        </div>
                    </form>
                </div>

                <div class="card-footer bg-white border-0 pb-4 text-center">
                    <p class="mb-0">Već imate račun?
                        <a href="{{ route('login') }}" class="text-decoration-none">Prijavite se</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
