
<!doctype html>
<html lang="en">
   


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?=$this->load->view('includes/head', '', true) ?>
</head>





    <body>

            <!-- ========== Menu Izquierdo ========== -->
            <?=$this->load->view('includes/menu_izdo', '', true) ?>

            <!-- ========== Menu Superior ========== -->
            <?=$this->load->view('includes/menu_sup', '', true) ?>

            <!-- ========== Contenido ========== -->





            <div class="content-wrapper">
                <section class="content">
                  <!-- Insertar contenido aqui -->
                      <main class="page landing-page">
                          <section class="text-justify clean-block features" style="background-color: #800000;height: 150px;">
                              <div class="container">
                              <div class="block-heading">
                                      
                                      <h4 style="background-color: #800000;color: #ffffff;font-size: 68px;height: 150px;">Bienvenido Usuario</h4>
                                  </div>
                                  
                              </div>
                          </section>
                          
                          <section class="bg-mix py-3">
                <div class="container">
                    <div class="card rounded-0">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <h3 class="text-muted">Notificaciones </h3>
        <input type="image" src="<?= base_url('assets/docs/assets/img/noti.png')?>"  width=80px  height=80px />

          <span class="badge badge-warning navbar-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">0 Notificaciones</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 0 Notificaciones
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">ver todas las notificaciones</a>
        </div>
      </li>
        </div>
        <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <h3 class="text-muted">Mensajes </h3>
        <input type="image" src="<?= base_url('assets/docs/assets/img/mensajes.png')?>"  width=80px  height=80px />

          <span class="badge badge-warning navbar-badge">0</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">0 Mensajes</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 0 Mensajes
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Ver todos los mensajes</a>
        </div>
      </li>
        </div>
                                <div class="col-lg-3 col-md-6 d-flex stat my-3">
                                    <div class="mx-auto">
                                    <h3 class="text-muted">Perfil</h3>
                                        
                                        

                                        <input type="image" src="<?= base_url('assets/docs/assets/img/perfil.png')?>"  width=80px  height=80px />


                                    
                                    </div>

                                </div>
                                <div class="col-lg-3 col-md-6 d-flex my-3">
                                    <div class="mx-auto">
                                        
                                        <h3 class="text-muted">Configuracion</h3>
                                        
                                        <input type="image" src="<?= base_url('assets/docs/assets/img/confi.png')?>"  width=80px  height=80px />

                                        
                                      
                                    </div>
                                </div>

                                






                            </div>
                        </div>
                    </div>
                </div>


                


               
 <div >
<aside class=calendario >

<h1 class="title">Calendario </h1>

<div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month"></div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>

    <div class="calendar__week">
        <div class="calendar__day calendar__item">Mon</div>
        <div class="calendar__day calendar__item">Tue</div>
        <div class="calendar__day calendar__item">Wed</div>
        <div class="calendar__day calendar__item">Thu</div>
        <div class="calendar__day calendar__item">Fri</div>
        <div class="calendar__day calendar__item">Sat</div>
        <div class="calendar__day calendar__item">Sun</div>
    </div>

    <div class="calendar__dates" id="dates"></div>
</div>

<script src="js/scripts.js"></script>


</aside>

</div>


               

                


               


                 
                 
                











             

             









    
        
        
            <!-- ========== Footer ========== -->
            <?=$this->load->view('includes/footer', '', true) ?>

            <?=$this->load->view('includes/base_js', '', true) ?>

    </body>



</html>


<style>


.calendario{

    display: inline-block;
    width: 300px;
    min-height:400px;
   
    float:right;
    margin:10px;
}

.contenedor{

width : 80%;
margin : 0 auto;

}


.contenedor img{

width : 300px;
height : 200px ;
float: left;
margin-right: 20px;
}



.texto {
    margin-right: 20px;


}


.firma {
width : 300px;
height : 200px ;
float: left;
margin-right: 20px;





}





