<x-app-layout>
    <div class="pagetitle">
        <h1>Mon profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">profile</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title">Informations personnelles</h5>
                        <!-- Profile Edit Form -->
                        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-lg-3 col-form-label">Nom</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="name" type="text" class="form-control" id="name"
                                        value="{{ old('name', $user->name) }}" required autocomplete="name">
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="email" type="email" class="form-control" id="email"
                                        value="{{ old('email', $user->email) }}" required autocomplete="email">
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-lg-3 col-form-label">Téléphone</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        value="{{ old('phone', $user->phone) }}" required autocomplete="email">
                                    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </form>
                        <!-- End Profile Edit Form -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="card-title">Mot de passe</h5>
                        <!-- Profile Edit Form -->
                        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('put')

                            <div class="row mb-3">
                                <label for="current_password" class="col-md-4 col-lg-3 col-form-label">
                                    Mot de passe actuel
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="current_password" type="password" class="form-control"
                                        id="current_password" autocomplete="current-password">
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-lg-3 col-form-label">Nouveau mot de
                                    passe</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control" id="password"
                                        autocomplete="new-password">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password_confirmation" class="col-md-4 col-lg-3 col-form-label">
                                    Confirmer le mot de passe
                                </label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password_confirmation" type="password" class="form-control"
                                        id="password_confirmation" autocomplete="new-password">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Modifier le mot de passe</button>
                            </div>
                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </form>
                        <!-- End Profile Edit Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
