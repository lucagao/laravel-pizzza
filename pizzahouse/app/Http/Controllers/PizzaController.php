<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function  index() {


        $pizzas = Pizza::all();

        // $menu = [
        //     ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //     ['type' => 'volcano', 'base' => 'garlic crust'],
        //     ['type' => 'veg supreme', 'base' => 'thin & crispy']
        //   ];
    
        //   $name = request('name');
    
        return view('pizzas.index', [ 'pizzas' => $pizzas, ]);

    }

    public function show($id) {


        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show',['pizza' => $pizza]);

    }

    public function create() {

        return view('pizzas.create');
    }

    public function gusti() {

        return view('pizzas.gusti');
    }

    public function store() {

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('msg','Thank you for your order');
    }

    public function destroy($id) {

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizza');
    }
}
