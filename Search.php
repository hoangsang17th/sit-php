<?php
include("navigation.html");
?>
<title>Search Everything - SIT</title>
<link rel="stylesheet" href="./assets/css/search.css">
<script>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "Searchview.php?search=" + str, true);
            xmlhttp.send();
        }
    }
</script>
</head>
<body>
    <div class="container-fluid">
        <div class="row searchtop justify-content-center">
            <div class="col-10 col-sm-8 col-md-6 col-lg-5">
                <form action="">
                    <input type="text" class="w-100" placeholder="Everything" onkeyup="showHint(this.value)">
                </form>
            </div>
        </div>
        <div class="row justify-content-center mt-3 mb-5" id="txtHint">
                <div class="col-12 imgsearch text-center">
                    <img src="./assets/images/layouts/speedtest.svg">
                </div>
        </div>
    </div>
<?php
include("footer.php");
?>
