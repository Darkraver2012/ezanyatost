<thead>
<tr><th colspan="4" class="th-left">{{$student->name}}, {{$student->class}}-{{$student->letter}} ({{$student->organisation}})</th></tr>
<tr>
    <th>Наименование ООО</th>
    <th>Объединение</th>
    <th>Дата</th>
    <th>Задание</th>
</tr>
</thead>
<tbody>
@forelse($homeworks as $homework)

    <tr>
        <td>{{$homework->organisation}}</td>
        <td>{{$homework->association}}</td>
        <td>{{(new \DateTime($homework->date))->format('d.m.Y')}}</td>
        <td>{{$homework->value}}</td>
    </tr>
@empty
    <tr><td colspan="4">Нет домашних заданий</td></tr>
@endforelse
</tbody>
