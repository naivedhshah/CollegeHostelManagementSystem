<!DOCTYPE html>
<html>
<body>

<div id="demo1">

<center><button type="button" onclick="loadDoc1()">Single Seater</button></center>
<br><br>
<table id="demo"></table>
</div>

<div id="demo2">

<center><button type="button" onclick="loadDoc2()">Double Seater</button></center>
</div><br><br>


<div id="demo3">

<center><button type="button" onclick="loadDoc3()">Triple Seater</button></center>
</div>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
	margin-left:auto; 
    margin-right:auto;
}
th,td {
  padding: 5px;
}
</style>

<script>
function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xhttp.open("GET", "TRY.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>First Installment</th><th>Second Installment</th><th>Total Fees</th></tr>";
  var x = xmlDoc.getElementsByTagName("SEAT");
  for (i = 0; i < x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("FI")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("SI")[0].childNodes[0].nodeValue +
    "</td><td>"+
     x[i].getElementsByTagName("TOTAL")[0].childNodes[0].nodeValue +
    "</td></td>";
  }
  document.getElementById("demo").innerHTML = table;
}


function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ds.txt", true);
  xhttp.send();
}
function loadDoc3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo3").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ts.txt", true);
  xhttp.send();
}
</script>

</body>
</html>