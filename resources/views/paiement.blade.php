<x-app-layout>
    <div class="pagetitle">
        <h1>Mes paiements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Mes paiements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    @foreach($user->banques as $banque)
                    @php
                        $solde = $banque->solde;
                        $stat = "text-success";
                        if($solde == 0)
                            $stat = "text-warning";
                        if($solde < 0)
                            $stat = "text-danger";

                        $credit = $banque->unpaid_credits()->sum('rest');
                        if($credit == 0)
                            $stat_c = "text-success";
                        else
                            $stat_c = "text-danger";
                    @endphp
                    <div class="col-12 col-sm-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Crédit : <span class="small">{{ $banque->banque->name }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-exchange {{ $stat_c }}"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="{{ $stat_c }}">{{ number_format($credit, 2, ".", " ") }} DH</h6>
                                        <span class="text-muted small pt-2 ps-1">Wallet : </span>
                                        <span class="small pt-1 fw-bold {{ $stat }}">{{ number_format($solde, 2, ".", " ") }} DH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="card">
                    {{-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filtre</h6>
                            </li>
                            @foreach ($years as $y)
                                <li><a class="dropdown-item" href="/paiement/{{ $y }}">{{ $y }}</a></li>
                            @endforeach
                        </ul>
                    </div> --}}

                    <div class="card-header">
                        <ul class="nav nav-pills card-header-pills">
                          <li class="nav-item">
                            <a class="nav-link active" href="add-paiement"><i class="bi bi-plus-circle"></i> Ajouter</a>
                          </li>
                        </ul>
                      </div>

                    <div class="card-body pb-0">

                        {{-- <h5 class="card-title">Année {{ $year }}</h5> --}}
                        @if($payments->count() > 0)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Paiement</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col">Etat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                <tr>
                                    <td class="small">
                                        {{ Carbon\Carbon::parse($payment->date)->format('d/m/Y') }}<br>
                                        {{ $payment->banque->name }}
                                    </td>
                                    <td class="small">{{ number_format($payment->amount, 2, ".", " ") }} Dh</td>
                                    <td class="small">
                                        @if($payment->is_confirmed)
                                            <span class="badge rounded-pill bg-success">Validé</span>
                                        @else
                                            <span class="badge rounded-pill bg-warning">En attente</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
