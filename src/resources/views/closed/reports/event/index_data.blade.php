<thead>
<tr>
    <th>Учреждение</th>
    <th>Дата</th>
    <th>Мероприятие</th>
</tr>
</thead>
<tbody>
@foreach ($events as $event)
    <tr>
        <td>{{$event->organisation}}</td>
        <td>{{(new \DateTime($event->date))->format('d.m.Y')}}</td>
        <td><a href="/events/{{$event->id}}"
               class="link-secondary">{{$event->name}}</a></td>
    </tr>
@endforeach
</tbody>
