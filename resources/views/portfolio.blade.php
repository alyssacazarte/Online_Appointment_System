<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="Portfolio.css"> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/portfolio.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <title>Portfolio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    width: 100%;
    min-height: 100vh;
    font-family: 'Ubuntu', sans-serif;
    background: #fff;
    overflow-y: overlay;
    color: #fff;
    overflow-x: hidden;
}

/* ===== for the scrollbar ===== */
::-webkit-scrollbar {
    width: 3px;
}

::-webkit-scrollbar:hover {
    width: 6px;
}

::-webkit-scrollbar-track {
    background: transparent;
    border-radius: 100vh;
}

::-webkit-scrollbar-track:hover {
    background: #999;
}

::-webkit-scrollbar-thumb {
    background: #F8AF5B;
    border-radius: 100vh;
}
/* ===== end of the scrollbar ===== */


/* ===== for the Header ===== */

.header {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    padding: 40px 50px;
    position: fixed;
    background: #F8AF5B;
    z-index: 100;
    transition: 0.5s;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
}

.header[data-scroll="in"] {
    padding: 10px 50px;
    box-shadow: inset -2px -1px 3px rgba(255, 255, 255, 0.3);
}

.logo {
    font-size: 4px;
    cursor: pointer;
}

nav {
    position: relative;
}

nav .bar {
    position: absolute;
    right: 50px;
    font-size: 25px;
    margin-top: -10px;
    cursor: pointer;
    display: none;
    z-index: 1000;
}

nav a:hover {
    border-bottom: 3px solid #FF7C03;
  }
  
nav a.active {
    border-bottom: 3px solid #FF7C03;
  }
nav .bar .close{
    display: none;
}
nav .bar.active .open{
    display: none;
}
nav .bar.active .close{
    display: initial;
}

nav ul {
    display: flex;
}

nav ul li {
    list-style: none;
    margin: 0 25px;
}

nav ul li a {
    text-decoration: none;
    color: #000;
    font-size: 12px;
}

nav ul li:hover a {
    color: #fff;
}
/* ===== end of the Header ===== */
/* ----------------- for the language------------- */
.language-selector {
    position: relative;
  }
  
  .current-language {
    background-color: transparent;
    border: none;
    color: #000;
    cursor: pointer;
    display: flex;
    align-items: center;
    font-size: 12px;
  }
  
  .current-language img {
    width: 30px;
    height: 19px;
    margin-right: 5px;
  }
  
  .language-list {
    color: #000;
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #fff;
    list-style: none;
    padding: 0;
    margin: 0;
    border: 1px solid #ccc;
  }
  
  .language-list.active {
    display: block;
  }
  
  .language-list li {
    display: flex;
    padding: 10px;
    cursor: pointer;
    font-size: 12px;
    margin: 0;
    

  }

  .language-list li .brazil {
color: red;
  }
   .language-list li img {
    width: 30px;
   }
  .language-list li:hover {
    background-color: #f0f0f0;
    color: #FF7C03;
  }
  
/* ===== end of the Header ===== */




.home {
    padding-top: 200px;
    display: flex;
    justify-content: space-around;
    position: relative;
    overflow-x: hidden;
}

.home .text {
    margin-top: 100px;
}

.home .text p{
    font-size: 12px;
    color: black;
    font-weight:600px;
}

.home .text>span {
    font-size: 200px;
    letter-spacing: 1px;
    padding-left: 5px;
}

.home .text h1 {
    font-weight: bold;
    font-size: 70px;
    line-height: 79px;
    letter-spacing: 2px;
    color: #FF7C03;
    text-shadow: 3px 1px #7d7c7c;
}

.home .text h3 {
    font-size: 35px;
    letter-spacing: 1px;
    padding-left: 5px;
}

.home .text h3 span {
    color: rgba(0, 182, 182);
}

.image {
    width: 400px;
    height: 400px;

}

.image img {
    width: 350px;
    position: absolute;
    bottom: 0;
}

