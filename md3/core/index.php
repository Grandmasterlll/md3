<?php
/*
 * require('core/links.php');
$links= new links();
 */
class index
{

    public function new2(){
        $connect= print_r('
  
        ');
        return ($connect);
    }




    public function btr(){
        $connect= print_r('
            
<br> <br> <br>
<hr>
<br> <br> <br>

        ');
        return ($connect);
    }
    public function carysel(){
        $connect= print_r('
            <?php
?>
<!-- Carousel wrapper -->
<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
        ></button>
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="1"
            aria-label="Slide 1"
        ></button>
        <button
            data-mdb-target="#carouselDarkVariant"
            data-mdb-slide-to="2"
            aria-label="Slide 1"
        ></button>
    </div>

    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(19).webp" class="d-block w-100" alt="Motorbike Smoke"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(35).webp" class="d-block w-100" alt="Mountaintop"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(40).webp" class="d-block w-100" alt="Woman Reading a Book"/>
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
        </div>
    </div>
    <!-- Inner -->

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel wrapper -->

        ');
        return ($connect);
    }
    public function blok_inf($links_otdel1,$links_otdel2,$links_otdel3,$links_otdel4,$links_otdel5){
        $connect= print_r('
    <?php
?>

<div class="container-fluid">

<div class="row">


    <div class="col-md-3" >
        <center>
            <h3>
                <a href="#">
                активное долголетие 2030
                </a>
            </h3>
        </center>
    </div>
    <div class="col-md-6" >
       <center>
         <h3>
             <a href="#">
             наши отделения
             </a>
         </h3>
       </center>
    </div>
    <div class="col-md-3" >
        <center>
            <h3>
                <a href="#">
                профилактика насилия в семье
                </a>
            </h3>
        </center>
    </div>

</div>

<!--
style="background: #00b0ff"
style="background: #00c853"
style="background: #00c853"
-->

<div class="row">

    <div class="col-md-2" >
    <center>
        <div class="row">
            <div class="col-sm-12" >
                <a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button"> Социальная реклама</a>
            </div>
        </div>
    <br>
        <div class="row">
            <div class="col-sm-12" >
                <a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button"> семья года </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" >
                <a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button"> наша продукция</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12" >
                <a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button"> проекты</a>
            </div>
        </div>
        </center>
    </div>




    <div class="col-md-8" >
        <center>
        <div class="row">
            <div class="col-sm-4" >
                <!--

                -->
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
                        <a href="ot_1.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            Oтделение первичного приема, информации, анализа и прогнозирования
                        </h5>
                        <p class="card-text">
                            Заведующий отделением Колтун Наталья Михайловна
                            (кабинет № 5, тел. 8(01794) 61-3-62)

                        </p>
                        <a href="'.$links_otdel1.'" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4" >
                <!--

                -->
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
                        <a href="ot_2.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            Отделение дневного пребывания для граждан пожилого возраста и инвалидов
                        </h5>
                        <p class="card-text">
                            Заведующий отделением–ВорошкевичТатьянаГеннадьевна, тел. 8(01794) 67-9-94
                        </p>
                        <a href="'.$links_otdel2.'" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4" >
                <!--

                -->
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
                        <a href="ot_3.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            Отделение круглосуточного пребывания для граждан пожилого возраста и инвалидов
                        </h5>
                        <p class="card-text">
                            Заведующий отделением: Верёвка Валентина Ивановна
                            Адрес отделения: г.п. Уречье, ул. Ленина, д. 80
                            Телефоны:
                            801794 52 3 82 (заведующий отделением)

                        </p>
                        <a href="'.$links_otdel3.'" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>



        </div>

            <br>



        <div class="row">

            <div class="col-sm-6" >
                <!--

                -->
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
                        <a href="ot_4.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            Отделение социальной адаптации и реабилитации
                        </h5>
                        <p class="card-text">
                            Заведующий отделением: Ашуйко Татьяна Николаевна
                            рабочий телефон 8 (01794) 67-9-86, кабинет №10

                        </p>
                        <a href="'.$links_otdel4.'" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6" >
                <!--

                -->
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
                        <a href="ot_5.php">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            Отделение социальной помощи на дому
                        </h5>
                        <p class="card-text">


                            Заведующий отделением (кабинет № 15, тел. 8(01794) 61-8-98) Кругосвет Алла Васильевна
                        </p>
                        <a href="'.$links_otdel5.'" class="btn btn-primary">Перейти</a>
                    </div>
                </div>
            </div>



        </div>
            <br>
        </center>
    </div>
    <div class="col-md-2" >
        <center>
        <div class="row">
            <div class="col-sm-12" >
                <a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button"> мы в сми</a>
            </div>

        </div>
            <br>
        <div class="row">
            <div class="col-sm-12" >
                <a href="#" class="btn btn-primary" role="button" data-mdb-toggle="button"> фото галерея </a>
            </div>

        </div>
        <div class="row">


        </div>
        </center>
    </div>



</div>

</div>
        ');
        return ($connect);
    }
    public function new21(){
        $connect= print_r('
  
        ');
        return ($connect);
    }
    public function new22(){
        $connect= print_r('
  
        ');
        return ($connect);
    }
    public function new23(){
        $connect= print_r('
  
        ');
        return ($connect);
    }
}