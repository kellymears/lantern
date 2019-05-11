@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <page-header :heading="$app->title" />
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
