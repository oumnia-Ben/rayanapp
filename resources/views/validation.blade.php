<x-app-layout>
    <div class="pagetitle">
        <h1>Paiement à valider</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Paiement à valider</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12">
                <div class="row">

                </div>

                <div class="card">

                    <div class="card-body pb-0">
                        @if($user->validations->count() > 0)
                            @foreach($user->validations as $contribution)
                                @php
                                    $payments = $contribution->banque->payments()->where('is_confirmed', false)->get()
                                @endphp
                                <h5 class="card-title">{{ $contribution->name }}</h5>
                                @if($payments->count() > 0)
                                    @foreach ($payments as $payment)
                                        <div class="card info-card sales-card">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $payment->user->name }}</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-currency-exchange text-success"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6 class="text-success">{{ number_format($payment->amount, 2,   ".", " ") }} DH</h6>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-flex align-items-center">
                                                    <img class="payment_img" src="{{ env('APP_URL') }}/uploads/{{ $payment->file }}" alt="">
                                                </div>
                                                <br>
                                                <div class="d-flex justify-content-center">
                                                    <form id="validate_payment" method="POST" action="{{ route('savevalidation') }}" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="payment" value="{{ $payment->id }}" >
                                                        <input type="hidden" name="validate" class="validate" value="" >
                                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                            <button type="button" data-message="Valider le paiement" data-action="true" class="btn btn-success">Valider</button>
                                                            <button type="button" data-message="Annuler le paiement" data-action="false" class="btn btn-danger">Annuler</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                        Aucun nouveau paiement<br><br>
                                @endif
                            @endforeach

                        @endif
                        {{-- @if($payments->count() > 0)
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
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
