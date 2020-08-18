@extends('layout.layout')

@section('content')

        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    <div class="wrapper create-pizza"> </div>
                    <form action="/pizza" method="POST">
                    @csrf
                        <label for="name">Pizza Name</label>
                        <input type="text" id="name" name="name">
                        <label for="type"> Tipo di pizza</label>
                        <select name="type" id="type">
                            <option value="volcano">Volcano</option>
                            <option value="fiji">Fiji</option>
                            <option value="catania">Catania</option>
                        </select>
                        <label for="base"> dimensione di pizza</label>
                        <select name="base" id="base">
                            <option value="piccolo">Piccol</option>
                            <option value="medio">Medio</option>
                            <option value="grande">Grande</option>
                        </select>
                        <fieldset>
                            <label >Toppings:</label>
                            <input type="checkbox" name="toppings[]" value="funghi">funghi <br>
                            <input type="checkbox" name="toppings[]" value="prosciutto">prosciutto <br>
                            <input type="checkbox" name="toppings[]" value="olive">olive 
                        </fieldset>
                        <input type="submit" value="Ordina la tua pizza">
                    </form>
                </div>

            </div>
        </div>

@endsection('content')