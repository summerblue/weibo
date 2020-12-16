@extends('layouts.default')
@section('title', $user->name)

@section('content')
<div class="row">
  <div class="offset-md-2 col-md-8">
    <div class="col-md-12">
      <div class="offset-md-2 col-md-8">
        <section class="user_info">
          @include('shared._user_info', ['user' => $user])
        </section>
      </div>
    </div>
  </div>
</div>
@stop
