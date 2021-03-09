<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спорт за развој</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">

</head>
<body>
        <div >
        <?php $page="home"; include "./menu.php" ?>   
            <div class="row " style="height: 100vh;"> 
                <div class="col-md-12 col-sm-12">
                    <canvas id="canvas1"></canvas>
                </div>
            </div>
            <div class="row context align-items-center" >     
                <div class="col-md-6 col-sm-6 left  ">
                    <div class="pl-5">
                    <h1>ЛОКАЛНИ ПАРТНЕРСТВА И ОРГАНИЗАЦИИ</h1>
                    <a href="partnerships.php" class="btn btn--primary">
                            <div class="btn__inner"> 
                                <span class="btn__text btn__text--primary">Повеќе ...</span> 
                                <span class="btn__arrow btn__arrow--primary"></span>
                            </div> 
                    </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 image_right no_padding">
                    <img class="img-fluid " src="images/partnership.jpg" >
                </div>
            </div>
            <div class="row context align-items-center">     
                <div class="col-md-6 col-sm-6 image_left no_padding">
                    <img class="img-fluid "src="images/goal.jpg" >
                </div>
                <div class="col-md-6 col-sm-6 right ">
                    <div class="pl-5">
                    <h1>ЦЕЛИ ЗА ОДРЖЛИВ РАЗВОЈ (SDGs)</h1>
                    <a href="goals.php" class="btn btn--primary ">
                            <div class="btn__inner"> 
                                <span class="btn__text btn__text--primary">Повеќе ...</span> 
                                <span class="btn__arrow btn__arrow--primary"></span>
                            </div> 
                    </a>
                    </div> 
                </div>
            </div>
            <div class="row context align-items-center" >     
                <div class="col-md-6 col-sm-6 left ">
                    <div class="pl-5">
                    <h1>СПОРТ И ЦЕЛИ ЗА ОДРЖЛИВ РАЗВОЈ (SDGs)</h1>
                    <a href="sportgoals.php" class="btn btn--primary">
                            <div class="btn__inner"> 
                                <span class="btn__text btn__text--primary">Повеќе ...</span> 
                                <span class="btn__arrow btn__arrow--primary"></span>
                            </div> 
                    </a>
                    </div> 
                </div>
                <div class="col-md-6 col-sm-6 image_right no_padding">
                    <img class="img-fluid " src="images/sport-goal.jpg" >
                </div>
            </div>
            <div class="row context align-items-center" >     
                <div class="col-md-6 col-sm-6 image_left no_padding">
                    <img class="img-fluid " src="images/sport.jpg" >
                </div>
                <div class="col-md-6 col-sm-6 right ">
                    <div class="pl-5">
                    <h1>СПОРТ ЗА РАЗВОЈ НА ВЕШТИНИ</h1>
                    <a href="sportabilities.php" class="btn btn--primary ">
                            <div class="btn__inner"> 
                                <span class="btn__text btn__text--primary">Повеќе ...</span> 
                                <span class="btn__arrow btn__arrow--primary"></span>
                            </div> 
                    </a>
                    </div> 
                </div>
            </div>
            <div class="row context align-items-center" >     
                <div class="col-md-6 col-sm-6 left  ">
                    <div class="pl-5">
                    <h1>ИЗБОР НА ТРЕНЕРИ ЗА СПОРТ ЗА РАЗВОЈ</h1>
                    <a href="coaches.php" class="btn btn--primary">
                            <div class="btn__inner"> 
                                <span class="btn__text btn__text--primary">Повеќе ...</span> 
                                <span class="btn__arrow btn__arrow--primary"></span>
                            </div> 
                    </a>
                    </div> 
                </div>
                <div class="col-md-6 col-sm-6 image_right no_padding"> 
                    <img class="img-fluid" src="images/coaching.jpg" >
                </div>
            </div>
          
        </div>
        <?php include "./footer.php" ?>    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="js/home_header.js"></script>
<script src="js/main.js"></script>



</body>
</html>