




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Connexion</title>
    <link rel="stylesheet" href="{{ asset('frontend/includes/style1.css')}}" />
  </head>
  <body>

    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">



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


            @if (Session::has("fail"))
            <br>
            <div class="alert">
              {{ Session::get('fail') }}
            </div>

            @endif


            <form action="{{url('/admin/saveLogin/')}}" autocomplete="off" class="sign-in-form" method="post">
              @csrf
              <div class="logo">
                <img src="frontend/img/mgMotors.png" alt="" />
                <h4>MG-MOTORS</h4>
              </div>

              <div class="heading">
                <h2>Bienvenue !</h2>
                <h6>Espace Administrateur de MG-Motors</h6>

                <a href="#" class="toggle"></a>
              </div>


              <div class="actual-form">



                <div class="input-wrap">
                  <input   type="email"   class="input-field" autocomplete="off" name="email" value="{{ old('email') }}"  required />
                  <label>Email *</label>
                </div>

                <div class="input-wrap">
                  <input type="password" minlength="4"  class="input-field" autocomplete="off"  name="password" required />
                  <label>mot de passe *</label>
                </div>

                <input type="submit" value="Se Connecter"  name="envoyer" class="sign-btn" />

              </div>
            </form>


          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="frontend/img/moris.png" class="image img-1 show" alt="" />

            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                 <h2>Connectez-vous!</h2>

                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="{{asset('frontend/includes/app.js')}}"></script>
  </body>
</html>

