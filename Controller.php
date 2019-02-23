<?php
/**
 * Created by PhpStorm.
 * User: kansiri
 * Date: 14/2/2019 AD
 * Time: 11:02
 */
include('header.php');


if (isset($_POST)) {
    $totalPrice =0;
    $name = '';
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $date = $_POST['date'];
    $license = $_POST['license'];
    $file = $_FILES['fileinput']['type'];
    $csvfile = array('text/comma-separated-values','text/csv','application/vnd.ms-excel');


    if (!in_array($_FILES['fileinput']['type'],$csvfile)) {
        echo "<script>
                alert('File type incorrect! - $file ');
                window.location.href = \"lab04.php\";
              </script>>";
    }
    else {
        $name = strtoupper($firstname.' '.$lastname);

        $myfile = fopen($_FILES["fileinput"]["tmp_name"], "r");

        while (!feof($myfile)) {
            $data[] = fgetcsv($myfile);
        }
        fclose($myfile);
        $lap = 0;

        foreach ($data as $row) {
//            print_r($row);
            if ($lap == 0){

            }
            else{
                $totalPrice +=$row[3]*$row[4];
//                echo $row[3];
//                echo $row[4];
//                echo $totalPrice;

            }
            $lap++;
        }

    }

}
?>
<head>
    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <!--    <link rel="stylesheet" href="style.css" >-->

    <link rel="stylesheet" href="style.css">

    <style>
        .headertext{
            border-bottom: #ff4b5a solid 8px;
            padding-bottom: 0px;
            margin-bottom: 0px;
        }
    </style>

</head>
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
            margin-top: 5%;
            margin-left: 37%;
        }
        .card-header{
            background-color: black;
            font-size: 150%;
            color: white;
        }
        .card-body{
            font-size: 180%;

        }

    </style>

<div class="container ">
    <div class="intable headertext">
        <div >
            <h1 class=""> คำนวณราคาบิลไม้</h1>
        </div>
    </div>
    <div class="card text-center mt-3">
        <?php
        echo  $name."<br>".'LICENSE : '.$license;
        ?>
    </div>
    <table class="table table-dark mt-3">
        <thead class="text-center " style="background-color: #ba8b00">
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Bill Number</th>
            <th scope="col">Date Of Bill</th>
            <th scope="col">Weight</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody class="text-center">
        <?php
        for ($i = 1; $i< sizeof($data) ; $i++){
            echo "
        <tr>
        <td>" . $data[$i][0] . "</td>
        <td>" . $data[$i][1] . "</td>
        <td>" . $data[$i][2] . "</td>
        <td>" . $data[$i][3] . "</td>
        <td>" . $data[$i][4] . "</td>
  
        </tr>
                    ";

        }
        ?>
        </tbody>
    </table>
    <div class="card text-center col-sm-15">
        <div class="card-header">
            TOTAL PRICE
        </div>
        <div class="card-body">
            <?php
            echo $totalPrice;
            ?>
        </div>
    </div>
</div>


</body>


