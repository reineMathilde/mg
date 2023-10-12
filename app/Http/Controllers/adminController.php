<?php

namespace App\Http\Controllers;
use App\Models\appelEntrant;
use App\Models\loginMg;
use Session;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //


     //
     public function login(){
        return view("login");
    }


    public function dashboard(){
        $data='';
        if(Session::has('loginId')){

            $data=loginMg::where('id', '=', Session::get('loginId'))->first();
            if($data){

                $data =$data->name;
            }
        }


        $appels=appelEntrant::count();
        $rdv=appelEntrant::where('statutAppel',"Rendez-Vous")->count();
        $plaquette=appelEntrant::where('plaquette','Oui')->count();

        return view("dashboard",compact('data', 'appels', 'rdv',"plaquette" ));
    }







    public function  ajoutAppelRentrant(){

        return view(" ajoutAppelRentrant");





    }



    public function  listeAppel(){
        $afficherAppels=appelEntrant::get();
        return view("listeAppel")->with("afficherAppels",$afficherAppels);
    }


    public function statistique(){




        $accord=appelEntrant::where('statutAppel','Accord')->count();
        $refus=appelEntrant::where('statutAppel','Refus')->count();


        $rappel=appelEntrant::where('statutAppel','Rappel')->count();
        $horsCible=appelEntrant::where('statutAppel','Hors-Cible')->count();

        $pasPourMoment=appelEntrant::where('statutAppel','Pas pour le moment')->count();
        $noInteresed=appelEntrant::where('statutAppel',"N'est pas interessé")->count();

        $rdv=appelEntrant::where('statutAppel',"Rendez-Vous")->count();


        $autres=appelEntrant::where('statutAppel',"Autres(Preciser)")->count();
        $appelInterrompu=appelEntrant::where('statutAppel',"Appels Interrompu")->count();



        $noReponse=appelEntrant::where('statutAppel'," Pas de reponse")->count();
        $mauvaise=appelEntrant::where('statutAppel'," Mauvaise qualité de communication")->count();

        $injoignable=appelEntrant::where('statutAppel'," Appel Injoignable(repondeur sous reseau)")->count();



        $dialogue=appelEntrant::where('statutAppel',"Dialogue Impossible")->count();


            // Code pour les administrateurs

        return view("statistique",compact('accord', 'refus','rappel','horsCible','pasPourMoment','noInteresed','rdv','autres','appelInterrompu',
    'noReponse', 'mauvaise','injoignable', 'dialogue' ));





            }




        










}
