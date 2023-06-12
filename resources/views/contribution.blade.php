<x-app-layout>
    <div class="pagetitle">
        <h1>Contributions</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Contributions</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">


                {{-- <div class="card info-card sales-card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                                <h6>Filtre</h6>
                            </li>
                            @foreach ($years as $y)
                                <li><a class="dropdown-item" href="/contribution/{{ $y }}">{{ $y }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body pb-0">
                        <h5 class="card-title">Année {{ $year }}</h5>
                    </div>
                </div> --}}

                @foreach ($contributions as $contribution)
                    <div class="card info-card sales-card">
                        <h5 class="card-title"></h5>
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-currency-exchange text-success"></i>
                                </div>
                                <div class="ps-3">
                                    <h6 class="text-success">{{ number_format($contribution->amount, 2, '.', ' ') }} DH
                                    </h6>
                                </div>
                            </div>
                          
                            <div>
                                <div class="text-default fw-bold">{{ $contribution->name }}</div>
                                <div class="text-default small"><b>Période : </b>{{ $contribution->period->name }}</div>
                                <div class="text-default small"><b>Date de paiement : </b>
                                    @if ($contribution->period_id == 2)
                                        le {{ date('d', strtotime($contribution->date)) }} de chaque mois
                                    @elseif ($contribution->period_id == 3)
                                        le {{ date('d/m', strtotime($contribution->date)) }} de chaque année
                                    @else
                                        le {{ date('d/m/Y', strtotime($contribution->date)) }} une seule fois
                                    @endif
                                </div>
                                <div class="small">Ajoutée le :
                                    {{ date('d/m/Y', strtotime($contribution->created_at)) }}</div>
                                @if ($contribution->stat)
                                    <span class="badge rounded-pill bg-success my-2">Confirmé</span>
                                @else
                                    <span class="badge rounded-pill bg-warning my-2">En attente</span>
                                @endif
                                @if ($contribution->is_approval)
                                    <span class="badge rounded-pill bg-warning my-2">Soumis au vote</span>
                                @else
                                    <span class="badge rounded-pill bg-danger my-2">Sans vote</span>
                                @endif
                            </div>
                            <br>
                            <div class="text-default fw-bold">Participants</div>
                            <ol class="list-group list-group-numbered">
                                @foreach($contribution->user_contributions as $user)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="">{{ $user->user?->name }}</div> 
                                    </div>
                                    <span class="badge bg-primary rounded-pill">{{ number_format($user->amount,2,"."," ") }}</span>
                                </li>
                                @endforeach
                            </ol>
                        
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
