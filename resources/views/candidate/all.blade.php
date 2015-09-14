@extends('master')

@section('content')


@foreach($candidateList->data as $candidate)

<br>

<h2 class="ui header">{{ $candidate->name }}</h2>

<img src="{{ $candidate->photo_url }}" class="ui bordered image candidateSmall">

<i class="thumbs outline up icon"></i>

<i class="thumbs outline down icon"></i>
<br>

<div class="ui divider"></div>


@endforeach()


@stop