@include('header')
<x-header />
@include('contact')

<h1>Hello from {{$name}} {{10+10}}</h1>
{{10+10}}

@if($name == "Abrar")
<h3>Hi {{$name}}</h3>
@elseif($name == "Faiyaz")
<h3>Hello {{$name}}</h3>
@else
<h3>Unknown user</h3>
@endif

@for($i=0; $i<5; $i++)
<h6>{{$i}}</h6>
@endfor

<!-- to see the code of foreach loop, go to the hello page -->