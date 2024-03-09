<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">

    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            background-color: #1c2236;
            /* display: table;
    margin: 0 auto; */

            display: flex;
            justify-content: center;

            /* align-items: center; */
        }

        .container {
            width: 50%;
            margin-top: 50px;
            /* border: 1px solid; */



            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            /* whole container ke 5ti column e vag kore nilam */
            grid-template-rows: 120px 100px 500px;
            /* whole height ke 3ti div e vag kore nilam */
            grid-gap: 20px;
        }


        .div1 {
            /* background-color: red;  */
            grid-column: 1/6;
        }

        .div2 {
            /* background-color: green; */
            grid-column: 1/6;
        }

        .div3 {
            /* background-color: blue; */
            grid-column: 1/6;
        }




        /*---------- navbar start------------*/

        .div1 {
            display: flex;
            justify-content: space-around;
            /*space evenly ba space between dite parbo*/
            align-items: center;
            border-radius: 20px;
            background-image: linear-gradient(180deg, rgb(230, 64, 64), yellow, rgb(228, 61, 61));
            /* height: 70px; */
        }

        .logo {
            margin-right: auto;
            /*eti dile logo bame cole asbe r list gulo dane jabe*/
            margin-left: 20px;
            /* background: transparent; */
        }

        .logo img {
            max-width: 80px;
            /* background: transparent; */
        }

        .div1 ul {
            display: flex;
            /* justify-content: space-between; */
            /* list-style-type:none; */
        }

        .div1 ul li {
            list-style: none;
            margin-right: 20px;

        }

        .div1 ul li a {
            text-decoration: none;
            display: inline-block;
            /*eti na dile padding margin between two anchor tag kaj korbe na*/
            padding: 10px 10px;
            border-radius: 10px;
            /* border: 1px solid; */
            background-color: rgb(47, 19, 227);
            font-size: 20px;
            color: #fff;

        }

        .div1 ul li a:hover {
            font-size: 25px;
            background-color: rgb(231, 21, 213);
        }




        /*---------- navbar end ------------*/


        /* ---------- Project Title section start ------------ */
        .div2 {
            background-color: #1c2236;
        }

        .div2 p {
            text-align: center;
            text-align: center;
            color: rgb(244, 10, 10);
            font-style: normal;
            text-decoration: double;
            font-weight: 1000;
            font-size: 40px;
            text-shadow: 5px 6px 5px rgb(11, 117, 239);

        }



        /* ---------- Project Title section end ------------ */


        /*---------- main section start ------------*/

        .div3 {

            background-image: linear-gradient(45deg, #4B68D8, #AC6AB2);
            border-radius: 20px;

            /* display: flex;
    justify-content: space-between;
    flex-direction: column; */

            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 80px 300px;
            grid-gap: 20px;

        }

        .main_title {
            margin-top: 30px;
            grid-column: 1/7;
            /* border: 3px solid; */

        }

        .function {
            grid-column: 1/7;
            /* border: 3px solid pink; */



            display: grid;
            grid-template-columns: repeat(11, 1fr);
            /* grid-template-rows:  200px 200px; */
            grid-gap: 10px;
        }

        .div11 {

            grid-column: 1/4;
            grid-row: 250px;
            margin-top: 35px;
            /* background-color: red; */
            /* border:1px solid; */
        }

        .div22 {
            grid-column: 4/9;
            grid-row: 250px;
            /* background-color: green; */
            border: 1px solid;
        }

        .div33 {
            grid-column: 9/12;
            grid-row: 250px;
            margin-top: 35px;
            /* background-color: aqua; */
            /* border:1px solid; */
        }


        .main_title p {
            text-align: center;
            text-decoration: double;
            font-size: 30px;
            font-weight: 800;
            /* text-decoration: underline; */
            /* text-decoration:line-through; */
        }

        .main_title:hover {
            /* background-color: blue; */
            /* border: 3px solid; */

        }

        .main_title p:hover {
            font-size: 40px;
            color: #978498;
            background-color: blue;
        }


        .div11 img {
            max-width: 100%;
            /* div11 er puro width tai nilo */
            height: 200px;
            border-radius: 0px 30px 30px 0px;
            opacity: 0.4;
            transition: 1s;
        }

        .div11 img:hover {
            opacity: 1;
        }

        .div22 {
            border: 2px solid;
            border-radius: 20px;
        }

        .div22 ul {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .div22 ul li {

            list-style: none;
            margin-top: 50px;
            margin-bottom: 15px;
            /* text-align: center; */

        }

        .div22 ul li a {

            text-decoration: none;
            border-radius: 20px;
            /* border: 2px solid; */
            padding: 15px 10px;
            text-align: center;
            font-size: 17px;
            font-weight: 600;
            color: #f207ac;
            /* background-image: linear-gradient(90deg,rgb(11, 11, 150),rgb(67, 67, 240),rgb(67, 67, 240),rgb(3, 3, 73)); */
            /* background-image: linear-gradient(45deg,rgb(4, 117, 237),rgb(1, 19, 26),rgb(1, 19, 29),rgb(8, 132, 248)); */
            background-image: linear-gradient(90deg, rgb(1, 19, 26), rgb(3, 62, 86), rgb(2, 81, 156), rgb(3, 62, 86), rgb(1, 19, 29));
            transition: 0.5s;

        }

        .div22 ul li a:hover {
            font-size: 20px;
            background-color: rgb(240, 19, 19);
        }

        .div33 img {
            max-width: 100%;
            height: 200px;
            border-radius: 30px 0px 0px 30px;
            opacity: 0.4;
            transition: 1s;
        }

        .div33 img:hover {
            opacity: 1;
        }

        /*---------- main section end ------------*/
    </style>
</head>



<body>
   

        <div class="container">
            <!-- <div class="div1"></div>
        <div class="div2"></div>
        <div class="div3"></div> -->


            <!---------- navbar start------------>
            <div class="div1">
                <div class="logo">
                    <img src="../image/RUET_logo.png" alt="">
                </div>
                <div class="title">

                </div>
                <div class="nav_menu">
                    <ul>
                        <li><a href="#">University</a></li>
                        <li><a href="#">Most Dangerous Post </a></li>
                        <li><a href="#">Recent Post</a></li>
                    </ul>
                </div>
            </div>
            <!---------- navbar end ------------>

            <!---------- Project Title section start ------------>
            <div class="div2">
                <p>----STOP RAGGING----<br />Its a crime</p>
            </div>
            <!---------- Project Title section end------------>



            <!---------- main section start ------------>
            <div class="div3">

                <div class="main_title">
                    <p>Internal Funtion</p>
                </div>


                <div class="function">


                    <div class="div11">
                        <img src="../image/anti_ragging.jpg" alt="">
                    </div>

                    <div class="div22">
                        <ul>
                            <li class="button1"><a href="../victim/victim.php" target="blank">Continue as a victim/junior</a></li>
                            <li class="button2"><a href="../authority/login.php">Continue as a Authority</a></li>
                            <li class="button3"><a href="../public/public.php">Continue as a Public/Reader</a></li>
                        </ul>
                    </div>

                    <div class="div33">
                        <!-- <img src="https://cdn.risingbd.com/media/imgAll/2021July/abrar-2108221453.jpg" alt=""> -->
                        <img src="../image/abrar.jpg" alt="">
                    </div>


                </div>


            </div>
            <!---------- main section end ------------>


        </div>
    
</body>

</html>