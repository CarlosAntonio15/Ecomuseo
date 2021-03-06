@extends('layouts.web')
@section('title', 'Actividades')
<title>Actividades</title> 
@section('content')
   
<div>
  <div class="container actividades">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <!--<div class="card">-->
            <div class="container">
              @if(Session::has('message'))
                <div class="alert alert-info alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    {{ Session::get('message') }}
                </div>
              @endif
              <div class="section-title">
                <h3>Descubre más sobre nosotros</h3>
              </div>
            </div>
          <div class="container" data-aos="fade-up">
             <div class="card-columns">
                <div class="card">
                   <div class="col mt-3 mb-4">
                   <h5>Auditorio de eventos</h5>
                    <img src="img/eventos.jpg" width="100" height="200"/>
                    <p class="text-justify">
                          Un excelente lugar para aprender y para reunirse. Si tienes necesidad 
                          de un lugar para organizar una reunión, una clase...<details> <summary>Leer más/menos</summary> Tienen excelentes precios 
                          y el trato es lo mejor.
                          Las condiciones del lugar son agradables, el espacio y los
                          beneficios del ambiente y entorno del EM son buenos.

                          El auditorio del EM es el lugar ideal para tener un día de trabajo eficiente.
                          La temperatura, el mobiliario, el wifi y el entorno general, todo funciona en 
                          armonía para inspirarte a sentarte y ser productivo.</details>
                     </p>
                   </div>
                </div>
                <div class="card">
                 <div class="col mt-3 mb-4">
                 <h5>Exhibición permanente</h5>
                    <img src="img/auditorio.jpg" width="100" height="200"/>
                   <p class="text-justify">
                            La exposición incluye objetos que usaron los mineros para extraer el mineral y obtener el oro 
                            mediante diferentes<details> <summary>Leer más/menos</summary> técnicas, lámparas de canfín,
                            objetos bélicos de la época, aparatos como la radio, que a finales del siglo XIX revolucionaron
                            la sociedad.</details>
                    </p>
                 </div>
                </div>
                <div class="card">
                  <div class="col mt-3 mb-4">
                  <h5>Galería piezas históricas</h5>
                    <img src="img/piezash.jpeg" width="100" height="200"/>
                    <p class="text-justify">
                          Se brindan exhibiciones a visitantes donde se muestran todas las piezas históricas
                          que tiene el Ecomuseo, junto<details> <summary>Leer más/menos</summary> con la historia que estas abarcan.</details>
                    </p>
                  </div>
                </div>
                <div class="card">
                 <div class="col mt-3 mb-4">
                 <h5>Tours y visitas guiadas</h5>
                    <img src="img/tour.jpg" width="100" height="200"/>
                   <p class="text-justify">
                          El tour iniciará su recorrido primeramente por parte del área de jardines y 
                          luego por senderos que le llevará al bosque donde<details> <summary>Leer más/menos</summary> tendrá la oportunidad de caminar
                          rodeado de aves, mariposas, insectos, el verde expansivo de los árboles y los
                          cientos de tipos de plantas y hermosa naturaleza. El visitante vivirá y
                          experimentará un excelente ejemplo de cómo después del impacto de la
                          acción humana sobre la naturaleza y su entorno con la actividad minera, ella 
                          por sí misma a logrado regenerarse.

                          Durante el recorrido se hace una reseña histórica y cultural donde el visitante 
                          tendrá la oportunidad de conocer, explorar y aprender; a través de elementos 
                          patrimoniales y etnográficos como las impresionantes Ruinas de lo que fue el 
                          “Edificio de Los Mazos” ( La Planta Procesadora de Oro de la época ), un poco
                          acerca de la historia tanto de Abangares como del resto del país, acercando 
                          al visitante al inicio II Ciclo Minero de Oro de Costa Rica desarrollado en 
                          este lugar como epicentro. También podrá interactuar con recursos presentes 
                          en el bosque que se atraviesa a lo largo del recorrido y que comprende su espacio
                          más rico y diverso en esta sección del recorrido que posee un área de Bosque de 
                          Galería; gracias a la cercanía del rio Abangares, principal rio del cantón, que
                          se disfruta durante el recorrido a un costado de los senderos y que armoniza el
                          mismo con el sonido producido por su caudal.
                          Es esta disposición de bosques y características geográficas, las que convierten este
                          lugar en un santuario de flora y fauna, en la cual el visitante tendrá la oportunidad
                          de conocer gran variedad de especies de árboles, así como, fauna de
                          todo tipo.</details>
                    </p>
                 </div>
                </div>
                <div class="card">
                 <div class="col mt-3 mb-4">
                 <h5>Senderismo</h5>
                    <img src="img/senderismo.jpg" width="100" height="200"/>
                    <p class="text-justify">
                          El recorrido por los senderos del EM, consiste en un maravilloso recorrido de tres 
                          horas entre la biodiversidad que<details> <summary>Leer más/menos</summary> albergan treinta y ocho hectáreas (38 ha) 
                          de bosque secundario, acercando al visitante al medio natural y al conocimiento
                          histórico y cultural no solo de Abangares, si no, también del país, a través de 
                          elementos patrimoniales y etnográficos distribuidos a través de cinco kilómetros
                          de senderos que combinan, jardines, miradores con impresionantes vistas, variedad
                          escénica, pendientes medianas o hasta fuertes escalones y puentes, requieren de
                          esfuerzo y demanda física pero no ofrecen peligro extremo y son accesibles a todo
                          tipo de público en un espacio muy natural y auténtico.</details>
                    </p>
                 </div>
                </div> 
                <div class="card">
                 <div class="col mt-3 mb-4">
                 <h5>Avistamiento de aves</h5>
                    <img src="img/avistamiento.jpg" width="100" height="200" />
                   <p class="text-justify">
                         La Sierra de Abangares puede ser un Paraíso para los amantes de las aves, 
                         de las 900 especies confirmadas que<details><summary>Leer más/menos</summary> hay en Costa Rica, en los alrededores del en
                         se pueden encontrar muchas de ellas. Este lugar por sus características geográficas
                         y su transición entre el bosque tropico seco y trópico húmedo tenemos un despliegue
                         interesante de aves, tanto temprano por la mañana, como en la tarde, así como, en las
                         temporadas de inmigración.
                         Durante el tour se le ayudará a identificarlos por sus formas y colores, así como 
                         también por el reconocimiento de sus llamados. En la expedición regular podremos
                          identificar diferentes tipos y especies.</details>
                        </p>
                 </div>
                </div>             
             </div>

             <div class="row">
              <div class="card col-md-4 offset-md-4 mt-3 mb-5">
              <div class="mt-4 mb-4 ml-4">
                <h5>Precios</h5>
                <p class="text-justify">
                  1- Adultos: 1000 colones.<br>
                  2-	Niños: 500 colones<br>
                </p>
                <div class="col text-right">
                  <a href="{{ route('reservation.createRe')}}" class="btn btn-success">Reservar</a>
                </div>
              </div>
                
              </div>
            </div>
             
          </div>
                  

        </div>  
    </div>
  </div>
</div>
  @endsection