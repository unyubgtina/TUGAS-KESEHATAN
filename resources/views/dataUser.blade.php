<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #2c3e50, #34495e);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 900px;
        }
        h1 {
            color: #2c3e50;
            font-size: 24px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #1abc9c;
            color: #fff;
        }
        .action-btn {
            color: #fff;
            background-color: #1abc9c;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .action-btn:hover {
            background-color: #16a085;
        }
        .edit-btn {
            background-color: #f39c12;
        }
        .delete-btn {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data User</h1>

        <!-- Form untuk menambah user baru -->
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" required placeholder="Enter user name" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required placeholder="Enter username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required placeholder="Enter email" class="form-control">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <button type="submit" class="btn-login">Add User</button>
        </form>

        <!-- Tabel Data User -->
        <table>
            <thead>
                <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!--@foreach($users as $index => $user)-->
                <tr>
                    <td>{{ $index + 1 }}</td> <!-- menampilkan nomor urut -->
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="action-btn edit-btn">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="action-btn delete-btn">Delete</button>
                        </form>
                    </td>
                </tr>
                <!--@endforeach-->
            </tbody>
        </table>
    </div>
</body>
</html>