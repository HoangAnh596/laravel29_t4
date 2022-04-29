@php
    $genderList = [
        [
            'id' => 1,
            "name" => "Nam"
        ],
        [
            'id' => 2,
            "name" => "Nữ"
        ],
        [
            'id' => 3,
            "name" => "Khác"
        ],
    ];
    
@endphp

<form action="" method="post" >
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Age</label>
        <input type="text" name="age">
    </div>
    <div>
        <label for="">Gender</label>
        @foreach ($genderList as $item)
            <input type="radio" name="gender" value="{{$item['id']}}" 
                @if($loop->index == 0 ) checked @endif> {{$item['name']}}
        @endforeach
    </div>
    <div>
        <label for="">Programming</label>
        <input type="text" name="program">
    </div>

    <div>
        <button type="submit">Save</button>
    </div>
</form>