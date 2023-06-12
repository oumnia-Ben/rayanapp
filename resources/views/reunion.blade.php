<x-app-layout>
    <div class="pagetitle">
        <h1>Réunion</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Accueil</a></li>
                <li class="breadcrumb-item active">Réunion</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->




    @foreach ($reunions as $reunion)
        <div class="card info-card sales-card">
            <h5 class="card-title"></h5>
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-caret-right-fill text-success"></i>
                    </div>
                    <div>
                        <h6 class="text-success"> Reunion </h6>
                    </div>
                </div>
                        <div class="text-default fw-bold"> {{ $reunion->titre }} </div>
        
                        <div class="text-default small">
                            <b>Date : </b>{{ $reunion->date }}
                        </div>

                        <div class="text-default small">
                            <b>Heure : </b>{{ $reunion->heure }}
                        </div>

                        <div class="text-default small">
                            <b>Habitants : </b>{{ $reunion->habitants }}
                        </div>

                        <div class="text-default small">
                            <b>Description : </b>{{ $reunion->discription }}
                        </div>    
            </div> 
        </div>
         
    @endforeach




    {{-- 
    <div class="card">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Date</th>
                <th scope="col">Heure</th>
                <th scope="col">Habitabts</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reunions as $reunion)
            <tr>
              <td class="small">{{ $reunion->titre }}</td>
              <td class="small">{{ $reunion->date }}</td>
              <td class="small">{{ $reunion->heure }}</td>
              <td class="small">{{ $reunion->habitants }}</td>
              <td class="small">{{ $reunion->discription }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}

</x-app-layout>
