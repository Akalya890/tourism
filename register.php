<?php
include("head.html")
?>
<body>

<div class="register">
<br><br>

<h1>Registeration Form</h1>
<form action="connect.php" method="post">
<br><br>

<label for="name">NAME</label>
<input type="text" name="name" size="28" placeholder="enter your name" required />
<br><br>

<label for="age">AGE</label>
<input type="number" name="age" size="25" />
<br><br>

<label for="dob">DATE OF BIRTH</label>
<input type="date" name="dob" size="19" />
<br><br>

<label for="gen">GENDER</label>
<input type="radio" value="male" name="gen" />MALE
<input type="radio" value="female" name="gen" />FEMALE
<input type="radio" value="other" name="gen" />OTHER
<br><br>

<label for="destination">DESTINATION</label>
<select name="coorg">
<option value="abbi waterfall">ABBI WATERFALL</option>
<option value="madikeri">MADIKERI</option>
<option value="glass bridge">GLASS BRIDGE</option>
</select>
<br><br>

<label for="days to stay in">DAYS TO STAY IN</label>
<input type="number" name="days to stay in" size="20" />
<br><br>


<input type="submit" value="LOGIN" />
<input type="reset" value="LOGOUT" />

</form>
</div>



</body>
<?php
include("footer.html")
?>