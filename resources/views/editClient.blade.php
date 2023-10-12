




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


    <title>MG MOTORS | Modifier client</title>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">





<div class="navigation">
    <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <div class="logo">

                        <img src="frontend/img/mgMotors.png">

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

























<div class="section">

    <div class="head-title">
        <div class="left">
            <h1>Appel </h1>

        </div>
        <a href="#" class="btn-download">
            <ion-icon name="cloud-download"></ion-icon>
            <i class='bx bxs-cloud-download' ></i>
            <span class="text">Download PDF</span>
        </a>
    </div>






<body>





<div class="contain">



<div class="title">


</div>
@if (count($errors)>0)

<div class="alert-alert-dangers">
 <ul>
 @foreach ($errors->all() as $error)

 <li>{{ $error }}</li>

 @endforeach

</ul>



</div>




@endif




@if (Session::has("status"))
<br>
<div class="alert">
  {{ Session::get('status') }}


</div>



@endif


    <form action="{{url('/admin/updateClient/'.$afficherAppel->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
<!--mettre -->

<div class="debe">




 <div class="debeone">



    <div class="fie">
        <label for="">MSSDN Entrant:</label>

           <input type="text" placeholder="Entrez numero Entrant......." name="numeroEntrant" value="{{ $afficherAppel->numeroEntrant  }}" pattern="[0-9]+" required>
          <i class='bx bxs-group'></i>
      </div>






   </div>







</div>


<div class="necessaire">

    <h3>Information sur le client </h3> <br>
</div>


<div class="dbl-field">

    <div class="field">


        <label for="">Civilité:</label>

        <select name="civilite" id="" required>
            <option selected="selected" value="{{ $afficherAppel->civilite }}" > {{ $afficherAppel->civilite }}</option>
             <option value="Monsieur">Masculin</option>
              <option value ="Madame">Madame</option>
              <option value ="Mademoiselle">Mademoiselle</option>
            </select>





    </div>






</div>



<div class="dbl-field">





    <div class="field">
        <label for="">Nom:</label>

           <input type="text" placeholder="Entrez  Nom......." name="nameClient"  value="{{ $afficherAppel->nameClient }}" pattern="[^\d]+" required>
          <i class='bx bxs-group'></i>
      </div>

      <div class="field">
        <label for="">Prenom:</label>
    <input type="text" placeholder="Entrez Prenom........." name="usernameClient"  value=" {{ $afficherAppel->usernameClient }} " pattern="[^\d]+"   required>
      <i class='bx bxs-group'></i>
    </div>




   </div>



<div class="dbl-field">





<div class="field">
     <label for="">Contact:</label>

    <input type="text" placeholder="Entrez Numero........" id="contact" pattern="[0-9]+"  value=" {{ $afficherAppel->contact }}" name="contact" required>
    <i class="bx bxs-phone-call"></i>
 </div>


 <div class="field">
    <label for="">Whatsapp:</label>

    <input type="text" placeholder="Entrez  Whatsapp....." id="whatsapp" pattern="[0-9]+"  value="{{ $afficherAppel->whatsapp}} " name="whatsapp" required>
    <i class="bx bxs-phone-call"></i>
 </div>



</div>


<div class="dbl-field">




      <div class="field">
        <label for="">Fonction:</label>
        <i class="bx bxs-group"></i>
        <input type="text" placeholder="Entrez  Fonction........" name="fonction"   value="{{ $afficherAppel->fonction }}"  required>
    </div>





    <div class="field">
        <label for="">Nom Entreprise:</label>
    <input type="text" placeholder="Entrez Nom Entreprise......." name="entreprise"    value="{{ $afficherAppel->entreprise }} "  required>
      <i class='bx bxs-envelope'></i>
    </div>

</div>





<div class="dbl-field">


    <div class="field">
      <label for="">Domaine Activité:</label>
      <i class="bx bxs-group"></i>
      <input type="text" placeholder="Entrez  Domaine d'Activité........" name="activite"    value="{{ $afficherAppel->activite }}  " required >
  </div>





  <div class="field">
      <label for="">Email:</label>
  <input type="email" placeholder="Entrez Email......." name="email"    value="{{ $afficherAppel->email }} " required>
    <i class='bx bxs-envelope'></i>
  </div>

</div>






<div class="necessaire">

    <h3>Codification appel </h3> <br>
</div>




<div class="dbl-field">







    <div class="field">

     <label for="">Statut Appel:</label>
        <select name="statutAppel" id="" required>
        <option selected="selected" value="{{ $afficherAppel->statutAppel }} "  >{{ $afficherAppel->statutAppel }}</option>
         <option value="Accord">Accord</option>
          <option value ="Refus">Refus</option>
          <option value ="Rappel">Rappel</option>
          <option value ="Hors-Cible">Hors-Cible</option>
          <option value ="Pas pour le moment">Pas pour le moment</option>
          <option value ="N'est pas interessé">N'est pas interessé</option>
          <option value ="Rendez-Vous">Refus</option>
          <option value ="Dialogue Impossible">Refus</option>
        </select>

        </div>

      <div class="field">
        <label for="">Date Rendez-Vous:</label>
    <input type="date" placeholder="Entrez Date Rendez-Vous........." name="dateRdv" value="{{ $afficherAppel->dateRdv }}" required>
      <i class='bx bxs-group'></i>
    </div>




   </div>






<div class="dbl-field">





   <div class="field">
     <label for="">Heure Rendez-Vous:</label>

    <input type="text" placeholder="Entrez Heure Rendez-vous.." id="heureRdv"  name="heureRdv"  value="{{ $afficherAppel->heureRdv }} " required>
    <i class="bx bxs-phone-call"></i>
   </div>


   <div class="field">
    <label for="">Envoyer Plaquette par mail/Whatsapp:</label>

    <select name="plaquette" id="" required>
        <option selected="selected" value=" {{ $afficherAppel->plaquette }}  " >{{ $afficherAppel->plaquette }}</option>
         <option value="Oui">Oui</option>
          <option value ="Non">Non</option>
        </select>

    </div>


</div>


<div class="dbl-field">


      <div class="field">
        <label for="">Date Rappel:</label>
        <i class="bx bxs-group"></i>
        <input type="date" placeholder="Date Rappel......." name="dateRappel" value="{{ $afficherAppel->dateRappel }}" required>
    </div>





    <div class="field">
        <label for="">Heure Rappel:</label>
    <input type="text" placeholder="Entrez Heure Rappel......." name="heureRappel"  value="{{ $afficherAppel->heureRappel }}"  required>
      <i class='bx bxs-envelope'></i>
    </div>

</div>





<div class="dbl-field">


    <div class="field">
      <label for="">Commentaire Fin d'Appel:</label>
      <i class="bx bxs-group"></i>
      <textarea name="commentaire" id="" cols="15" rows="20" value="{{ $afficherAppel->commentaire}} "></textarea>
  </div>






</div>
























<div class="button-area">

<input type="submit" value="Modifier" name="envoyer" class="btn" />

</div>













            </div>


    </form>




    </div>



</body>







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
