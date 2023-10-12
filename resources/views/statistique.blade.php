@extends('master')

@section('title')

Ajouter APPEL

@endsection

@section('content')


<div class="section">

    <div class="head-title">
        <div class="left">
            <h1>Les Statistiques </h1>
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

    <div class="heado">
    <h3> Emission d'Appels</h3>


    </div>





    <div class="table-statistique">





     <div class="ord">
                <div class="head">




                </div>


           <div class="tableOne">
            <div class="tableTwo">


                <table>
                    <thead>
                        <tr>
                            <th>Traitement des demandes</th>
                            <th>Totals</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                                <p>Accord</p>
                            </td>
                            <td>{{  $accord }}</td>

                        </tr>
                        <tr>
                            <td>
                           <p>refus</p>
                            </td>
                            <td>{{ $refus }}</td>

                        </tr>
                        <tr>
                            <td>

                                <p>Rappel</p>
                            </td>
                            <td>{{ $rappel }}</td>

                        </tr>
                        <tr>
                            <td>

                                <p>Hors cible</p>
                            </td>
                            <td>{{ $horsCible }}</td>

                        </tr>
                        <tr>
                            <td>

                                <p>Pas pour le moment</p>
                            </td>
                            <td>{{ $pasPourMoment }}</td>

                        </tr>

                        <tr>
                            <td>

                                <p>N'est pas Interessé</p>
                            </td>
                            <td>{{ $noInteresed }}</td>

                        </tr>


                        <tr>
                            <td>

                                <p>Rendez-Vous</p>
                            </td>
                            <td>{{ $rdv }}</td>

                        </tr>


                        <tr>
                            <td>

                                <p>Autres preciser</p>
                            </td>
                            <td>{{ $autres }}</td>

                        </tr>
                    </tbody>
                </table>



             </div>

                <div class="tableTwo">



                <table>
                    <thead>
                        <tr>
                            <th>Contacts Non Argumentés non définitfs</th>
                            <th>Totals</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                                <p>Appels Interrompus</p>
                            </td>
                            <td>{{  $appelInterrompu }}</td>

                        </tr>
                        <tr>
                            <td>
                           <p>Pas de reponse</p>
                            </td>
                            <td>{{   $noReponse }}</td>

                        </tr>
                        <tr>
                            <td>

                                <p>Mauvaise qualité de communication</p>
                            </td>
                            <td>{{ $mauvaise }}</td>

                        </tr>




                        <tr>
                            <td>

                                <p> Appel Injoignable(repondeur sous reseau)</p>
                            </td>
                            <td>{{ $injoignable }}</td>

                        </tr>


                    </tbody>
                </table>

            </div>


            <div class="tableTwo">




                <table>
                    <thead>
                        <tr>
                            <th>Contacts Non Argumentés définitfs</th>
                            <th>Totals</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>

                                <p>Dialogue Impossible</p>
                            </td>
                            <td>{{ $dialogue }}</td>

                        </tr>


                    </tbody>
                </table>


            </div>


  </div>






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
