@extends('layout.layout')

@section('content')
        
<div class="flex-center position-ref full-height">
           

           <div class="content">
           <div class="title m-b-md">
            <p>Pizza - {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }} </p>
            <p> Toppings : </p>
            <ul>
            @foreach($pizza->toppings as $topping)
             <li>{{ $topping }}</li>
            @endforeach
            </ul>
            <form action="/pizza/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Ordine eseguito</button>
            
            </form>
           </div>

@endsection('content')