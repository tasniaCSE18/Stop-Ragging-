<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document1</title>
    <link rel="stylesheet" href="victim.css">
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        body {
            /* display: flex; */
        }

        body {
            background-color: #202945;
            height: 100%;
            width: 100%;
            /* color: rgb(0, 255, 42); */
        }

        .container {
            margin: auto;
            /* margin: 0 auto; */
            margin-top: 30px;
            background-color: #202945;
            width: 50%;
            height: 1700px;

            /* margin: auto; */
            /* height: 500px; */
            /* margin: 20px 0 0 0; */

            /* border: 3px solid; */

            display: grid;
            /* place-items:center; */
            grid-template-columns: 1fr 1fr;
            /* grid-template-rows: 0.5fr 3fr 1fr; */
            grid-template-rows: 250px 650px 700px 50px;
            /* grid-auto-rows: 50px; */

            grid-gap: 20px;

        }

        .item-1 {

            text-align: center;
            background-color: #5f78c1;
            /* border: 1px solid red; */
            grid-row: 1/2;
            grid-column: 1/3;
            padding-bottom: 0%;
            margin-bottom: 0px;
            border-radius: 20px;
            transition: 2s;
        }

        .item-2 {
            background-color: #5f78c1;
            border-radius: 20px;
            /* border: 1px solid blue ; */
            padding: 20px;

        }

        .item-3 {
            background-color: #5f78c1;
            border-radius: 20px;
            /* border: 1px solid rgb(128, 107, 0); */
            padding: 20px;
        }

        .item-4 {
            background-color: #5f78c1;
            /* border: 1px solid yellow; */
            grid-column: 1/3;
        }

        .item-5 {
            background-color: #5f78c1;
            /* border: 1px solid purple; */
            grid-column: 1/3;
        }

        .item-1:hover {
            background-image: linear-gradient(45deg, red, yellow, rgb(195, 255, 0), yellow, red);
            font-size: larger;
            color: rgb(136, 0, 255);


        }

        .item-2:hover {
            /* background-color:blueviolet; */
            /* background-image: linear-gradient(45deg,red, yellow,red); */

        }

        .item-3:hover {

            /* background-color:blueviolet; */
            /* background-image: linear-gradient(135deg,red, yellow,red); */
            transition: 3s;

        }


        /*--------Introduction start ----------*/
        .item-1 p.welcome {
            color: rgb(8, 59, 244);
            margin-top: 20px;
            font-size: 40px;
            text-transform: uppercase;
            font-weight: 600;
            font-weight: bolder;
            text-shadow: 5px 5px 5px rgb(233, 48, 48);

        }

        /*--------Introduction end ----------*/

        /*--------Victim form start----------*/
        .item-2  {
            padding: 10px;
            font-size: 20px;
            font-weight: bolder;
            /* border: 2px solid black; */
            border-radius: 20px;
            /* margin:3px 2px 2px 3px; */
        }

        .item-1 p {
            font-size: 25px;

        }

        .item-2 h2 {
            text-align: center;
        }

        input {}

        .item-2  input.name {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;


        }

        .item-2  input[type=text]:hover {

            background-color: rgb(22, 122, 222);
            box-shadow: 0 0 8px 0 rgb(47, 1, 231);
        }

        .item-2 input[type=email]:hover {

            background-color: rgb(22, 122, 222);
            box-shadow: 0 0 8px 0 rgb(47, 1, 231);
        }

        .item-2  input.roll {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .item-2  input.series {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .item-2  input.dept {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;

        }

        .item-2  input.email {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;

        }

        .item-2 input.university {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;

        }

        .item-2  input.place {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .uni {
            font-size: 15px;
            background-color: rgb(109, 177, 246);
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .date {
            font-size: 15px;
            background-color: rgb(109, 177, 246);
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .time {
            font-size: 15px;
            background-color: rgb(109, 177, 246);
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        /* ------------victim form end----------- */

        /* ----------------senior form start------------------  */
        .item-3  {
            padding: 10px;
            font-size: 20px;
            font-weight: bolder;
            /* border: 2px solid black; */
            /* border-radius: 20px; */
            /* margin:3px 2px 2px 3px; */
        }

        .item-3 h2 {
            text-align: center;
        }

        input {}

        .item-3  input.name {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .item-3 input[type=text]:hover {

            background-color: rgb(22, 122, 222);
            box-shadow: 0 0 8px 0 rgb(47, 1, 231);
        }

        .item-3 input.roll {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .item-3 input.series {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }

        .item-3 input.dept {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;

        }

        .item-3  input.mobile {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;

        }

        .item-3  input.fb {
            width: 100%;
            border-radius: 5px;
            background-color: rgb(109, 177, 246);
            box-sizing: border-box;
            padding: 4px;
            font-size: 15px;
            color: #202945;
            font-weight: bolder;
        }


        /* ---------------senior form end------------- */


        /* ------------------Full description area(item-4) start----------------- */

        .item-4 {
            display: ;
        }

        .item-4 h1 {
            text-align: center;
            margin-top: 20px;
        }

        .descript {
            /* margin-top: 20px; */
            display: table;
            margin: 0 auto;
            width: 80%;
            padding: 20px;
            border-radius: 10px;
            background-color: rgb(109, 177, 246);
            font-size: 17px;
            color: #202945;
            font-weight: bolder;
            font-family: Arial, Helvetica, sans-serif;
        }

        .submit {
            /* background-color: rgb(7, 59, 214); */
            background-image: linear-gradient(90deg, rgb(11, 11, 150), rgb(67, 67, 240), rgb(67, 67, 240), rgb(3, 3, 73));

            padding: 3px;
            border-radius: 10px;
            display: table;
            margin: 0 auto;
            font-size: 25px;
            font-weight: 600;
            width: 20%;
            color: bisque;
            /* size: 90px; */

        }

        .submit:hover {
            background-image: linear-gradient(45deg, rgb(4, 117, 237), rgb(1, 19, 26), rgb(1, 19, 29), rgb(8, 132, 248));
            color: rgb(234, 183, 192);
            cursor: pointer;
            font-size: 25px;
            /* width: 20%;*/
            transition: 3s;
        }

        .item-4 h2 {
            text-align: center;
            color: rgb(243, 11, 11);
            font-size: 40px;
            text-shadow: 4px 5px 4px rgb(119, 255, 0);
        }



        /* ------------------Full description area(item-4) end---------------- */

        /*---------------------footer section start ------------------*/
        .item-5 p {
            font-size: 20px;
            text-align: center;
        }

        /*---------------------footer section end ------------------*/
    </style>

</head>

<body>


    <form action="./insert.php" method="POST">
        <div class="container">




            <div class="item-1">
                <p class="welcome">------Welcome------</p>
                <p>
                    Do you face any harassment situation?<br />Do you face any ragging
                    situation by your senior?You need help?
                </p>
                <p>-----Don't be afraided-----</p>
                <p>
                    Feel free to share your incident to your friends and Authority.<br />
                </p>
                <h1>Fill up this form:</h1>
            </div>




            <!-- victim form start -->
            <div class="item-2">
                
                    <h2>(Victim/Your Info)</h2>

                    <div class="same">
                        <p>Name :</p>
                        <input type="text" name="vname" class="name" required />
                    </div>

                    <!-- <br> -->
                    <div class="same">
                        <p>Roll :</p>
                        <input type="text" class="roll" name="vroll" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Series :</p>
                        <input type="text" class="series" name="vseries" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Department :</p>
                        <p></p>
                        <input type="text" class="dept" name="vdept" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Email:</p>
                        <input type="email" class="email" name="vemail" />
                    </div>
                    <!-- <br> -->

                    <div class="University">
                        <p>University Name:</p>
                        <input type="text" class="university" name="university" />
                        <!-- <select name="" id="un" class="uni">
                <option value="buet">BUET</option>
                <option value="ruet">RUET</option>
                <option value="kuet">KUET</option>
                <option value="cuet">CUET</option>
                <option value="duet">DUET</option>
                <option value="butex">BUTEX</option>
                <option value="du">DU</option>
                <option value="ru">RU</option>
                <option value="cu">CU</option>
                <option value="ku">KU</option>
                <option value="sust">SUST</option>
              </select> -->
                    </div>



                    <br><br>
                    <div class="rag_date_time">
                        <p>Rag date :</p>
                        <input type="date" class="date" name="rag_date" />
                        <p>Rag time :</p>
                        <input type="time" class="time" name="rag_time" />
                    </div>


                    <div class="rag_place">
                        <p>Rag Place :</p>
                        <input type="text" class="place" name="rag_place" />
                    </div>

                
            </div>


            <!-- victim form end -->

            <!-- senior form start -->

            <div class="item-3">
                
                    <h2>(Senior Info)</h2>

                    <div class="same">
                        <p>Name :</p>
                        <input type="text" name="sname" class="name" required />
                    </div>

                    <!-- <br> -->
                    <div class="same">
                        <p>Roll :</p>
                        <input type="text" class="roll" name="sroll" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Series :</p>
                        <input type="text" class="series" name="sseries" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Department :</p>
                        <p></p>
                        <input type="text" class="dept" name="sdept" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Mobile:</p>
                        <input type="text" class="mobile" placeholder="If you know" name="smobile" />
                    </div>
                    <!-- <br> -->
                    <div class="same">
                        <p>Facebook ID link :</p>
                        <input type="text" class="fb" placeholder="If you know" name="sfb" />
                    </div>
                    <!-- <br> -->






                

            </div>







            <div class="item-4">
                <h1>Description:</h1>
                <br>
                <div class="description">
                    <textarea  name="description" id="" class="descript" cols="80" rows="20" placeholder="write down the full incidence..." > </textarea>
                </div>
                <br>
                <input type="submit" class="submit" value="Submit" name="submit">
                <br>
                <h2>Your all data will be hidden </h2>

            </div>



            <div class="item-5">
                <p>Copyright@<a href="#">SHOUKHIN</a> all right reserved.</p>
            </div>

        </div>
    </form>

</body>


</html>