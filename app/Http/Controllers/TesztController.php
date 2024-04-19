<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    public function index()
    {
        return Teszt::all();
    }
    public function store(Request $request)
    {
        $teszt = new Teszt();
        $teszt->kerdes = $request->kerdes;
        $teszt->v1 = $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v4 = $request->v4;
        $teszt->helyes = $request->helyes;
        $teszt->kategoriaID = $request->kategoriaID;;
        $teszt->save();
    }
    public function show($id)
    {
        return Teszt::find($id);
    }
    public function update(Request $request, $id)
    {
        $teszt = Teszt::find($id);
        $teszt->kerdes = $request->kerdes;
        $teszt->v1 = $request->v1;
        $teszt->v2 = $request->v2;
        $teszt->v3 = $request->v3;
        $teszt->v4 = $request->v4;
        $teszt->helyes = $request->helyes;
        $teszt->kategoriaID = $request->kategoriaID;
        $teszt->save();
    }
    public function destroy($id)
    {
        Teszt::find($id)->delete();
    }
    public function tesztNevvel()
    {
        return DB::select("SELECT t.kerdes, t.v1, t.v2, t.v3, t.v4, t.helyes, k.kategoriaNev as kategoriaNev
                            FROM teszts t
                                INNER JOIN kategorias k ON t.kategoriaID = k.id
                                ");
    }
    //
    public function tesztekKategoriankent($kategoriaID)
    {
        return DB::select("SELECT k.id, t.kerdes, t.v1, t.v2, t.v3, t.v4, t.helyes, k.kategoriaNev as kategoriaNev
                            FROM teszts t
                                INNER JOIN kategorias k ON t.kategoriaID = k.id
                                WHERE t.kategoriaID = $kategoriaID
                                ");
    }
}
