<x-layout>
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

                        <div class="d-flex justify-content-between align-items-center mb-3">
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" id="remember" name="remember">--}}
{{--                                <label class="form-check-label" for="remember">Zapamti me</label>--}}
{{--                            </div>--}}
{{--                            <a href="{{ route('password.request') }}" class="text-decoration-none small">Zaboravili ste lozinku?</a>--}}
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-box-arrow-in-right me-2"></i>Prijavi se
                            </button>
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
</x-layout>
