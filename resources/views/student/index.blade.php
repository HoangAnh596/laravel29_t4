<table>
    <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Program</th>
        <th>Action</th>
        <th>
            <a href="{{route('students.add')}}" class="btn btn-sm btn-success">ADD Student</a>
            <a href="{{route('students.list20')}}" class="btn btn-sm btn-success">List20</a>
        </th>
    </thead>
    <tbody>
        @foreach ($students as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->gender}}</td>
                <td>{{$item->program}}</td>
                <td>
                    <a href="{{route('students.edit', ['id' => $item->id])}}">Edit</a>
                    <a href="{{route('students.remove', ['id' => $item->id])}}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>