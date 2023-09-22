<h1>Admin Data page</h1>

<table border='1'>
    <tr>
        <td>ID</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Username</td>
        <td>Operation</td>
    </tr>
    @foreach($admins as $admin)
    <tr>
        <td>{{$admin['Id']}}</td>
        <td>{{$admin['Full Name']}}</td>
        <td>{{$admin['Email']}}</td>
        <td>{{$admin['Username']}}</td>
        <td><a href = {{'/admin/delete/'.$admin['Id']}}>Delete</a></td>
    </tr>
    @endforeach
</table>