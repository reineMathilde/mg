@extends('master')

@section('title')

Liste Appel

@endsection

@section('content')


<div class="section">

    <div class="head-title">
        <div class="left">
            <h1>Appel </h1>
        </div>






        <form action="#">

            <div class="form-input">

                <input type="search" id="search" placeholder="Rechercher...">
                <button type="submit" class="search-btn"><ion-icon name="search-outline"></ion-icon></button>
            </div>
        </form>

        <a href="#" class="btn-download">
            <ion-icon name="cloud-download"></ion-icon>
            <i class='bx bxs-cloud-download' ></i>
            <span class="text">Download PDF</span>
        </a>
    </div>








<body style>



    <div class="table-data">



     <div class="order">
                <div class="head">

                <a href="" class="btn3">
                           <i class="bx bxs-joystick-button"></i>
                           <span>Ajouter Appel</span>
                           </a>
                </div>


       <input type="hidden" {{ $increment=1 }} value=" "  />


    <table>
    <thead>
    <tr>
    <th>Identifiant</th>
    <th> MSSDN </th>
    <th>civilité</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Contact</th>
    <th>Whatsapp</th>
    <th>Fonction</th>
    <th>Nom Entreprise</th>
    <th>Domaine Activité</th>
    <th>Email</th>
    <th> Statut Appel</th>
    <th>Date Rdv</th>
    <th>Heure Rdv</th>
    <th>Envoie Plaquette</th>

    <th>Date Rappel</th>
    <th>Heure Rappel</th>
    <th>Commentaire</th>
    <th>date creation</th>



    <th>Action</th>

    </tr>

    </thead>

    @foreach ( $afficherAppels as  $afficherAppel)


    <tbody>


    <tr>
        <td>  {{ $increment}}   </td>




        <td> {{ $afficherAppel->numeroEntrant }} </td>
        <td> {{ $afficherAppel->civilite }} </td>
        <td> {{ $afficherAppel->nameClient }} </td>
        <td> {{ $afficherAppel->usernameClient }} </td>
        <td> {{ $afficherAppel->contact }} </td>
        <td> {{ $afficherAppel->whatsapp}} </td>
        <td> {{ $afficherAppel->fonction }} </td>

        <td> {{ $afficherAppel->entreprise }} </td>
        <td> {{ $afficherAppel->activite }} </td>
        <td> {{ $afficherAppel->email }} </td>
        <td> {{ $afficherAppel->statutAppel }} </td>
        <td> {{ $afficherAppel->dateRdv }} </td>
        <td> {{ $afficherAppel->heureRdv }} </td>
        <td> {{ $afficherAppel->plaquette }} </td>
        <td> {{ $afficherAppel->dateRappel }} </td>
        <td> {{ $afficherAppel->heureRappel }} </td>
        <td> {{ $afficherAppel->commentaire}} </td>
        <td> {{ $afficherAppel->created_at}} </td>















    <td>









        <input type="hidden" {{ $increment++ }} value=" "  />

        <div class="aligner">
        {{-- gerer status du patient --}}


        <div class="align">

          <a href="{{url('/admin/editClient/'.$afficherAppel->id)}}"><span>Editer</span></a>

        </div>







       </form>

    </div>




    </td>





    </tr>

    </tbody>


    @endforeach






    <tfoot>
    <tr>
    <td colspan="15">






    </td>




    </tr>





    </tfoot>


    </table>



    <script src="  {{ asset('frontend/includes/app.js') }} "></script>


    <script>


        document.addEventListener("DOMContentLoaded", function () {
                const searchInput = document.getElementById("search");
                const rows = document.querySelectorAll("tbody tr");

                searchInput.addEventListener("input", function () {
                    const searchTerm = this.value.toLowerCase();

                    rows.forEach(function (row) {
                        const cells = row.getElementsByTagName("td");
                        let rowMatchesSearch = false;

                        for (let i = 0; i < cells.length; i++) {
                            const cell = cells[i];
                            const cellText = cell.textContent.toLowerCase();

                            if (cellText.includes(searchTerm)) {
                                rowMatchesSearch = true;
                                break;
                            }
                        }

                        if (rowMatchesSearch) {
                            row.style.display = "";
                        } else {
                            row.style.display = "none";
                        }
                    });
                });
            });









        </script>

    </div>


    </body>


@endsection
