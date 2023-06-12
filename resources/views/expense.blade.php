<x-app-layout>
    <div class="pagetitle">
        <h1>Les Charges</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Les Charges</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

     <section class="section dashboard">
  <div class="row">
      <div class="col-12">
          <div class="row">
              @foreach ($user->banques as $banque)
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
                              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
            </>
          </section>


        

    @foreach ($expenses as $expense)
        <div class="card info-card sales-card">
            <h5 class="card-title"></h5>
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-currency-exchange text-success"></i>
                </div>
                <div class="ps-3">
                    <h6 class="text-success">{{ number_format($expense->amount, 2, '.', ' ') }} DH
                    </h6>
                </div>
             </div>

                <div class="text-default fw-bold">{{ $expense->name }}</div>
                <div class="text-default small"><b>Période : </b>{{ $expense->period->name}}</div>
                <div class="text-default small"><b>Date de paiement : </b>
                    @if ($expense->period_id == 2)
                        le {{ date('d', strtotime($expense->date)) }} de chaque mois
                    @elseif ($expense->period_id == 3)
                        le {{ date('d/m', strtotime($expense->date)) }} de chaque année
                    @else
                        le {{ date('d/m/Y', strtotime($expense->date)) }} une seule fois
                    @endif
                </div>
                {{-- <div class="small">Ajoutée le :
                    {{ date('d/m/Y', strtotime($expense->created_at)) }}</div>
                @if ($expense->stat)
                    <span class="badge rounded-pill bg-success my-2">Confirmé</span>
                @else
                    <span class="badge rounded-pill bg-warning my-2">En attente</span>
                @endif
                @if ($expense->is_approval)
                    <span class="badge rounded-pill bg-warning my-2">Soumis au vote</span>
                @else
                    <span class="badge rounded-pill bg-danger my-2">Sans vote</span>
                @endif
            </div> --}}
        </div>

        </div>
    @endforeach
</x-app-layout>
