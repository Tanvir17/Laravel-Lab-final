<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <div>
    <form method="post">
        <fieldset>
        {{csrf_field()}}
        <legend>Login</legend>
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit">Submit</button></td>
            </tr>
        </table>
        </fieldset>
    </form>
    </div>
</body>
</html>