<table class="table table-striped projects">
    <thead>
    <tr>
        <th style="width: 1%">#</th>
        <th>Full name</th>
        <th>Image</th>
        <th>Email</th>
        <th>Address</th>
        <th style="width: 30%">gender</th>
        <th>#Edit</th>
    </tr>
    </thead>
    <tbody class="tbody">
    <?php $dem = 1 ?>
    @foreach($listInfoUser as $infoUser)
        <tr>
            <th class="stt">{{$dem}}</th>
            <td>
                <a id="tr-name-{{$infoUser->id}}">{{$infoUser->full_name ? $infoUser->full_name:'Not updated'}}</a>
                <br/>
                <small>Created {{$infoUser->created_at}}</small>
            </td>
            <td class="tdImage">
                @if($infoUser->image)
                    <img
                        src="{{ asset("storage/".$infoUser->image) }}"
                        width="100px"
                        height="100px">
                @endif
                @if(!$infoUser->image)
                    <img
                        src="{{ asset("storage/avatar/no.png") }}"
                        width="100px"
                        height="100px">
                @endif
            </td>
            <td>
                <ul class="list-inline">
                    <p id="tr-telephone_number-{{$infoUser->id}}">{{$infoUser->user->email}}</p>
                </ul>
            </td>
            <td>
                <ul class="list-inline">
                    <p id="tr-address-{{$infoUser->id}}">{{$infoUser->address ? $infoUser->address : 'Not updated'}}</p>
                </ul>
            </td>
            <td>
                <ul class="list-inline">
                    <p id="tr-note-{{$infoUser->id}}">{{$infoUser->gender ? $infoUser->gender : 'Not updated'}}</p>
                </ul>
            </td>
            <td class="tdEdit">
                <button type="button" class="deleteBtn btn btn-danger btn-xs"
                        data_id="{{$infoUser->id}}"><i class="fa fa-trash-o"></i> Delete
                </button>
            </td>
        </tr>
        <?php $dem++; ?>
    @endforeach
    </tbody>
</table>
<div>{{ $listInfoUser->links() }}</div>
{{--appends(Request::only('name', 'telephone_number', 'address', 'note'))->--}}
