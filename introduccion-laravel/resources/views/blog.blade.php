@extends('template')
@section('content')
<h1 class="font-bold">Listado de posts</h1>
@foreach ($posts as $p)
<p class="mt-2 hover:font-bold">
    <strong>{{ $p->id }}</strong>
    <a class="ml-5" href="{{route('post', $p->slug)}}">{{ $p->title }}</a>
</p>
@endforeach
<div class="mb-5"></div>

{{-- Para la paginación --}}
{{$posts->links()}}

@endsection
