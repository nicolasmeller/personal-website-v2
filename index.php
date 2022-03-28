<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-58131972-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-58131972-1');
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="MaLfWXI-J63PQagpZRGsLy0aBLcn1I-CFooJKsYAlCY" />
    <meta name="robots" content="..., ..." />
    <meta name="Description" CONTENT="Nicolas Meller - Personal website">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/LetterN.svg/1200px-LetterN.svg.png">
    <link rel="stylesheet" href="styles/style.css">
    <title>Nicolas Meller</title>



</head>

<body>

<nav class="nav  justify-content-center">

    <br>

    <div class="nav-item">
        <a class="nav-link" href="https://github.com/nicolasmeller?tab=repositories" target="_blank">Github</a>
    </div>
    <div class="nav-item">
        <a class="nav-link" href="https://www.linkedin.com/in/nicolas-meller/" target="_blank">LinkedIn</a>
    </div>
    <div class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/nicolasmeller" target="_blank">Facebook</a>
    </div>
    <div class="nav-item">
        <a class="nav-link" href="https://www.behance.net/nicolasmeller" target="_blank">Behance</a>
    </div>
</nav>


<div class="header">

    <div class="hero">
        <br>

        <center>
            <div class="container">
                <div class="hero-img">
                    <img src="img/pictures/image.png" alt="">
                </div>
                <br>
                <br>
                <br>
                <h1 style="color:#3a3830; font-weight: bolder;">Nicolas Meller Søndergaard</h1>
                <h3 class="darkend-text" style="color:#636055; font-size: 20px;">software developer, UX designer & video editor </h3>

            </div>

        </center>

    </div>
    <div class="hero-waves">
        <img classa="" src="img/shapes/hero-waves.svg" alt="">
    </div>



</div>

