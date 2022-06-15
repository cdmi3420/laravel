<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<form method="POST">
    @csrf
    <table>
    	 <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pass"></td>
        </tr>
         <tr>
            <td>Conatct:</td>
            <td><input type="text" name="contact"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save">
                <a href="{{url('/')}}">Login?</a>
            </td>
        </tr>
    </table>
</form>
</body>
</html>