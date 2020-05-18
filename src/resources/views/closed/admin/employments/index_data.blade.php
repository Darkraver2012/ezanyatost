@foreach($employments as $employment)
    <tr>
        <td>{{$employment->teacher}}</td>
        <td>{{$employment->association}}</td>
        <td class="td-center">{{$employment->organisation}}</td>
        <td class="td-center">
            <a href="javascript:void(0);"
               class="btn btn-sm btn-danger delete"
               data="{{$employment->id}}"><i class="fas fa-times"></i></a>
        </td>
    </tr>
@endforeach
<tr><td class="td-pagination">{{ $employments->links() }}</td></tr>
