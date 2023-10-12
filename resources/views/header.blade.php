


<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <div class="logo">

                        <img src="frontend/img/moris.png">

                     </div>

                </span>

                <span class="titl">MG-MOTORS</span>
            </a>
        </li>

        <li>
            <a href="{{ url('/dashboard') }}">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Tableau de Bord</span>
            </a>
        </li>


        <li>
            <a href="{{ url('/ajoutAppelRentrant') }}">
                <span class="icon">
                    <ion-icon name="call-outline"></ion-icon>

                </span>
                <span class="title">Appels</span>
            </a>
        </li>


        <li>
            <a href="{{ url('/listeAppel') }}">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Liste Appel</span>
            </a>
        </li>


        <li>
            <a href="{{ url('/statistique') }}">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Statistique</span>
            </a>
        </li>













        <li>
            <a href="{{ url('/logout') }}">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Deconnexion</span>
            </a>
        </li>
    </ul>
</div>
