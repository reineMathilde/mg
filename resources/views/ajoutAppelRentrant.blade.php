
@extends('master')

@section('title')

Ajouter APPEL

@endsection

@section('content')






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


    <form action="{{url('/saveClient')}}" method="POST" enctype="multipart/form-data">
      @csrf
<!--mettre -->

<div class="debe">




 <div class="debeone">



    <div class="fie">
        <label for="">MSSDN Entrant:</label>

           <input type="text" placeholder="Entrez numero Entrant......." name="numeroEntrant" pattern="[0-9]+" required>
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
            <option selected="selected" value="">-----------Selectionnez----------</option>
             <option value="Monsieur">Masculin</option>
              <option value ="Madame">Madame</option>
              <option value ="Mademoiselle">Mademoiselle</option>
            </select>





    </div>






</div>



<div class="dbl-field">





    <div class="field">
        <label for="">Nom:</label>

           <input type="text" placeholder="Entrez  Nom......." name="nameClient" pattern="[^\d]+" required>
          <i class='bx bxs-group'></i>
      </div>

      <div class="field">
        <label for="">Prenom:</label>
    <input type="text" placeholder="Entrez Prenom........." name="usernameClient" pattern="[^\d]+"   required>
      <i class='bx bxs-group'></i>
    </div>




   </div>



<div class="dbl-field">





<div class="field">
     <label for="">Contact:</label>

    <input type="text" placeholder="Entrez Numero........" id="contact" pattern="[0-9]+" name="contact" required>
    <i class="bx bxs-phone-call"></i>
 </div>


 <div class="field">
    <label for="">Whatsapp:</label>

    <input type="text" placeholder="Entrez  Whatsapp....." id="contact" pattern="[0-9]+" name="whatsapp" required>
    <i class="bx bxs-phone-call"></i>
 </div>



</div>


<div class="dbl-field">




      <div class="field">
        <label for="">Fonction:</label>
        <i class="bx bxs-group"></i>
        <input type="text" placeholder="Entrez  Fonction........" name="fonction"  required>
    </div>





    <div class="field">
        <label for="">Nom Entreprise:</label>
    <input type="text" placeholder="Entrez Nom Entreprise......." name="entreprise"   required>
      <i class='bx bxs-envelope'></i>
    </div>

</div>





<div class="dbl-field">


    <div class="field">
      <label for="">Domaine Activité:</label>
      <i class="bx bxs-group"></i>
      <input type="text" placeholder="Entrez  Domaine d'Activité........" name="activite" required >
  </div>





  <div class="field">
      <label for="">Email:</label>
  <input type="email" placeholder="Entrez Email......." name="email"   required>
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
        <option selected="selected" value="">------------Sélectionner----------------</option>
         <option value="Accord">Accord</option>
          <option value ="Refus">Refus</option>
          <option value ="Rappel">Rappel</option>
          <option value ="Hors-Cible">Hors-Cible</option>
          <option value ="Pas pour le moment">Pas pour le moment</option>
          <option value ="N'est pas interessé">N'est pas interessé</option>
          <option value ="Rendez-Vous">Rendez-Vous</option>
          <option value ="Dialogue Impossible">Dialogue Impossible</option>
          <option value="Appels Interrompu">Appels Interrompu</option>
          <option value="Pas de reponse">Pas de reponse</option>
          <option value="Mauvaise qualité de communication">Mauvaise qualité de communication</option >
            <option value="Appel Injoignable(repondeur sous reseau)">Appel Injoignable(repondeur sous reseau)</option>
            <option value="Autres(Preciser)">Autres(Preciser)</option>
        </select>

        </div>

      <div class="field">
        <label for="">Date Rendez-Vous:</label>
    <input type="date" placeholder="Entrez Date Rendez-Vous........." name="dateRdv" required>
      <i class='bx bxs-group'></i>
    </div>




   </div>






<div class="dbl-field">





   <div class="field">
     <label for="">Heure Rendez-Vous:</label>

    <input type="text" placeholder="Entrez Heure Rendez-vous.." id="heureRdv"  name="heureRdv"  required>
    <i class="bx bxs-phone-call"></i>
   </div>


   <div class="field">
    <label for="">Envoyer Plaquette par mail/Whatsapp:</label>

    <select name="plaquette" id="" required>
        <option selected="selected" value="">-----------Selectionnez----------</option>
         <option value="Oui">Oui</option>
          <option value ="Non">Non</option>
        </select>

    </div>


</div>


<div class="dbl-field">


      <div class="field">
        <label for="">Date Rappel:</label>
        <i class="bx bxs-group"></i>
        <input type="date" placeholder="Date Rappel......." name="dateRappel"  required>
    </div>





    <div class="field">
        <label for="">Heure Rappel:</label>
    <input type="text" placeholder="Entrez Heure Rappel......." name="heureRappel"  required>
      <i class='bx bxs-envelope'></i>
    </div>

</div>





<div class="dbl-field">


    <div class="field">
      <label for="">Commentaire Fin d'Appel:</label>
      <i class="bx bxs-group"></i>
      <textarea name="commentaire" id="" cols="15" rows="20"></textarea>
  </div>






</div>
























<div class="button-area">

<input type="submit" value="Envoyer" name="envoyer" class="btn" />

</div>













            </div>


    </form>




    </div>



</body>



@endsection
