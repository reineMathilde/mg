@extends('master')

@section('title')

Dashboard

@endsection

@section('content')



<div class="section">

<div class="head-title">
    <div class="left">
        <h1>Supervision Et Statistiques Opération</h1>

    </div>

</div>

</div>





            <!-- ======================= Cards ================== -->
            <div class="cardBox">


                <a href="{{ url('/statistique') }}">

                    <div class="card">
                        <div>
                            <div class="numbers">{{ $appels }}</div>
                            <div class="cardName">Total Appels</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                    </div>


                    </a>


                <!--
                     <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>  -->


                <a href="{{ url('/statistique') }}">




                <div class="card">

                    <div>
                        <div class="numbers">{{ $plaquette }}</div>
                        <div class="cardName">Envoie Plaquettes</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person"></ion-icon>
                    </div>

                </div>
            </a>


            <a href="{{ url('/statistique') }}">

                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Contacts non argumentés non définitifs</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>

                </a>


            </div>



            <div class="carte">


                <a href="{{ url('/statistique') }}">

                    <div class="card">
                        <div>
                            <div class="numbers">{{ $rdv }}</div>
                            <div class="cardName">Rendez-Vous</div>
                        </div>

                        <div class="iconBx">
                            <ion-icon name="calendar"></ion-icon>
                        </div>
                    </div>


                    </a>

                <a href="{{ url('/statistique') }}">



                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">contacts non argumentés définitifs</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person"></ion-icon>
                    </div>
                </div>

                </a>



                <a href="{{ url('/statistique') }}">


                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Productivité et performance</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="person"></ion-icon>
                    </div>
                </div>


                </a>










            </div>









@endsection