<div class="container">

    <div class="about-me">
        <h2>Hej!</h2>
        <?php
         include 'include/text1.php'
        ?>
        <div class="program-img-section">
            <div class="row">
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/P/python-logo-A32636CAA3-seeklogo.com.png" alt="">
                        </div>
                        Python
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/P/PHP-logo-0B2FDC4529-seeklogo.com.png" alt="">
                        </div>
                        PHP
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/62/CSS3_logo.svg/240px-CSS3_logo.svg.png" alt="">
                        </div>
                        CSS
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/S/sass-logo-E41E7734A8-seeklogo.com.png" alt="">
                        </div>
                        Sass
                    </center>
                </div>


                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/C/c-sharp-c-logo-02F17714BA-seeklogo.com.png" alt="">
                        </div>
                        C#
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://kaysharbor.com/wp-content/uploads/2016/11/sql-server-logo.png" alt="">
                        </div>
                        SQL
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/J/java-logo-7F8B35BAB3-seeklogo.com.png" alt="" style="margin-top: -5px;">
                        </div>

                        JAVA
                    </center>

                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/H/html5-without-wordmark-color-logo-14D252D878-seeklogo.com.png" alt="">
                        </div>
                        HTML
                    </center>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-5" style="height:290px;">
                <div class="picture-1 "></div>
            </div>
            <div class="col-md-7">
                <?php
                include 'include/text2.php'
                ?>
                <?php
                include 'include/text3.php'
                ?>
            </div>
        </div>

        <div class="program-img-section">
            <div class="row">
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/V/visual-studio-code-logo-449D71944F-seeklogo.com.png" alt="">
                        </div>
                        Visual Studio Code
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/V/visual-studio-logo-14F95CF819-seeklogo.com.png" alt="">
                        </div>
                        Visual Studio
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/A/adobe-photoshop-logo-7B88D7B5AA-seeklogo.com.png" alt="">
                        </div>
                        Photoshop
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/A/adobe-xd-logo-39468DE5D4-seeklogo.com.png" alt="">
                        </div>
                        XD
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/A/adobe-after-effects-logo-960B473FE4-seeklogo.com.png" alt="">
                        </div>
                        After Effect
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/P/pycharm-logo-51B1427388-seeklogo.com.png" alt="">
                        </div>
                        PyCharm
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://seeklogo.com/images/P/postman-logo-0087CA0D15-seeklogo.com.png" alt="" style="margin-top: -5px;">
                        </div>
                        Postman
                    </center>
                </div>
                <div class="col-md-3  col-sm-6 col-6">
                    <center>
                        <div class="program-img">
                            <img src="https://cdn.shopify.com/s/files/1/0284/7024/7555/products/figma2x_1048x.png?v=1591893627" alt="">
                        </div>
                        Figma
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="container">
    <div class="expirence">
        <h2>Erfaring</h2>
        <?php
            include 'include/text4.php'
        ?>
        <div class="past-work">
            <div class="row">
                <div class="col">
                    <center>

                        <h3>Fnatic</h3>
                        <div class="past-work-img-logo">
                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/43/Esports_organization_Fnatic_logo.svg/1280px-Esports_organization_Fnatic_logo.svg.png" alt="" style=" width:150px">
                        </div>
                        <br/>
                    </center>
                </div>
                <div class="col-md-12 col-lg-9">
                    <p>Fnatic er en af de største på marked indenfor eSport. De har flere end 10+ million følgere.</p>
                    <p>Jeg arbejdede i starten med at lave videoer til dem som blev delt med alle deres følgere. Min stilling udvidede sig til at jeg var med at til at lave hjemmeside opsætning, men også grafiks design til intern brug.</p>
                    <br/> <br/>
                </div>

                <center>
                    <div class="video-2">
                        <div style="left: 0; max-width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/7hTDjzjwH-c?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>
                        <br/><br/>

                        <div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/gALA2awAgtE?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>
                    </div>
                </center>
            </div>
            <br/> <br/>

            <div class="row">
                <div class="col">
                    <center>
                        <h3>Tricked</h3>

                        <div class=" past-work-img-logo ">
                            <img src="https://ggscore.com/media/logo/t4675.png?84 " alt=" ">
                            <br/>
                        </div>
                        <br/>
                    </center>
                </div>
                <div class="col-md-12 col-lg-9 col-12 col-sm-12 ">
                    <p>Tricked eSport er en af Danmarks største Esport orginasitioner. Har tusinde af følgere både internationalt og nationalt. De har været med til at danne nogle af Danmarks bedste spillere inden for CSGO, LOL og FIFA.</p>
                    <p>Jeg arbejdede med deres grafisk design, dog havde jeg hovedansvaret for deres videoer. Jeg har i gennem de år, jeg var ved Tricked været til utallige event, hvor jeg har været med for at tage billeder, video og skal materiale som kunne
                        bruges i fremtiden.</p>
                </div>


            </div>
            <center>
                <div class="past-work-video ">
                    <div class="container ">

                        <div class="video ">
                            <div id="fb-root "></div>
                            <script async="1 " defer="1 " crossorigin="anonymous " src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v12.0 " nonce="Z54CtFGU "></script>
                            <div class="fb-video " data-href="https://www.facebook.com/trickedesport/videos/1560332630729437 ">

                            </div>


                            <br/><br/>
                            <div id="fb-root "></div>
                            <script async="1 " defer="1 " crossorigin="anonymous " src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0 " nonce="PhGExrrR "></script>
                            <div class="fb-video " data-href="https://fb.watch/a6X2PJaBrj/ ">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </center>
    </div>
