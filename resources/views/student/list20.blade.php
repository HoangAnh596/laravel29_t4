<h1>List danh sách age=20</h1>
<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Program</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($list as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->program}}</td>
            </tr>
        @endforeach
    </tbody>
</table>