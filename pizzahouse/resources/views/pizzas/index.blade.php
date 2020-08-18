@extends('layout.layout')

@section('content')

        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    la migliore pizza che ci sia
                </div>

                

                @for( $i = 0 ; $i < 5; $i++)
                <p> i valore è {{ $i }}</p>
                @endfor

                  

                @foreach($pizzas as $pizza)
                  <div>
                    <!-- {{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
                    @if($loop->first)
                      <span> - first in the loop</span>
                    @endif
                    @if($loop->last)
                      <span> - last in the loop</span>
                    @endif -->

                    {{ $pizza->name }} - {{ $pizza->type }} -{{ $pizza->base }} 

                  </div>
                @endforeach

            </div>
        </div>

@endsection('content')