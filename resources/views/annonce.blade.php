<x-app-layout>
  <div class="pagetitle">
      <h1>Annonces</h1>
      <nav>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Accueil</a></li>
              <li class="breadcrumb-item active">Annonces</li>
          </ol>
      </nav>
  </div><!-- End Page Title -->


  
  {{-- <section class="section dashboard">
      <div class="row">
          <div class="col-12">
              <div class="row">
                  @foreach($user->banques as $banque)
                  @php
                  $solde = $banque->solde;
                  $stat = "text-success";
                  if($solde == 0)
                  $stat = "text-warning";
                  if($solde < 0) $stat="text-danger" ; $credit=$banque->unpaid_credits()->sum('rest');
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
                    </div>
  </section> --}}


  @foreach ($annonces as $annonce)
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">Annonces </h5>
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Titre</h5>
                  <div class="card-body">{{ $annonce->titre }}</div>
              </div>

              <div class="card-body">
                  <h5 class="card-title">Description</h5>
                  <div class="card-body">{{ $annonce->content }}</div>
              </div>
          </div>
      </div>
  </div>
  @endforeach

</x-app-layout>



{{-- <x-app-layout>
  <div class="pagetitle">
      <h1>Annonces</h1>
      <nav>
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Accueil</a></li>
              <li class="breadcrumb-item active">Annonces</li>
          </ol>
      </nav>
  </div><!-- End Page Title -->


  @foreach ($annonce as $annonce)
  <!-- <div class="card"> -->
  <!-- <div class="card-body"> -->
  <div class="card">
      <div class="card-body">
          <h5 class="card-title">{{$annonce->titre}} </h5>
          <div class="card-body">{{ $annonce->contenu }}
          <!-- <img src="{{asset('uploads/files/'.$annonce->image)}}" > -->
          <img src="uploads/files/res.png">

          </div>
      </div>
  </div>
  <!-- </div> -->
  <!-- </div> -->
  @endforeach

</x-app-layout> --}}