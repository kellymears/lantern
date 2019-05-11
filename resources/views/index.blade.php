@extends('layouts.app')

@section('content')
  <page-header :heading="$app->title" />
  @each('partials.content', $app->posts, 'post')
@endsection