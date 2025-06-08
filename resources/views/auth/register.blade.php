<x-layout>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 pt-4">
                    <h4 class="card-title text-center text-primary">
                        <i class="bi bi-person-plus me-2"></i>Novi nalog
                    </h4>
                </div>

                <div class="card-body">
                    <x-form-errors/>

                    <form method="POST" action="{{ route('register.post') }}" class="needs-validation" novalidate>
                        @csrf

                        <div class="mb-3">
                            <label for="username" class="form-label">Korisnicko ime</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>
                                <input type="text"
                                       class="form-control"
                                       id="username"
                                       name="username"
                                       placeholder="Korisnicko ime"
                                       required
                                       value="{{ old('username') }}">
                            </div>
                        </div>

                        <div class="mb-3">
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

                        <div class="mb-3">
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

                        <div class="mb-4">
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
                        <div class="mb-3">
                            <label for="invite_code" class="form-label">Pozivni kod</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input type="text"
                                       class="form-control"
                                       id="invite_code"
                                       name="invite_code"
                                       placeholder="Unesite pozivni kod"
                                       required>
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
    <x-slot name="scripts">
        <script>
            console.log('Pozdrav iz register strane!');
        </script>
    </x-slot>
</x-layout>