.buttons {
    margin-top: 40px;
    margin-bottom: 40px;
}

.btn {
    padding: 10px 35px;
    border-radius: 5px;
    font-size: 16px;
    background: transparent;
    border: 2px solid #FF7C03;
    cursor: pointer;
    color: black;
    transition: 0.3s;
}

.btn a {
    text-decoration: none;
    color: black;
    transition: 0.3s;
}

.btn:hover a {
    color: #fff;
}

.btn:hover {
    background: #FF7C03;
    color: #000;
    transform: scale(1.1);
}



/* ====== for the project section ======= */

#project {
    background: #fff;
    padding-block: 100px;
    overflow-x: hidden;
}

.title {
    position: relative;
    height: 30px;
    margin-bottom: -30px;

}

.title span {
    display: inline-block;
    font-size: 30px;
    padding: 0 10px;
    position: absolute;
    transform: translateX(-50%);
    left: 50%;
    /* z-index: 10; */
}

#project .title span {
    background: #fff;
    color: #FF7C03;
    font-weight: bold;
}

.title:before {
    content: '';
    width: 800px;
    height: 3px;
    background: #F8AF5B;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 50%;
}

#project .container {
    display: flex;
    justify-content: center;
    padding-inline: 100px;
}


/* ------------------- */

.carousel-container {
    margin-top: -50px;
    width: 100%;
    overflow: hidden;
    position: relative;
}

.carousel {
    display: flex;
    transition: transform 0.3s ease;
}

.card_project {
    border-radius: 10px;
    flex: 0 0 50%;
    margin-right: 10px;
    background-color: transparent;
    text-align: center;
}
.card-content h2 {
    font-weight: bold;
    font-size: 18px;
    color: #000;
}

 .card-content p {
    font-size: 14px;
    font-weight: 500;
    color: #000;
    padding-bottom: 2rem;
    padding-left: 55px;
    padding-right: 59px;
    text-align: justify;
}

.card_project img {
    width: 400px;
    height: 300px;
    margin-bottom: 10px;
}





.carousel-container i {

    top: 50%;
    height: 50px;
    width: 50px;
    font-size: 1.25rem;
    position: absolute;
    text-align: center;
    line-height: 50px;
    background: black;
    border-radius: 50%;
    transform: translateY(-50%);
    transition: transform 0.1s linear;
  }

  /* .carousel-container i:active {
    transform: translateY(-50%) scale(0.85);
  } */
  
  .carousel-container i:first-child {
    left: 10px;
  }
  
  .carousel-container i:last-child {
    right: 10px;
  }

/* Responsive Styles */
@media (max-width: 768px) {
    .carousel-container {
        padding: 0 20px;
    }

    .card_project {
        flex: 0 0 100%;
        margin-right: 0;

    }

    .card_project img {
        width: 300px;
        height: 300px;
        margin-bottom: 10px;
    }

    .w{
        margin-top: 5rem;
    }

    .home {
        padding-left: 2rem;
    }



}

/* ====== end of the project section ======= */
/* ----------------------------- */

.background {
    background-image: linear-gradient(to right, #FF7C03, #f5b469);
    background-color: #F8AF5B;
    height: 15rem;
    margin-bottom: -8rem;
}



/* ================= for the services =============== */
#services {
    padding: 100px;
    overflow-x: hidden;
}


#services .title span {
    background: #fff;
    color: #FF7C03;
    font-weight: bold;
}

.serviceBox {
    display: flex;
    justify-content: space-around;
}

