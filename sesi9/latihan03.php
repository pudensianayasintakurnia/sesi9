<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan03</title>
</head>
<body>
     <form>
       <div>
          tinggi
          <input type="number" id="txTINGGI">
       </div>

       <div>
         alas
          <input type="number" id="txALAS">
       </div>
       <div>
        luas
          <input type="number" id="txLUAS">
       </div>


       <div>
          <button type="button" onclick="checknama()"> Checknilai</button>
       </div>
</form>

   <script>
        function checknama(){
             let nm = document.getElementById("txNAMA").values;
             alert("isi dari field nama: "+nm);
        }
     </script>
</body>
</html>
