<x-guest-layout>

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="assets/images/logo.png" alt="">
                        </a>
                    </div>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Authentification</h5>
                            </div>

                            <form class="row g-3 needs-validation"  method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="col-12">
                                    <div class="input-group has-validation">
                                        <input type="email" id="email" name="email" :value="old('email')" placeholder="E-mail" class="form-control" required autofocus>
                                        <div class="invalid-feedback">Please enter your username.</div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <input id="password" class="form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password">

                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Connexion</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