</div>
<div class="container ">
    <p> Udover at have arbejde med Fnatic og Tricked, som var en stor lærig oplevelse har jeg arbejde med en række af forskellige områder og steder. Listen forneden kan du se en liste og få et overblik over nogle de forskellig stillinger og steder jeg
        har arbejdet.</p>

    <center>
        <div class="past-jobs ">

            <div class="row ">
                <div class=" job-place col-md-6  col-sm-6  col-lg-3">
                    <a href="https://twitter.com/Team_Property" target="_blank">
                        <img src="https://pbs.twimg.com/profile_images/1013831293975629825/wooBF3pG_400x400.jpg " alt=" ">
                    </a>
                    <center>

                        <p>Social Media Manager</p>
                    </center>
                </div>
                <div class=" job-place col-md-6  col-sm-6  col-lg-3">

                    <a href="https://myinsanity.ch/" target="_blank">
                        <img src="https://myinsanity.ch/wp-content/uploads/2021/07/mYinsanity-Logo.svg " alt=" ">
                    </a>
                    <center>

                        <p>Lead of Design</p>
                    </center>
                </div>

                <div class=" job-place col-md-6  col-sm-6  col-lg-3">
                    <a href="https://www.reason.gg/" target="_blank">


                        <img src="https://www.pinclipart.com/picdir/big/62-624415_reason-gaming-logo-clipart.png " alt=" ">
                    </a>
                    <center>

                        <p> Graphic Designer</p>
                    </center>
                </div>
                <div class=" job-place col-md-6  col-sm-6  col-lg-3 ">
                    <a href="https://g2esports.com/" target="_blank">

                        <img src="https://media-exp1.licdn.com/dms/image/C4D0BAQHimoOhlKAbCA/company-logo_200_200/0/1579357811819?e=1648684800&v=beta&t=jgbDPuMur6fh5K6dD8wKWZ30gjKrjtLlIdsJui6JBwk " alt=" ">
                    </a>
                    <center>
                        <p> Graphic Designer</p>
                    </center>
                </div>


            </div>

        </div>
    </center>
    <p>Dette er kun nogle få af dem jeg har arbejdet med, connect med mig på
        <a href="https://www.linkedin.com/in/nicolas-meller/ " target="_blank " style="text-decoration-line: underline; ">LinkedIn</a>, hvor du også kan følge med i min udvikling og se om der er noget som jeg kan tilbyde til jeres projekt.</p>
    <br>

</div>
</div>
</div>



<div class="footer-container">
    <div class="footer-waves">
        <img src="img/shapes/hero-waves.svg" alt="">
    </div>

    <div class="container">
        <div class="intership">

            <h2>Praktik & Kontakt</h2>
            <?php
                include "include/text5.php";
            ?>
            <p>Hvis er I er intresseret i, at få mig som praktikant kan I læse mere om tilrettelægelsen af praktikperioden på linket her under.</p>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                <a href="https://www.ucn.dk/Files/Billeder/ucn/Samarbejde/Faktaark/Datamatiker_praktik.pdf" target="_blank">Praktikguiden</a>
                </div>

                <div class="col-xl-6 col-md-6 col-sm-12">
                         <a href="https://www.ucn.dk/Files/Billeder/ucn/Uddannelser/Datamatiker/Studieordning-national-Datamatiker-2019.pdf" target="_blank">Studieordningen</a>
                </div>
            </div>
            <br>
            <br>
            <br>
            <p>Jeg håber, min ansøgning har vakt interesse, og såfremt mine færdigheder og viden er noget, I kan bruge, uddyber jeg meget gerne ved en samtale. Jeg ser frem til at høre fra jer. I kan komme i kontakte med mig en af de følgende muligheder som ses forneden:</p>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <center>
                        <h4 style=" ">Mail: </h4>
                        <a href="# ">info@nicolasmeller.dk</a>

                    </center>
                </div>

                <div class="col-xl-6 col-md-6 col-sm-12">
                    <center>

                        <h4 style=" ">Tlf: </h4>
                        <a href="# ">+45</a>
                    </center>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>

    <footer>
        <div class="row ">
            <div class="col ">
                <nav class=" ">
                    <a class=" " href="#top ">Gå til toppen</a>
                </nav>
            </div>
            <div class="col ">
                <center>
                    <p>Nicolas Meller Søndergaard @2022</p>
                </center>
            </div>
            <div class="col ">

            </div>
        </div>
    </footer>
</div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js " integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB " crossorigin="anonymous "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js " integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13 " crossorigin="anonymous "></script>
-->
</body>

</html>
