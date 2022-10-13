<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zuri Training Registration</title>
</head>
<body>
    <section> <h2>Please fill the form below to begin</h2> </section>
   <form action="user_data.php" method="post">
    <label for="name">Name:</label><input type="text" name="name"><br>
    <label for="email">Email:</label><input type="text" name="email"><br>
    <label for="dob">Date of Birth</label><input type="date" name="dob"><br>
    <label for="gender">Gender</label>
        <label for="male"></label>Male<input type="radio" name="gender" value="male">
        <label for="female">Female</label><input type="radio" name="gender" value="female"><br>
    <label for="country">Country:</label>
    <select name="country" >
        <option value="-select-" selected>- Choose one -</option>
        <option value="Nigeria">Nigeria</option>
        <option value="Ghana">Ghana</option>
        <option value="Togo">Togo</option>
        <option value="Lybia">Lybia</option>
        <option value="Senegal">Senegal</option>
    </select><br>
    <input type="submit" value="submit">
    
   </form>
</body>
</html>