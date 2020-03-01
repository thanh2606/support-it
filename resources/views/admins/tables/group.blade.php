<table class="table table-striped projects">
    <thead>
    <tr>
        <th style="width: 1%">#</th>
        <th>Tên</th>
        <th>Từ khóa</th>
        <th>Người tạo</th>
        <th>Ngày tạo</th>
        <th>#Tác vụ</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <?php $dem = 1 ?>
    @foreach($groups as $group)
        <tr>
            <th class="stt">{{$dem}}</th>
            <td>
                <a>{{$group->name}}</a>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$group->key_word}}</p>
                </ul>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$group->user->name}}</p>
                </ul>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$group->created_at}}</p>
                </ul>
            </td>
            <td class="tdEdit">
                <a href="{{ route('admin.groups.show', $group->id) }}" type="button" class="btn btn-success btn-xs"
                   data_id="{{$group->id}}"><i class="fa fa-eye"></i> View
                </a>
                <a href="{{ route('admin.groups.edit', $group->id) }}" type="button" class="btn btn-warning btn-xs"
                   data_id="{{$group->id}}"><i class="fa fa-pencil"></i> Edit
                </a>
                <button type="button" class="deleteBtn btn btn-danger btn-xs"
                        data_id="{{$group->id}}"><i class="fa fa-trash-o"></i> Delete
                </button>
            </td>
        </tr>
        <?php $dem++; ?>
    @endforeach
    </tbody>
</table>
<div>{{ $groups->links() }}</div>
{{--appends(Request::only('name', 'telephone_number', 'address', 'note'))->--}}