.serviceBox .box {
    width: 350px;
    border-radius: 10px;
    background: transparent;
    padding: 50px 20px;
    text-align: center;
    transition: 0.5s;
    transform: translateY(70px) scale(0.7);
    opacity: 0;
    margin: 10px;
}
/* ============ modal for services ========== */

    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-content {
        align-items: center;
        background-color: #fefefe;
        margin: 10% auto;
        padding: 10px;
        border: 1px solid #888;
        width: 80%;
        max-width: 600px;
    }

    .modal-content h2 {
        color: #FF7C03;
        font-size: 15px;
    }

    .modal-content p {
        font-size: 10px;
        color: #000;

    }

    .modal-content p:hover {
        font-size: 10px;
        color: red;

    }
        .close-btn {
            color: #888;
            float: right;
            font-size: 10px;
            font-weight: bold;
            cursor: pointer;
        }

        /* .close-btn:hover, */
        .close-btn:focus {
            font-size: 10px;
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


        .test {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .close-test {
        color: #888;
        float: right;
        font-size: 10px;
        font-weight: bold;
        cursor: pointer;
    }

    /* .close-btn:hover, */
    .close-test:focus {
        font-size: 10px;
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .third {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .close-third {
        color: #888;
        float: right;
        font-size: 10px;
        font-weight: bold;
        cursor: pointer;
    }

    /* .close-btn:hover, */
    .close-third:focus {
        font-size: 10px;
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }


    .fourt {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
    }

    .close-fourt {
        color: #888;
        float: right;
        font-size: 10px;
        font-weight: bold;
        cursor: pointer;
    }

    /* .close-btn:hover, */
    .close-fourt:focus {
        font-size: 10px;
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }


/* ============ modal for services ========== */


.serviceBox .box[data-scroll="in"] {
    transform: translateX(0px) scale(1);
    opacity: 1;
}

.serviceBox .box:hover {
    background: #f2ba7a;
    /* color: white; */
}

.card {
    transition: 0.5s;
}

.serviceBox .box:hover .card {
    transform: scale(1.1);
}

.card .icon {
    text-align: center;
    margin-bottom: 30px;
}

.card .icon i {
    font-size: 40px;
    color: #FF7C03
}

.box .card .text {
    font-size: 15px;
    color: #FF7C03;
    font-weight: 600;
    margin-bottom: 10px;
    letter-spacing: 0px;
}

.card .text:hover {
    color: #000;
}

.box .card p {
    font-size: 10px;
    letter-spacing: 1px;
    color: #000;
}
.card p:hover{
    color: #121212;
}
.serviceBox .box {
    border: 2px solid #FF7C03;
    width: 400px;
    background: transparent;
    padding: 30px 20px;
    text-align: center;
    transition: 0.5s;
    transform: translateY(70px) scale(0.7);
    opacity: 0;
    margin: 10px;
}

/* ========== end for the service ============= */


#looking {
background-image: url('/images/b2.png');
background-repeat: no-repeat;
background-size: cover;
    padding: 100px;
    overflow-x: hidden;
}

#lets {
    width: 100%;
    height: auto;
}

#lets .consult {
    margin-top: 5rem;
    text-align: center;
    padding-bottom: -5rem;
}

.lets .buttons{
    margin-bottom: -5rem;

}
/* Responsive Styles */
@media (max-width: 768px) {

    #lets .consult .buttons a{
    font-size: 12px;
    margin: 0;
 

    }


}


















#f-footer {

    background: #121212;
    /* padding: 1px; */
    /* overflow-x: hidden; */
}

/* #f-footer span {
    background-color: #121212;
} */

#f-footer ul {
    display: flex;
    justify-content: center;
    text-decoration: none;


}

#f-footer ul li {

    list-style: none;
    padding: 20px 30px;
    margin: 20px;

}

#f-footer ul li a {

    text-decoration: none;
    color: #FF7C03;
    font-size: 10px;
}


 #f-footer ul li:hover a {
    color: white
} 
.f-footer hr {
border: none; 
  height:  2px; 
  background-color: #F8AF5B; 
  margin-left: -20px;
  padding-right: -40rem;
  margin-left: 40px; 
  margin-right: 40px; 
  margin-top: -20px;
}
.footer {
    background-color: #413E3E;
    display: flex;
    justify-content: space-between;
    padding: 5px 20px;
    align-items: center;
    box-shadow: 0 -1px 2px rgba(255, 255, 255, 0.2);
}
.footer h6{
    padding-left: 10px;
    color: #FF7C03;
    margin-bottom: -8px;
}
.footer .socialIcons a i {
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 20px;
    margin: 0 10px;
    color:black;
    transition: 0.5s;
    cursor: pointer;
}
.copy {
    font-size: 10px;
    color: #000;
}

