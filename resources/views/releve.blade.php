<x-app-layout>
    <div class="pagetitle">
        <h1>Mon relevé</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Mon relevé</li>
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
                                <h5 class="card-title">Wallet : <span class="small">{{ $banque->banque->name }}</span></h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-wallet2 {{ $stat }}"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="{{ $stat }}">{{ number_format($solde, 2, ".", " ") }} DH</h6>
                                        <span class="text-muted small pt-2 ps-1">crédit : </span>
                                        <span class="small pt-1 fw-bold {{ $stat_c }}">{{ number_format($credit, 2, ".", " ") }} DH</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Relevé</h5>

                        @if($transactions->count() == 0)
                        <p class="small">Aucune activité</p>
                        @else
                        <div class="activity">
                            @foreach($transactions as $transaction)
                            <div class="activity-item d-flex">
                                <div class="activite-label">{{ Carbon\Carbon::parse($transaction->date)->format('d-m') }}</div>
                                <i class='bi bi-circle-fill activity-badge align-self-start @if($transaction->type == "Credit") text-danger @elseif(!$transaction->stat) text-warning @else text-success @endif'></i>
                                <div class="activity-content">
                                    @if($transaction->type == "Credit")
                                        <span class="fw-bold text-danger">- {{ number_format($transaction->amount, 2, ".", " ") }} DH</span><br>
                                        <span class="small">
                                            <b>{{ $transaction->name }}</b><br>
                                            {{ $transaction->banque->name }}
                                        </span><br>
                                    @else
                                        <span class="fw-bold @if($transaction->stat) text-success @else text-warning @endif">+ {{ number_format($transaction->amount, 2, ".", " ") }} DH</span><br>
                                        <span class="small">
                                            <b>Alimentation du wallet</b><br>
                                            {{ $transaction->banque->name }}
                                            @if(!$transaction->is_confirmed)
                                                <span class="badge rounded-pill bg-warning text-dark">En attente de validation</span>
                                            @endif
                                        </span><br>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
