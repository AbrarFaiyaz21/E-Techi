<h1>User data view</h1>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Username</td>
        <td>Operation</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['Id']}}</td>
        <td>{{$user['Full Name']}}</td>
        <td>{{$user['Email']}}</td>
        <td>{{$user['Username']}}</td>
        <td><a href = {{'/delete/'.$user['Id']}}>Delete</a></td>
    </tr>
    @endforeach
</table>