.footer .socialIcons a:hover i {
    transform: translateY(-10px) scale(1.2);
    color: rgba(0, 182, 182);
}

.topBtn {
    width: 45px;
    height: 45px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 60px;
    right: 50px;
    cursor: pointer;
}

.topBtn i {
    font-weight: 2rem;
    font-size: 35px;
    color: #FF7C03;
    text-decoration: none;
    
}
@media (max-width:1800px) {
    .header {
        padding: 40px 25px;
    }
    .header[data-scroll="in"] {
        padding: 10px 25px;
    }

    nav ul li {
        margin: 0 20px;
    }

    .home .text h1 {
        font-size: 70px;
        ;
    }
    .home {
        padding: 1rem;
    }

    .home .text>span {
        font-size: 18px;
    }

    .home .text h3 {
        font-size: 28px;
    }
    #about {
        padding-block: 50px;
    }

    #about .container .img {
        width: 250px;
        height: 300px;
    }

    #about .container {
        padding-inline: 30px;
    }

    .container .aboutText h2 {
        font-size: 23px;
    }

    .container .aboutText p {
        font-size: 14px;
    }

    #services {
        padding: 50px;
    }

    .serviceBox .box {
        padding: 30px 20px;
    }

    .card .text {
        font-size: 26px;
    }

    .card p {
        font-size: 14px;
    }


    #contact {
        padding: 50px;
    }
}
@media (max-width:1024px) {
    .header {
        padding: 40px 25px;
    }
    .header[data-scroll="in"] {
        padding: 10px 25px;
    }

    nav ul li {
        margin: 0 20px;
    }

    .home .text h1 {
        font-size: 70px;
        ;
    }
    .home {
        padding: 1rem;
    }

    .home .text>span {
        font-size: 18px;
    }

    .home .text h3 {
        font-size: 28px;
    }
    #about {
        padding-block: 50px;
    }

    #about .container .img {
        width: 250px;
        height: 300px;
    }

    #about .container {
        padding-inline: 30px;
    }

    .container .aboutText h2 {
        font-size: 23px;
    }

    .container .aboutText p {
        font-size: 14px;
    }

    #services {
        padding: 50px;
    }

    .serviceBox .box {
        padding: 30px 20px;
    }

    .card .text {
        font-size: 26px;
    }

    .card p {
        font-size: 14px;
    }


    #contact {
        padding: 50px;
    }
}

@media (max-width:768px) {
    
    nav ul{
        opacity: 0;
        pointer-events: none;
        flex-direction: column;
        position: absolute;
        align-items: center;
        z-index: 100;
        right: -10px;
        border-radius: 5px;
        padding: 30px 40px 10px;
        background: #F8AF5B;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);
        transition: 0.5s;

    }
    nav ul.active{
        opacity: 1;
        pointer-events: all;
    }
    nav ul li{
        margin: 8px 0;
    }
    nav .bar{
        display: initial;
        right: 56;
    }


    

    .home .text h1 {
        font-size: 45px;
        line-height: 70px;
    }

    .home .text>span {
        font-size: 14px;
    }
    .home .text h3 {
        font-size: 23px;
    }
    .image {
        width: 350px;
        height: 400px;
    }
    .image img {
        width: 300px;
        position: absolute;
        bottom: 0;
    }
    .home {
        padding-top: 150px;
    }
    #about .container {
        flex-direction: column;
        align-items: center;
    }
    .aboutText {
        padding-top: 10px;
    }
    .serviceBox {
        flex-wrap: wrap;
    }
    .serviceBox .box {
        width: 275px;
    }
   
    .topBtn {
        width: 35px;
        height: 35px;
        right: 35px;
    }
    .topBtn i {
        font-size: 20px;
    }
}

