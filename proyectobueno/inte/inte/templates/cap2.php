
<<!DOCTYPE html>
<html>

  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->
        <h2 class="active"> Captura de Informacion</h2>


        <!-- Icon -->
        <div class="fadeIn first">
          <img src="https://img.icons8.com/small/452/enter-pin.png" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form action="/step4/" method="GET">
          <input type="text" readonly="True" hidden= "True" id="tf" class="fadeIn second" name="tf"  value= {{new1}} >
          <input type="text" id="t1" class="fadeIn second" name="t1" maxlength="50" pattern="[A-Za-z]+" placeholder="Nombre del Conductor">
          <input type="text" id="t2" class="fadeIn third" name="t2" maxlength="50" pattern="[A-Za-z0-9]+" placeholder="Marca del Vehiculo">
          <input type="text" id="t3" class="fadeIn second" name="t3" maxlength="50" pattern="[A-Za-z0-9]+" placeholder="Modelo del Vehiculo">
          <input type="text" id="t4" class="fadeIn second" name="t4" maxlength="50" pattern="[A-Za-z]+" placeholder="Tipo de Vehiculo">
          <input type="text" id="t5" class="fadeIn third" name="t5" maxlength="50" pattern="[0-9]+" placeholder="Número economico">
          <input type="time" id="t7" class="fadeIn second" name="t7" pattern="[0-9]+" placeholder="Hora">
          <input type="date" id="t9" class="fadeIn second" name="t9" placeholder="Fecha">
          <input type="text" id="t10" class="fadeIn second" name="t10" pattern="[0-9]+" maxlength="3" placeholder="Número de articulo quebrantado">
          <input type="text" id="t11" class="fadeIn third" name="t11" maxlength="50" pattern="[A-Za-z]+" placeholder="Motivo de la infraccion">
          <input type="text" id="t12" class="fadeIn second" name="t12" maxlength="10" pattern="[A-Za-z0-9]+" placeholder="Clave">
          <input type="text" id="t13" class="fadeIn second" name="t13" maxlength="50" pattern="[A-Za-z]+" placeholder="Garantia recogida">
          <input type="text" id="t14" class="fadeIn third" name="t14" maxlength="50" pattern="[A-Za-z0-9]+" placeholder="Lugar">
          <input type="text" id="t15" class="fadeIn second" name="t15" maxlength="50" pattern="[A-Za-z0-9]+"  placeholder="Ruta">
          <input type="text" readonly="True" hidden= "True" id="t16" class="fadeIn second" name="t16"  value= {{query}} >
          <input type="password" readonly="True" hidden= "True" id="tp" class="fadeIn second" name="tp"  value= {{query2}} >
          <input type="submit" class="fadeIn fourth" value="Procesar Multa">
        </form>


        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">SOLO PERSONAL AUTORIZADO</a>
        </div>

      </div>
    </div>
  </body>
  <script>
  window.opener.location.reload();
  window.close();
</script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

/* BASIC */

html {
  background-color: #56baed;
}

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px;
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

h2.inactive {
  color: #cccccc;
}

h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}



/* OTHERS */

*:focus {
    outline: none;
}

#icon {
  width:60%;
}

* {
  box-sizing: border-box;
}
  </style>
</html>
