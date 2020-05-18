@foreach($activities as $activity)
    <tr>
        <td>{{$activity->association}}</td>
        <td>{{$activity->course}}</td>
        <td class="td-center">{{$activity->organisation}}</td>
        <td class="td-center">
            <a href="javascript:void(0);"
               class="btn btn-sm btn-danger delete"
               data="{{$activity->id}}"><i class="fas fa-times"></i></a>
        </td>
    </tr>
@endforeach
<tr><td class="td-pagination">{{ $activities->links() }}</td></tr>