@media (max-width:630px) {
    .header {
        padding: 25px 50px;
    }
    .header[data-scroll="in"] {
        padding: 10px 50px;
    }
    .logo {
        font-size: 35px;
    }
    nav .bar {
        right: 35px;
    }
    nav ul {
        flex-direction: column;
        position: absolute;
        align-items: center;
        z-index: 100;
        right: -30px;
        border-radius: 5px;
        padding: 30px 40px 10px;
        background: #F8AF5B;
    }
    .home {
        padding-top: 120px;
        height: 100vh;
    }
    
    .image {
        display: none;
    }
    .home .text {
        margin-top: 30px;
        padding-bottom: 50px;
    }
    .aboutText {
        width: 275px;
    }
    #about .container .img {
        margin-right: 0px;
    }
    .container .aboutText h2 {
        padding: 10px 0;
    }

    .left p {
        font-size: 14px;
    }
    .left .text {
        font-size: 23px;
    }
    #contact {
        padding: 50px 20px;
    }
    .contactBox .left span {
        font-size: 23px;
        line-height: 55px;
    }
    .contactBox .right span {
        font-size: 23px;
        line-height: 55px;
    }
    .infoBox .user div {
        font-size: 16px;
    }
    .infoBox i {
        font-size: 23px;
        margin-right: 25px;
    }
    .footer {
        padding: 10px 20px;;
    }
    .footer .socialIcons a i {
        font-size: 25px;
        margin: 0 7px;
    }
    .footer .copy{
        font-size: 12px;
    }
    .topBtn{
        bottom: 55px;
    }
    .carousel-container i:last-child {
        right: 40px;
    }
   
}

@media (max-width:425px) {
    nav ul li a {
        font-size: 14px;
    }
    nav .bar {
        right: 30px;
    }    


    .footer .socialIcons a i {
        font-size: 12px;
        margin: 0px 5px;
    }
    .title span {
        font-size: 22px;
    }
    .title:before {
        width: 240px;
        top: 42%;
    }
    .header .logo img {
        width: 70px;
        padding: 0;
    }

    #f-footer ul li {
        padding: 0;
    }
    .home {
        margin-bottom: -15rem;
    }
}


    </style>
