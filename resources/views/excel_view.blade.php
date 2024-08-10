<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            <tr>
                <th>{{ $data->id }}</th>
                <th>{{ $data->name }}</th>
                <th>{{ $data->email }}</th>
                <th>{{ $data->password }}</th>
            </tr>
        @endforeach
    </tbody>
</table>