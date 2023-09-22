<x-header />
@foreach($users as $item)
<h4>{{$item}}</h4>
@endforeach

@csrf
<script>
    var data = @json($users);
    console.warn(data);
    // console.warn(data)[0];
</script>