.contenedor1{


width : 80%;
margin : 0 auto;
margin top: 10px;
display: block;

}

.contenedorprincipal{


display: block;
}


.imagen{

width : 80px;
height : 80px ;

  
   
}


.mx-auto{

display:block;
margin:auto;}



* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

body {
    background: -webkit-gradient(linear, left top, right top, );
  background: -webkit-linear-gradient(left, );
  background: -o-linear-gradient(left, );
  background: linear-gradient(to right, ); }

.title {
  text-align: center;
  color: #444; }

.calendar {
  background:  ;
  width: 80%;
  max-width: 600px;
  margin: 1em auto;
  padding: .5em 0; }
  .calendar__info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 0 2em;
    font-size: 1.2em;
    text-transform: uppercase; }
  .calendar__prev, .calendar__next {
    color: #C7F464;
    cursor: pointer;
    font-size: 1.3em; }
  .calendar__prev {
    margin-right: auto; }
  .calendar__next {
    margin-left: auto; }
  .calendar__week, .calendar__dates {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-gap: 10px; }
  .calendar__month, .calendar__year {
    padding: .5em 1em; }
  .calendar__item {
    text-align: center;
    line-height: 2; }
  .calendar__today {
    background:red ;
    color: white;
    width: 50%;
    border-radius: 50%;
    margin: auto; }
  .calendar__last-days {
    opacity: .3; }



 
   
}




</style>

<script LANGUAGE= "JavaScript">

let monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September','October', 'November', 'December'];

let currentDate = new Date();
let currentDay = currentDate.getDate();
let monthNumber = currentDate.getMonth();
let currentYear = currentDate.getFullYear();

let dates = document.getElementById('dates');
let month = document.getElementById('month');
let year = document.getElementById('year');

let prevMonthDOM = document.getElementById('prev-month');
let nextMonthDOM = document.getElementById('next-month');

month.textContent = monthNames[monthNumber];
year.textContent = currentYear.toString();

prevMonthDOM.addEventListener('click', ()=>lastMonth());
nextMonthDOM.addEventListener('click', ()=>nextMonth());



const writeMonth = (month) => {

    for(let i = startDay(); i>0;i--){
        dates.innerHTML += ` <div class="calendar__date calendar__item calendar__last-days">
            ${getTotalDays(monthNumber-1)-(i-1)}
        </div>`;
    }

    for(let i=1; i<=getTotalDays(month); i++){
        if(i===currentDay) {
            dates.innerHTML += ` <div class="calendar__date calendar__item calendar__today">${i}</div>`;
        }else{
            dates.innerHTML += ` <div class="calendar__date calendar__item">${i}</div>`;
        }
    }
}

const getTotalDays = month => {
    if(month === -1) month = 11;

    if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
        return  31;

    } else if (month == 3 || month == 5 || month == 8 || month == 10) {
        return 30;

    } else {

        return isLeap() ? 29:28;
    }
}

const isLeap = () => {
    return ((currentYear % 100 !==0) && (currentYear % 4 === 0) || (currentYear % 400 === 0));
}

const startDay = () => {
    let start = new Date(currentYear, monthNumber, 1);
    return ((start.getDay()-1) === -1) ? 6 : start.getDay()-1;
}

const lastMonth = () => {
    if(monthNumber !== 0){
        monthNumber--;
    }else{
        monthNumber = 11;
        currentYear--;
    }

    setNewDate();
}

const nextMonth = () => {
    if(monthNumber !== 11){
        monthNumber++;
    }else{
        monthNumber = 0;
        currentYear++;
    }

    setNewDate();
}

const setNewDate = () => {
    currentDate.setFullYear(currentYear,monthNumber,currentDay);
    month.textContent = monthNames[monthNumber];
    year.textContent = currentYear.toString();
    dates.textContent = '';
    writeMonth(monthNumber);
}

writeMonth(monthNumber);







</script>