</head>
<body>

    <!-- ======== Header ======== -->
    <div style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.5);" class="header">
        <div class="logo">
            <img src="{{ asset('images/Logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a class="active" href="portfolio">Portfolio</a></li>
                <li><a href="advocacy">Experience</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li> &nbsp;
                <div class="language-selector">
                    <button class="current-language">
                        <img src="{{ asset('images/us.png') }}" alt="USA Flag">
                        English
                    </button>
                    <ul class="language-list">
                        <li>
                            <a  href="portfolio/">
                                <img src="{{ asset('images/us.png') }}" alt="USA Flag">{{__('messages.English')}}
                            </a>
                        </li>
                        <li>
                            <a  href="portfolio/">
                                <img src="{{ asset('images/spain.png') }}">{{__('messages.Espanol')}}
                            </a>
                        </li>
                    
                    </ul>
                </div>
            </ul>
            <div class="bar">
                <i class="open fa-solid fa-bars"></i>
                <i class="close fa-solid fa-xmark"></i>
            </div>
        </nav>
    </div>

    <!-- ======== Header ======== -->

    <div class="main">
        <div class="home" id="home">
            <div class="left text">
                <span>Hello, I'm</span><br>
                <h1>{{ __('messages.Portfolio Landing Header')}}</h1>
                <h1><span class="typing1"></span></h1><br>

                <p>{{__('messages.Portfolio Landing Description 1')}}</p>
                <p>{{__('messages.Portfolio Landing Description 2')}}</p>
                <div class="buttons">
                    <button class="btn"><a href="contact">{{__('messages.Portfolio Landing Button')}}</a></button>
                </div>
            </div>
            <div class="image">
                <img src="{{ asset('images/faviodp.png') }}" alt="Profile">
            </div>
        </div><br><br>


        <!-- ====== for the project section ======== -->
        <div class="project" id="project">
            <div class="title aboutTxt">
                <span>{{__('messages.Portfolio Landing Project Header')}} </span>
            </div>
        </div>
        <div class="background">

        </div>
        <div class="project">

            <div class="carousel-container">

                <div class="carousel">

                    <div class="card_project">
                        <img src="{{ asset('images/aphelion.png') }}" alt="Aphelion">
                        <div class="card-content">
                            <h2>{{__('messages.Portfolio Landing Project Card Two Header')}}</h2><br><br>
                            <p> {{__('messages.Portfolio Landing Project Card Two Description')}}</p>

                            <button onclick="document.getElementById('id02').style.display='block'" class="btn"
                                style="font-size: 12px;font-weight: bold; margin-bottom: 1rem;"><a href="#">{{__('messages.Read More Button')}}</a>
                            </button>

                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                    <div class="w"
                                        style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
                                        <span onclick="document.getElementById('id01').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <h5 style="padding: 3rem; text-align: justify;">
                                        <li>{{__('messages.Portfolio Landing Project Card One Description 1')}}</li>
                                        <li>{{__('messages.Portfolio Landing Project Card One Description 2')}}</li>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card_project">
                        <img src="{{ asset('images/teamliquid.png') }}" alt="TeamLiquid">
                        <div class="card-content">
                            <h2>{{__('messages.Portfolio Landing Project Card One Header')}}</h2><br>
                            <p>{{__('messages.Portfolio Landing Project Card One Description')}}</p>
                            <button onclick="document.getElementById('id01').style.display='block'" class="btn"
                                style="font-size: 12px;font-weight: bold; margin-bottom: 1rem;"><a href="#">{{__('messages.Read More Button')}}</a>
                            </button>

                            <div id="id02" class="w3-modal">
                                <div class="w3-modal-content">
                                    <div class="w"
                                        style="background-image: url({{ asset('images/aboutb.png') }}); background-repeat: no-repeat; background-size: cover;">
                                        <span onclick="document.getElementById('id02').style.display='none'"
                                            class="w3-button w3-display-topright">&times;</span>
                                        <h5 style="padding: 3rem; text-align: justify;">
                                        <li>{{__('messages.Portfolio Landing Project Card Two Description 1')}}</li>
                                        <li>{{__('messages.Portfolio Landing Project Card Two Description 2')}}</li>
                                        <li>{{__('messages.Portfolio Landing Project Card Two Description 3')}}</li>
                                        <li>{{__('messages.Portfolio Landing Project Card Two Description 4')}}</li>
                                        </h5>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Add more card elements if needed -->
                </div>
                <i id="left" style=" margin-left: 1rem; background-color:#F8AF5B ;" class="fa-solid fa-angle-left"></i>
                <i id="right" style=" background-color:#F8AF5B ;" class="fa-solid fa-angle-right"></i>


            </div>
        </div>
    </div>
    <!-- ====== end of the project section ======== -->


    <!-- ====== for the services section ======== -->
    <div class="services" id="services">
        <div class="servicesTxt title">
            <span>{{__('messages.Portfolio Landing Services Header')}}</span>
        </div><br><br><br>
        <div class="serviceBox">
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <div>
                        <div class="text">{{__('messages.Portfolio Landing Services Card One Header')}}</div><br>
                        <p>{{__('messages.Portfolio Landing Services Card One Description')}}</p><br>
                        <span class="click-span" style="color: #FF7C03; cursor: pointer;font-size: small;">{{__('messages.Read More Button')}}
                        </span>
                        <div class="modal">
                            <div class="modal-content">
                                <span class="close-btn">&times;</span>
                                <h2>{{__('messages.More about')}}</h2>
                                <p>{{__('messages.Portfolio Landing Services Card One Modal Description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-chart-pie"></i>
                    </div>
                    <div>
                        <div class="text">{{__('messages.Portfolio Landing Services Card Two Header')}}</div><br>
                        <p>{{__('messages.Portfolio Landing Services Card Two Description')}}</p><br><br><br><br>
                        <span class="click-test"
                            style="color: #FF7C03; cursor: pointer;font-size: small;">{{__('messages.Read More Button')}}</span>
                        <div class="test">
                            <div class="modal-content">
                                <span class="close-test">&times;</span>
                                <h2>{{__('messages.More about')}}</h2>
                                <p>{{__('messages.Portfolio Landing Services Card Two Modal Description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-brush"></i>
                    </div>
                    <div>
                        <div class="text">{{__('messages.Portfolio Landing Services Card Three Header')}}</div><br>
                        <p>{{__('messages.Portfolio Landing Services Card Three Description')}}</p><br><br><br>
                        <span class="click-third"
                            style="color: #FF7C03; cursor: pointer;font-size: small;">{{__('messages.Read More Button')}}</span>
                        <div class="third">
                            <div class="modal-content">
                                <span class="close-third">&times;</span>
                                <h2> {{__('messages.More about')}}</h2>
                                <p>{{__('messages.Portfolio Landing Services Card Three Modal Description')}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="box">
                <div class="card">
                    <div class="icon">
                        <i class="fa-solid fa-pencil"></i>
                    </div>
                    <div>
                        <div class="text">{{__('messages.Portfolio Landing Services Card Four Header')}}</div>
                        <p>{{__('messages.Portfolio Landing Services Card Four Description')}}</p><br><br><br><br>
                        <span class="click-fourt"
                            style="color: #FF7C03; cursor: pointer;font-size: small;">{{__('messages.Read More Button')}}</span>
                        <div class="fourt">
                            <div class="modal-content">
                                <span class="close-fourt">&times;</span>
                                <h2> {{__('messages.More about')}} </h2>
                                <p>{{__('messages.Portfolio Landing Services Card Four Modal Description')}}</p>v
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ====== end of the services section ======== -->


    <!-- ============== for the looking expert section =============== -->
    <div class="looking" id="looking">

        <div class="lets" id="lets">
            <div class="consult">
                <p style="color: #660808; margin-top: -5rem;">{{__('messages.Portfolio Landing Footer Subheader')}}</p><br><br>
                <h1 style="font-size: 3rem;color: white;text-shadow: 2px 2px #7d7c7c; font-weight: bold;">{{__('messages.Portfolio Landing Footer Header')}}
                </h1>
                <div class="buttons">
                    <button style="border: 3px solid #FF7C03;" class="btn"><a href="./contact">{{__('messages.Portfolio Landing Footer Button')}}</i></a></a></button>
                </div>
            </div>
        </div>
        <br><br>

    </div>
    <!-- ============== end of the looking expert section =============== -->


    <div class="f-footer" id="f-footer">

        <ul>
            <li><a href="./portfolio">{{__('messages.Portfolio')}}</a></li>
            <li><a href="./advocacy">Experience</a></li>
            <li><a href="./about">{{__('messages.About')}}</a></li>
            <li><a href="./contact">{{__('messages.Contact')}}</a></li>
        </ul>
        <hr>


        <div class="footer">

            <div class="socialIcons">
                <h6 style="font-size: 10px;">{{__('messages.Portfolio Landing Footer Ending Button')}}</h6>
                <a href="https://instagram.com/faviojasso?igshid=YWYwM2I1ZDdmOQ=="><i class="fa-brands fa-instagram"></i></a>
                <!-- <a><i class="fa-brands fa-facebook"></i></a> -->
                <a href="https://github.com/FavioJasso"><i class="fa-brands fa-github"></i></a>
                <a href="https://twitter.com/FavioJasso"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="copy">
            {{__('messages.Portfolio Landing Footer Credits')}}
            </div>

        </div>

        <div class="topBtn">
            <a href="#"><i class="fa-solid fa-angle-up"></i></a><br><br>
        </div>
        <script src="{{ asset('js/scroll.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="{{ asset('js/portfolio.js') }}"></script>

</body>

</html>