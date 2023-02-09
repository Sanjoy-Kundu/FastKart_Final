<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Wellcome Massege</h1>
    <h4>Your Account has been create successfully at FastKart</h4>
    {{ print_r($information) }}
    <table>
        <tr>
            <td>Name</td>
            <td>{{ $information['name'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $information['email'] }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{ $information['password'] }}</td>
        </tr>
        <tr>
            <td>Role</td>
            <td>{{ $information['role'] }}</td>
        </tr>

    </table>
</body>

</html>
