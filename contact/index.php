<!DOCTYPE HTML>  
<html>
<header>
	<h1>Submit contact details</h1>
</header>
<body>

<form action="indexget.php">
Salutation:  
<select>  
<option value="mr">Mr</option>}  
<option value="mrs">Mrs</option>
<option value="ms">Ms</option>
<option value="mdm">Madam</option>
</select> <br><br>

<label for="name">Name:</label>
<input type="text" id="name" name="name"><br><br>
<label for="email">Email address:</label>
<input type="text" id="email" name="email"><br><br>
<label for="phoneno">Phone number:</label>
<input type="text" id="phoneno" name="phoneno"><br><br>
 
Type of enquiry:
<select>  
<option value="general">General Enquiry</option>}  
<option value="complain">Complaints</option>
<option value="feedback">Feedback</option>
<option value="others">Others</option>
</select> <br><br>

<textarea name="message" rows="10" cols="60"> </textarea> <br>

<input type="submit" value="Submit"> <br><br>
</form>
	
</body>
</html>