<table class="table table-striped projects">
    <thead>
    <tr>
        <th style="width: 1%">#</th>
        <th>Tên</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhập</th>
        <th>#Tác vụ</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <?php $dem = 1 ?>
    @foreach($subjects as $subject)
        <tr>
            <th class="stt">{{$dem}}</th>
            <td>
                <a>{{$subject->name}}</a>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$subject->created_at}}</p>
                </ul>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$subject->updated_at}}</p>
                </ul>
            </td>
            <td class="tdEdit">
                <a href="{{ route('admin.subjects.show', $subject->id) }}" type="button" class="btn btn-success btn-xs"
                   data_id="{{$subject->id}}"><i class="fa fa-eye"></i> View
                </a>
                <a href="{{ route('admin.subjects.edit', $subject->id) }}" type="button" class="btn btn-warning btn-xs"
                   data_id="{{$subject->id}}"><i class="fa fa-pencil"></i> Edit
                </a>
                <button type="button" class="deleteBtn btn btn-danger btn-xs"
                        data_id="{{$subject->id}}"><i class="fa fa-trash-o"></i> Delete
                </button>
            </td>
        </tr>
        <?php $dem++; ?>
    @endforeach
    </tbody>
</table>
<div>{{ $subjects->links() }}</div>
{{--appends(Request::only('name', 'telephone_number', 'address', 'note'))->--}}
