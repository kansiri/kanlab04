<?php
/**
 * Created by PhpStorm.
 * User: kansiri
 * Date: 12/2/2019 AD
 * Time: 14:50
 */
include('header.php')
?>
<html>
<body>
    <style>
        @import url("https://fonts.googleapis.com/css?family=Kanit");
        body {
            font-family: 'Kanit', sans-serif;
            background-image: url("https://images.pexels.com/photos/326311/pexels-photo-326311.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
            background-size: cover;
        }
        .headertext h1{
            color: white;
            text-align: center;
            margin-top: 10%;
        }
        .col-md-6{
            margin-left: 25%;
            color: white;
            font-size: 130%;
        }

        .btn{
            color: white;
            margin-left: 37%;
            font-size: 180%;
        }
        .file-path{
            margin-top: 5%;

        }



    </style>

<div class="container mt-5">
    <div class=" intable cardStyleMargin">
        <div class="headertext" >
            <h1 class="ml-3">คำนวณราคาบิลไม้</h1>
        </div>
        <form method="post" action="Controller.php" enctype="multipart/form-data">
            <div>
                <div class="form-group col-md-6 col-sm-12">
                    Firstname:<input type="text" class="form-control" placeholder="Firstname" name="firstname" required>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    Lastname:<input type="text" class="form-control" placeholder="Lastname" name="lastname" required>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    Date :<input type="date" class="form-control" placeholder="Date" name="date" required>
                </div>
                <div class="form-group col-md-6 col-sm-12">
                    License:<input type="text" class="form-control" placeholder="License" name="license" required>
                </div>
                <div class="file-path-wrapper col-md-6 col-sm-12">
                    <input required class="file-path validate" type="file" name="fileinput" accept="text/csv" placeholder="Upload your file">
                </div>
                <div class="submit col-md-6 col-sm-12 mt-3">
                    <button type="submit" class="btn btn-lg btn-rounded aqua-gradient">
                        SUBMIT
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>




</body>
</html>
