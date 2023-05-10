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
          <input type="text" id="txTINGGI">
       </div>

       <div>
         alas
          <input type="text" id="txALAS">
       </div>
       
       <div>
          <button type="button" onclick="checknilai()"> Checknilai</button>
       </div>
     </form>

   <script>
        function checknilai(){
             let t = document.getElementById("txTINGGI").value;
             let A = document.getElementById("txALAS").value;
             console.log("hasil= "+t*A/2);
        }
     </script>
</body>
</html>
