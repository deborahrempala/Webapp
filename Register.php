

<!DOCTYPE html>
<html lang="en">

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="mystyle.css" type="text/css">


<title>Register </title>

<script>

function validate(form) {
        fail  = validateFirstname(form.first.value)
        fail += validateLastname(form.last.value)
        fail += validateEmail(form.email.value)
        fail += validateGender(form.gender.value)
	fail += validatePassword(form.password.value)
        fail += validateLength(form.length.value)
        if (fail == "") return true
        else { alert(fail); return false }
}

function validateFirstname(field) {
        if (field == "") return "No Firstname was entered.\n"
        return ""
}

function validateLastname(field) {
        if (field == "") return "No Lastname was entered.\n"
        return ""
}

function validateLength(field) {
        if (isNaN(field)) return "No Length was entered.\n"
        else if (field < 0 || field > 25)
                return "Length must be between 0 and 25.\n"
        return ""
}


 
function validateEmail(field) {
        if (field == "") return "No Email was entered.\n"
                else if (!((field.indexOf(".") > 0) &&
                               (field.indexOf("@") > 0)) ||
                               /[^a-zA-Z0-9.@_-]/.test(field))
                return "The Email address is invalid.\n"
        return ""
}

function validateGender(field) {
	if (field == "") return "No Gender was entered.\n"
	return ""
}

function validatePassword(field) {
        if (field == "") return "No Password was entered.\n"
        else if (field.length < 6)
                return "Passwords must be at least 6 characters.\n"
        else if (! /[a-z]/.test(field) ||
                         ! /[A-Z]/.test(field) ||
                     ! /[0-9]/.test(field))
                return "Passwords require one each of a-z, A-Z and 0-9.\n"
        return ""
}


</script>
</head>
<body>



<h1>Magical Emporium- Register a new Customer!</h1>

<form action="Registersave.php" method="get" onSubmit = "return validate(this)">
First Name: <input type="text" name="first"><br>
Last Name: <input type = "text" name ="last"><br>
E-mail: <input type="text" name="email"><br>
Gender:
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male <br>

Password: <input type ="password"  name="password"><br>
Arm Length: <input type="text" name= "length"><br>
<input type="submit"><input type="reset">



</form>
<h2> About us </h2>
<p> We sell a variety of magical items for Students and life long learners of all ages.
<br>
<br>
<br>
<img src="cauldron.png" alt="cauldron" height="200" width="200">
</body>
</html>
