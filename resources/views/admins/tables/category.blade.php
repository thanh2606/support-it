<table class="table table-striped projects">
    <thead>
    <tr>
        <th style="width: 1%">#</th>
        <th>Name</th>
        <th>Created_at</th>
        <th>Update_at</th>
        <th>#Edit</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <?php $dem = 1 ?>
    @foreach($listCategory as $category)
        <tr>
            <th class="stt">{{$dem}}</th>
            <td>
                <a>{{$category->name}}</a>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$category->created_at}}</p>
                </ul>
            </td>
            <td>
                <ul class="list-inline">
                    <p>{{$category->update_at ? $category->update_at : 'Not updated'}}</p>
                </ul>
            </td>
            <td class="tdEdit">
                <a href="{{ route('categories.show', $category->id) }}" type="button" class="btn btn-success btn-xs"
                        data_id="{{$category->id}}"><i class="fa fa-eye"></i> View
                </a>
                <a href="{{ route('categories.edit', $category->id) }}" type="button" class="btn btn-warning btn-xs"
                        data_id="{{$category->id}}"><i class="fa fa-pencil"></i> Edit
                </a>
                <button type="button" class="deleteBtn btn btn-danger btn-xs"
                        data_id="{{$category->id}}"><i class="fa fa-trash-o"></i> Delete
                </button>
            </td>
        </tr>
        <?php $dem++; ?>
    @endforeach
    </tbody>
</table>
<div>{{ $listCategory->links() }}</div>
{{--appends(Request::only('name', 'telephone_number', 'address', 'note'))->--}}
