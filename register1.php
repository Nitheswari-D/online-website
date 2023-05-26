<?php include("head.html")
?>
<head>
<style>
   label{display: inline-block;
   width:100px;
   text-align:right;
   }
</style>
<body>
<div class="register">
<form action="connect1.php" method="post">
<br><br>
<label for="name">NAME :</label>
<input type="text" size="50"  placeholder="enter your name ex:john" name="n" required />
<br><br>
<label for="age">Age:</label>
<input type="number" name="a" />
<br><br>
<label for="dob">Dob :</label>
<input type="date" name="d" />
<br><br>
<label for="gender">Gender :</label>
<input type="radio" name="g" value="M" />Male
<input type="radio" name="g" value="F"  />Female
<br><br>
<label for="email">Email :</label>
<input type="email" size="40" placeholder="enter your mail" name="e" />
<br><br>
<label for="password">password :</label>
<input type="password" name="p" min="4" maxlength="8" />
<br><br>
<label for="dept">Dept :</label>
<select name="s">

<option value="cse">CSE</option>
<option value="ece">ECE</option>
<option value="it">IT</option>
</select>
<br><br>
<input type="checkbox" name="c" />cse
<input type="checkbox" name="c" />ece
<br><br>
<input type="submit" value="REGISTER" />
<input type="reset"  value="Reset" />
</form>
</div>
</body>
<?php include("footer.html")
?>