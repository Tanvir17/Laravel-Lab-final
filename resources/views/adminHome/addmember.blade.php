<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <form method="post">
    	{{csrf_field()}}
    	<fieldset>
    		<legend>Registration</legend>
    		<table>
    			<tr>
    				<td>Name:</td>
    				<td><input type="text" name="name"></td>
    			</tr>

    			<tr>
    				<td>Contact No:</td>
    				<td><input type="number" name="contactno"></td>
    			</tr>

    			<tr>
    				<td>Designation:</td>
    				<td><input type="text" name="designation"></td>
    			</tr>

    			<tr>
    				<td>Username:</td>
    				<td><input type="text" name="username"></td>
    			</tr>

    			<tr>
    				<td>Password:</td>
    				<td><input type="password" name="password"></td>
    			</tr>

    			<tr>
    				<td></td>
    				<td><button type="submit">Save</button></td>
    			</tr>

    			
    		</table>
    	</fieldset>
    </form>
</body>
</html>