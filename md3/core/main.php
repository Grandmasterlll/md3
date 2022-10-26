<?php

class main
{
/*
    public function new(){
        $connect= print_r('

        ');
        return ($connect);
    }
    */
//ГУ «Территориальный центр социального обслуживания населения Любанского района»

public function head($title){
    //$title=$title1;
    $connect= print_r('
         <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>'.$title.'</title>

    <!--
  boostrap
  -->
 
    <!-- Font Awesome -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MDB icon 
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />  -->
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
       <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
  
    <!-- MDB -->
    <!-- 
    
     
     
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/main.css" />
-->

</head>
        ');
    return ($connect);
}
    public function nad_nav(){
        $connect= print_r('
    <div class="container-fluid" >

    <div class="row">
        <div class="col-3">

            <img class="img-fluid" src="img/logg.png"   alt="Wild Landscape" height="200" width="200" />

            <!--
             // <img  src="blob:https://web.telegram.org/e38ec77d-f8f0-413d-90d6-e8fb51e96f0a"  />
            //class="img_card" src="img/logg.png"  -->



        </div>
        <div class="col-9">
            <h1>
                <b>
                    ГУ «Территориальный центр социального обслуживания населения Любанского района»
                </b>
            </h1>

        </div>

    </div>

</div>
        ');
        return ($connect);
    }
    public function nav(){
        //$ar=nad_nav(); $nad_nav.  $nad_nav
        /*
         информация
            ясный язык
            вопрос ответ
            контакты
         */
        $connect= print_r('
                <div class="container" >
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px ; margin: 10px">
  <a class="navbar-brand" href="#">Главная</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">О нас <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">информация </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          деятельность
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Oтделение первичного приема, информации, анализа и прогнозирования</a>
          <a class="dropdown-item" href="#">Отделение дневного пребывания для граждан пожилого возраста и инвалидов</a>
          <a class="dropdown-item" href="#">Отделение круглосуточного пребывания для граждан пожилого возраста и инвалидов</a>
          <a class="dropdown-item" href="#">Отделение социальной адаптации и реабилитации</a>
          <a class="dropdown-item" href="#">Отделение социальной помощи на дому</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">ясный язык </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">вопрос ответ </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">контакты </a>
      </li>
      
    </ul>
    
  </div>
</nav>
</div>
        ');
        return ($connect);
    }

    public function footer(){
        $connect= print_r('
            <footer class="text-center text-white " style="background-color: #21081a;">
    <!-- Grid container -->
    <div class="container p-4"></div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">4iper.ru @</a>
    </div>
    <!-- Copyright -->
</footer>
        ');
        return ($connect);
    }
    public function con(){
        $connect= print_r('
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        ');
        return ($connect);
    }
    public function boot(){
        $connect= print_r('
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        ');
        return ($connect);
    }

}