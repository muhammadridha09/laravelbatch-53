<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman pendaftaran</title>
    <link rel="stylesheet" href="./CSS/style/style.css">
</head>
<body>
    <header>
   <h1>Buat Account Baru!</h1>
</header>
 
   <h2>sign up form</h2> 
<form action="/welcome"method="post">   
   @csrf
    <label >First Name :</label> <br> <br>
    <input type="text" name="fname"><br> <br>
    <label >Last Name :</label> <br> <br>
    <input type="text" name="lname"> <br> <br>
    <label >Gander :</label> <br> <br>
    <input type="radio" name="status">Men <br> 
    <input type="radio" name="status">women <br> 
    <input type="radio" name="status">Other <br> <br>
    <label>Nationality :</label>
    <select name="Nationality"> 
        <option value="">indonesian</option>
        <option value="">singapura</option>
        <option value="">malaysia</option>
        <option value="">thailand</option>

    </select> <br> <br>
    <label >language spoken :</label> <br> 
    <input type="checkbox" name="bahasa"> Bahasa Indonesia <br>
    <input type="checkbox" name="bahasa"> English <br>
    <input type="checkbox" name="bahasa"> arabic <br>
    <input type="checkbox" name="bahasa"> japanase <br> <br>
    <label >Bio</label> <br>
    <textarea cols="35" rows="10"></textarea> <br><br>

 









   <input type="submit" value="kirim"> 
</form>
</body>
</header>
</html>