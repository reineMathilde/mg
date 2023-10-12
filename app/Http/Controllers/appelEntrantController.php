<?php

namespace App\Http\Controllers;
use App\Models\appelEntrant;

use Illuminate\Http\Request;

class appelEntrantController extends Controller
{
    //

     //pour ajouter du client

     public function  saveClient  (Request $request){


        $this->validate($request, [
            'email' =>'required|unique:appel_entrants',




        ]);

        $appels=new appelEntrant();
        $appels->numeroEntrant= $request->input('numeroEntrant');
        $appels->civilite= $request->input('civilite');

        $appels->nameClient= $request->input('nameClient');
        $appels->usernameClient= $request->input('usernameClient');
        $appels->contact= $request->input('contact');

        $appels->whatsapp= $request->input('whatsapp');
        $appels->fonction= $request->input('fonction');
        $appels->entreprise= $request->input('entreprise');
        $appels->activite= $request->input('activite');

        $appels->email= $request->input('email');
        $appels->statutAppel= $request->input('statutAppel');
        $appels->dateRdv= $request->input('dateRdv');
        $appels->heureRdv= $request->input('heureRdv');
        $appels->plaquette= $request->input('plaquette');
        $appels->dateRappel= $request->input('dateRappel');

        $appels->heureRappel= $request->input('heureRappel');
        $appels->commentaire= $request->input('commentaire');

        $appels->save();
        return back()->with("status", "Le client a été ajouté avec succès!");

    }



    public function editClient($id){
        $afficherAppel= appelEntrant::find($id);



        return view('editclient')->with('afficherAppel',  $afficherAppel);
    }




    public function updateClient($id,Request $request){
        $afficherAppel= appelEntrant::find($id);

        $afficherAppel->numeroEntrant= $request->input('numeroEntrant');
        $afficherAppel->civilite= $request->input('civilite');

        $afficherAppel->nameClient= $request->input('nameClient');
        $afficherAppel->usernameClient= $request->input('usernameClient');
        $afficherAppel->contact= $request->input('contact');

        $afficherAppel->whatsapp= $request->input('whatsapp');
        $afficherAppel->fonction= $request->input('fonction');
        $afficherAppel->entreprise= $request->input('entreprise');
        $afficherAppel->activite= $request->input('activite');

        $afficherAppel->email= $request->input('email');
        $afficherAppel->statutAppel= $request->input('statutAppel');
        $afficherAppel->dateRdv= $request->input('dateRdv');
        $afficherAppel->heureRdv= $request->input('heureRdv');
        $afficherAppel->plaquette= $request->input('plaquette');
        $afficherAppel->dateRappel= $request->input('dateRappel');

        $afficherAppel->heureRappel= $request->input('heureRappel');
        $afficherAppel->commentaire= $request->input('commentaire');









        $afficherAppel->update();
        return back()->with("status", "Client modifié avec succès!");


    }

}
