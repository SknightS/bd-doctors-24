<html>
<style>
    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>



</html>


<div style="margin-left: 560px"><button  id="myBtn"  onclick="selectid2(this)">Add Info</button>
    <button  id="myBtn"  onclick="selectid3(this)">Add Speciality</button>
</div>

<div id="txtHint"></div>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Edit</h2>

        <form method="post" id="hiddenform" action=""  enctype="multipart/form-data">
            <input type="hidden" id="ex" name="ex">
        </form>

        <script>
            //document.getElementById("hiddenform").submit();
        </script>
        <div id="modalview"></div>
        <br><br>

    </div>

</div>

<div id="myModal2" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Add Info</h2>

        <form action="input.php" method="post" enctype="multipart/form-data">
            Doctor name: <input type="text" name="dname"><br><br>
            Speciality : <select  name="spec" >
                <option selected="selected" >Select Speciality</option>
                <?php
                include ('connection.php');
                $sql2="select * from spec";
                $result2=mysqli_query($con , $sql2);
                while ($data_row=mysqli_fetch_array($result2))
                {

                    echo "<option value='".$data_row['spect']."'>".$data_row['spect']."</option>";
                }
                ?>
            </select><br><br>
            Hospital : <input type="text" name="hosp"><br><br>
            Contact Number : <input type="text" name="cnum"><br><br>
            Location : <input type="text" name="loct"><br><br>
            Image : <input type="file" name="d_image"><br><br>
            Type : <input type="checkbox" value="Featured" name="type"><br><br>

            <input type="submit" name="submit" value="Submitinfo">
        </form>

        <br><br>

    </div>

</div>



<div id="myModal3" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>

        <h2>Add Speciality</h2>

        <form action="input.php" method="post" enctype="multipart/form-data">
            Speciality : <input type="text" name="spec"><br><br>

            <input type="submit" name="submit" value="Submitspc">
        </form>

        <br><br>

    </div>

</div>
<script>



            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }


            xmlhttp.open("GET","viewdata.php");
            xmlhttp.send();




</script>

<script>
    var btn;
    // Get the modal
    var modal = document.getElementById('myModal');


    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal

    function selectid(x) {
        //alert('hello dolly');
        btn = $(x).data('panel-id');
        //alert(btn);
        modal.style.display = "block";



        var elem = document.getElementById("ex"); // Get text field
        elem.value = btn;



        viewdata(btn);


    }

    function viewdata(str) {

      //  document.getElementById("submitform").style.visibility = "visible";
        if (str == "") {
            document.getElementById("modalview").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("modalview").innerHTML = xmlhttp.responseText;
                }
            }

            //alert(str);

            xmlhttp.open("GET","modalview.php?id="+str);
            xmlhttp.send();


        }
    }



    var modal2 = document.getElementById('myModal2');

    var span2 = document.getElementsByClassName("close")[1];

    function selectid2(x) {

        modal2.style.display = "block";

    }


    var modal3 = document.getElementById('myModal3');

    var span3 = document.getElementsByClassName("close")[2];

    function selectid3(x) {

        modal3.style.display = "block";

    }


    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }



    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }


    span3.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }


    function deletedc(x) {

        if(confirm("Are you sure you want to delete this?"))
        {
            btn2 = $(x).data('panel-id');

            $.ajax({
                url:"delete.php",
                method:"POST",
                data:{id:btn2},
                dataType:"text",
                success:function(data){
                    alert(data);
                   window.location="main.php"
                }
            });


        }
    }

</script>
