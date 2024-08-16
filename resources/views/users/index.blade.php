@extends('layout.template')
@section('title','Home Rental - Card')
@section('content')
    @livewire('UsersComponent', ['user' => $user], key($user->id))
@endsection