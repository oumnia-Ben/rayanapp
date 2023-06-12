<x-app-layout>
    <div class="pagetitle">
        <h1>Résidence</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Résidence</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body pb-0">
                        <h5 class="card-title">Appartements</h5>
                        @foreach($stages as $stage)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Etage {{ $stage }}</h5>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="small" scope="col">Appt</th>
                                            <th class="small" scope="col">Propriétaire</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        @if($user->stage == $stage)
                                        <tr>
                                            <th class="" scope="row">
                                                <span class="badge bg-success badge-number">{{ $user->apartment }}</span>
                                            </th>
                                            <td class="small">
                                                <div class="py-1">
                                                {{ $user->name }}
                                                </div>
                                                @if($user->phone)
                                                <div class="">
                                                    <a class="text-success" href="tel:{{ $user->phone }}">
                                                        <i class="bi bi-telephone-forward"></i>
                                                        {{ $user->phone }}
                                                    </a>
                                                </div>
                                                @endif

                                                @if($user->email)
                                                <div class="">
                                                    <a class="text-primary" href="mailto:{{ $user->email }}">
                                                        <i class="bi bi-envelope"></i> {{ $user->email }}
                                                    </a>
                                                </div>
                                                @endif

                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
