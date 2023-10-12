<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="{{asset('frontend/includes/style.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css ' rel='stylesheet'>


    <title>MG MOTORS | @yield('title')</title>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">


        @include('header')


        <!-- ========================= Main ==================== -->
        <div class="main">

        <!--   <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div> -->



                <div class="logo">







                       <!-- <ion-icon name="search-outline"></ion-icon>-->


                </div>

                <!--  <div class="user">
                    <img src="frontend/img/portrait.png">

                </div> -->


            </div>



        </div>



        <nav>
			
			<a href="#" class="nav-link">Categories 	</a>

			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">Bienvenue!</span>
			</a>
			<a href="#" class="profile" >


				<img src="frontend/img/femme.png">


			</a>
		</nav>



        @yield('content')

    </div>

        <!-- =========== Scripts =========  -->
        <script src=" {{ asset('frontend/includes/main.js') }} "></script>

        <!-- ====== ionicons ======= -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



</body>

 </html>

