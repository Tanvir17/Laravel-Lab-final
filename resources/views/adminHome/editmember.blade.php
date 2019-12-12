<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>
    <form method="post">
    	{{csrf_field()}}
    	<fieldset>
    		<legend>Edit Member Info</legend>
    		<table>
    			<tr>
    				<td>Name:</td>
    				<td><input type="text" name="name" placeholder="Updated Name"></td>
    			</tr>

    			<tr>
    				<td>Contact No:</td>
    				<td><input type="number" name="contactno" placeholder="Updated Contact no"></td>
    			</tr>

    			<tr>
    				<td>Username:</td>
    				<td><input type="text" name="username" placeholder="Updated Username"></td>
    			</tr>

    			<tr>
    				<td>Password:</td>
    				<td><input type="password" name="password" placeholder="Updated Password"></td>
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