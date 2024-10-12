<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>An-Najah Dorms</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/backgroundstyle.css" rel="stylesheet">
    <style>
        /* =============================================================================
   HTML5 CSS Reset Minified - Eric Meyer
   ========================================================================== */

        html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}
        body{line-height:1}
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}
        nav ul{list-style:none}
        blockquote,q{quotes:none}
        blockquote:before,blockquote:after,q:before,q:after{content:none}
        a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent;text-decoration:none}
        mark{background-color:#19A7CE;color: #9f9b4a;;font-style:italic;font-weight:bold}
        del{text-decoration:line-through}
        abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}
        table{border-collapse:collapse;border-spacing:0}
        hr{display:block;height:1px;border:0;border-top:1px solid rgb(37, 34, 34);margin:1em 0;padding:0}
        input,select{vertical-align:middle}
        li{list-style:none}


        /* =============================================================================
           My CSS
           ========================================================================== */

        /* ---- base ---- */

        html,body{
            width:100%;
            height:100%;
            background:#111;
        }

        html{
            -webkit-tap-highlight-color: rgba(0, 0, 0, 100%);
        }

        body{
            font:normal 75% Arial, Helvetica, sans-serif;
        }

        canvas{
            display:block;
            vertical-align:bottom;
        }


        /* ---- stats.js ---- */

        .count-particles{
            background: #000022;
            position: absolute;
            top: 48px;
            left: 0;
            width: 80px;
            color: #0A4D68;
            font-size: .8em;
            text-align: left;
            text-indent: 4px;
            line-height: 14px;
            padding-bottom: 2px;
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
        }

        .js-count-particles{
            font-size: 1.1em;
        }

        #stats,
        .count-particles{
            -webkit-user-select: none;
            margin-top: 5px;
            margin-left: 5px;
        }

        #stats{
            border-radius: 3px 3px 0 0;
            overflow: hidden;
        }

        .count-particles{
            border-radius: 0 0 3px 3px;
        }


        /* ---- particles.js container ---- */

        #particles-js{
            width: 100%;
            height: 100%;
            background-color: #146C94;
            background-position: 50% 50%;
            background-repeat: no-repeat;
        }

    </style>
</head>

<body>

<!-- count particles -->
<div class="count-particles">
    <span class="js-count-particles">--</span> particles
</div>

<!-- particles.js container -->
        <div id="particles-js">

              <!-- Category Start -->
            <div class="container align-content-center " style="margin-right: 1000px;  max-height=200px; position: absolute; display:flow;">

                <div class="row g-4 justify-content-center align-items-center"style="position: absolute; display:flow; top: 150px; ">

                    <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-gradient  text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/cli.svg" style="height: 300px; width: 300px" alt="Icon">

                                </div>
                                <h6>Agents</h6>
                                <span style="color: #0A4D68">Enter Agents Page</span>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-gradient  text-center rounded p-3" href="">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/person-half-dress-solid.svg" style="height: 300px; width: 300px" alt="Icon">
                                </div>
                                <h6>Students</h6>
                                <span style="color: #0A4D68;">Enter Students Page</span>
                            </div>
                        </a>
                    </div>
            </div>
        </div>
             <!-- Category End -->


<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js -->
<script src="js/lib/stats.js"></script>
<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
        stats.begin();
        stats.end();
        if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
            count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
        }
        requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>

</body>

</html>
