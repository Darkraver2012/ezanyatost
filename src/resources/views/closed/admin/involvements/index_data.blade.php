@foreach($involvements as $involvement)
    <tr>
        <td><div style="display: inline-block;">{{formatName($involvement->student)}}</div></td>
        <td class="td-center">{{$involvement->school}}</td>
        <td class="td-center">{{$involvement->class}}</td>
        <td class="td-center">{{$involvement->letter}}</td>
        <td class="td-center">{{$involvement->association}}</td>
        <td class="td-center">{{$involvement->organisation}}</td>
        <td class="td-center">
            <a href="javascript:void(0);"
               class="btn btn-sm btn-danger delete"
               data="{{$involvement->id}}"><i class="fas fa-times"></i></a>
        </td>
    </tr>
@endforeach
<tr><td class="td-pagination">{{ $involvements->links() }}</td></tr>
