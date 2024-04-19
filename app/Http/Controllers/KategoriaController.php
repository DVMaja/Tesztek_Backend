<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        return Kategoria::all();
    }
    public function store(Request $request)
    {
        $kategoria = new Kategoria();
        $kategoria->kategoriaNev = $request->kategoriaNev;
        $kategoria->save();
    }
    public function show($id)
    {
        return Kategoria::find($id);
    }
    public function update(Request $request, $id)
    {
        $kategoria = Kategoria::find($id);
        $kategoria->kategoriaNev = $request->kategoriaNev;
        $kategoria->save();
    }
    public function destroy($id)
    {
        Kategoria::find($id)->delete();
    }
}
