<x-app-layout>
    <div class="pagetitle">
        <h1>Ajouter un paiement</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item"><a href="/paiement">Mes paiements</a></li>
                <li class="breadcrumb-item active">Ajouter un paiement</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- General Form Elements -->
                        <form method="POST" action="{{ route('savepaiement') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input required type="date" id="date" name="date" value="{{ date('d/m/Y') }}" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="amount" class="col-sm-2 col-form-label">Montant</label>
                                <div class="col-sm-10">
                                    <input required type="number" id="amount" name="amount" value="" placeholder="0.00" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="banque" class="col-sm-2 col-form-label">Compte</label>
                                <div class="col-sm-10">
                                    <select required name="banque_id" id="banque" class="form-select">
                                        <option value="">Selectionner un compte</option>
                                        @foreach ($user->banques as $banque)
                                            <option value="{{ $banque->banque_id }}">{{ $banque->banque->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="file" class="col-sm-2 col-form-label">Justificatif</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" name="file" id="file">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
