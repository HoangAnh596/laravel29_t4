<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Program</th>
    </thead>
    <tbody>
        @foreach ($st as $item)
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