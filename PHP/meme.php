<?php
ERROR_REPORTING(E_ERROR);
session_start();
if ($_SESSION["isLogin"] != 1 &&  $_SESSION["isGmail"] != 1)
{
header('location: ../index.php');
die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- html2canvas libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>

    <script type="text/javascript" src="../JS/jquery.js"></script>
    <script type="text/javascript" src="../JS/google.js"></script>
    <script type="text/javascript" src="../JS/move.js"></script>
    <link rel="stylesheet" href="../CSS/meme.css">
    <link rel="stylesheet" href="../CSS/style.css">


</head>

<body class="grey">


    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="col-md-10">
            <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor" class="bi bi-emoji-wink"
                viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path
                    d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm1.757-.437a.5.5 0 0 1 .68.194.934.934 0 0 0 .813.493c.339 0 .645-.19.813-.493a.5.5 0 1 1 .874.486A1.934 1.934 0 0 1 10.25 7.75c-.73 0-1.356-.412-1.687-1.007a.5.5 0 0 1 .194-.68z" />
            </svg>
            <a class="navbar-brand px-2" href="#">
                <h4><b>Memes</b></h4>
            </a>
        </div>
        <div class="col-md-2 ">
            <a class="btn float-right border-0" href="logout.php">
                <h6>logout <i class="fa fa-sign-out"></i></h6>
            </a>
        </div>


    </nav>
    &nbsp;&nbsp;
    <section class="container-fluid  mx-3">
        <div class="row">
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/GMjds98/abcd.jpg");'><img
                        src="https://i.ibb.co/GMjds98/abcd.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/dktGkMZ/abc1.jpg");'><img
                        src="https://i.ibb.co/dktGkMZ/abc1.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/PDZSjf3/abcd2.jpg");'><img
                        src="https://i.ibb.co/PDZSjf3/abcd2.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/P4gs4L9/abcd3.jpg");'><img
                        src="https://i.ibb.co/P4gs4L9/abcd3.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/Q6SmyVN/abcd4.jpg");'><img
                        src="https://i.ibb.co/Q6SmyVN/abcd4.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/VCHnBkm/abcd5.jpg");'><img
                        src="https://i.ibb.co/VCHnBkm/abcd5.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/swJQ8zP/abcd6.jpg");'><img
                        src="https://i.ibb.co/swJQ8zP/abcd6.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/cDBGmSY/abcd7.jpg");'><img
                        src="https://i.ibb.co/cDBGmSY/abcd7.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/7RQMQL0/abcd8.png");'> <img
                        src="https://i.ibb.co/7RQMQL0/abcd8.png"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/55ymDL5/abcd9.png");'><img
                        src="https://i.ibb.co/55ymDL5/abcd9.png"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/fGyvjjT/abcd10.jpg");'><img
                        src="https://i.ibb.co/fGyvjjT/abcd10.jpg"></a>
            </div>
            <div class="col-md-1 col-sm-4 my-2 template">
                <a href="#" class="pe-auto" onclick='load("https://i.ibb.co/PNbxSWQ/abcd10.jpg");'><img
                        src="https://i.ibb.co/PNbxSWQ/abcd10.jpg"></a>
            </div>

        </div>
    </section>

    <section class="container-fluid my-4 mx-3">
        <div class="row">

            <div class="col-md-5 bg-white border">


                <div id="main">


                    <div id="memes">
                        <img src="https://i.ibb.co/Q6SmyVN/abcd4.jpg" alt="img" id="img">
                    </div>


                    <div id="abc" class="col-md-2 float-right">
                        <textarea id="abcheader" readonly onmousedown="mov('abc')" rows="6" cols="10"></textarea>
                    </div>
                    <div id="mydiv" class="col-md-2">
                        <textarea id="mydivheader" readonly onmousedown="mov('mydiv')" rows="6" cols="20"></textarea>
                    </div>
                </div>
                <br>
            </div>


            <div class="col-md-7">
                <div>

                    <label for="text1">Contents 1</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id='textarea1'
                            placeholder="Write here and drag text at your place">

                        <select name="font" class="mx-1" id="font1" onchange="fontt('font1','abcheader')">
                            <option value="12">12</option>
                            <option value="14" selected>14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                            <option value="22">22</option>
                            <option value="24">24</option>
                            <option value="28">28</option>

                        </select>

                        <select name="font" class="mx-1 px-1" id="color1" onchange="clr('color1','abcheader')">
                            <option value="red" style="color:red">Red</option>
                            <option value="black" style="color:black" selected>Black</option>
                            <option value="grey" style="color:grey">grey</option>
                            <option value="blue" style="color:blue">Blue</option>
                            <option value="green" style="color:green">Green</option>
                            <option value="white" style="color:white">White</option>
                        </select>


                        <select name="font-family" class="mx-1 px-1" id="family1"
                            onchange="family('family1','abcheader')">
                            <option value="'Arial' Sans-serif" style="font-family:'Arial' Sans-serif;">Arial</option>
                            <option value="'Vujahday Script', cursive" style="font-family: 'Vujahday Script', cursive;">
                                Arial-Italic</option>
                            <option value="'Anton', sans-serif" style="font-family: 'Anton', sans-serif;">Anton</option>
                            <option value="'Dancing Script', cursive" style="font-family: 'Dancing Script', cursive;">
                                Script</option>
                            <option value="'Licorice', cursive" style="font-family: 'Licorice', cursive;">Cursive
                            </option>
                            <option value="'Abril Fatface', cursive" style="font-family: 'Abril Fatface', cursive;">
                                Abril-Bold</option>

                        </select>


                    </div>
                </div>

                <div>

                    <label for="text1">Contents 2</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id='textarea2'
                            placeholder=" Write here and drag text at your place">

                        <select name="font" class="mx-1" id="font2" onchange="fontt('font2','mydivheader')">
                            <option value="12">12</option>
                            <option value="14" selected>14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                            <option value="22">22</option>
                            <option value="24">24</option>
                            <option value="28">28</option>

                        </select>

                        <select name="font" class="mx-1 px-1" id="color2" onchange="clr('color2','mydivheader')">
                            <option value="red" style="color:red">Red</option>
                            <option value="black" style="color:black" selected>Black</option>
                            <option value="grey" style="color:grey">grey</option>
                            <option value="blue" style="color:blue">Blue</option>
                            <option value="green" style="color:green">Green</option>
                            <option value="white" style="color:white">White</option>


                        </select>

                        <select name="font-family" class="mx-1 px-1" id="family2"
                            onchange="family('family2','mydivheader')">
                            <option value="'Arial' Sans-serif" style="font-family:'Arial' Sans-serif;">Arial</option>
                            <option value="'Vujahday Script', cursive" style="font-family: 'Vujahday Script', cursive;">
                                Arial-Italic</option>
                            <option value="'Anton', sans-serif" style="font-family: 'Anton', sans-serif;">Anton</option>
                            <option value="'Dancing Script', cursive" style="font-family: 'Dancing Script', cursive;">
                                Script</option>
                            <option value="'Licorice', cursive" style="font-family: 'Licorice', cursive;">Cursive
                            </option>
                            <option value="'Abril Fatface', cursive" style="font-family: 'Abril Fatface', cursive;">
                                Abril-Bold</option>
                        </select>



                    </div>


                </div>

                <div class="access">
					 <a href="../HTML/index.html" id="refresh" class="btnn text-decoration-none"><i class="fa fa-picture-o"></i>Make Collage</a>
                    <input type="file" id="input" accept="image/*" name="meme">
                    <label for="input" class="btnn" id="label"><i class="fa fa-upload"></i>upload your image</label>
                    <a href="" id="refresh" class="btnn text-decoration-none"><i class="fa fa-refresh"></i>Refresh</a>
                    <a href="#" id="btn-preview" class="btnn text-decoration-none"><i class="fa fa-cog"></i>Generate</a>
                    <a href="" id="downloads" class="btnn text-decoration-none"><i class="fa fa-download "></i>Download</a>
                </div>


            </div>



        </div>

    </section>

    <script src="../JS/extern.js"></script>


</body>

</html>