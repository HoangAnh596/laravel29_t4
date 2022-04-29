<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$st->name}}" placeholder="Name">
        
    </div>
    <div class="form-group">
        <label for="">Age</label>
        <input type="text" name="age" id="age" class="form-control" value="{{$st->age}}" placeholder="Age">
    </div>
    <div class="form-group">
        <label>Gender</label>
        <select class="custom-select" name="gender" id="gender">
            <option value="">Chọn trạng thái</option>
            <option @if($st->gender == '0') selected @endif value="0">Nam
            </option>
            <option @if($st->gender == '1') selected @endif value="1">Nữ
            </option>
            <option @if($st->gender == '3') selected @endif value="3">Khác
            </option>
        </select>
    </div>
    <div class="form-group">
        <label for="">Program</label>
        <input type="text" name="program" id="program" class="form-control" value="{{$st->program}}" placeholder="program">
    </div>
    <div class="">
        <button type="submit" class="btn btn-success">Lưu</button>
    </div>
</form>