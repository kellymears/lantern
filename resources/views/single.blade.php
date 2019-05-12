@extends('layouts.app')

@section('content')
  <post :title="$title" :content="$content" />
@endsection
