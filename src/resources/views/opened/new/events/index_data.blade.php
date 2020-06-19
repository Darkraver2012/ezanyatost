@foreach($events as $event)
    <div class="card">
        <div class="card-img">
            <img class="card-img-top" src="@if($event->img){{asset('storage/'.$event->img)}}@else{{ asset('/images/noimage.jpg') }}@endif">
        </div>
			<div class="extra-hint">
				<div class="extra-hint-text">
					{{$event->name}}
					{{$event->organisation}}
					{{(new \DateTime($event->date))->format('d.m.Y')}}
					{{$event->content}}
				</div>
		</div>
    </div>
@endforeach	
<div style="flex-basis: 100%;">{{ $events->links() }}</div>

