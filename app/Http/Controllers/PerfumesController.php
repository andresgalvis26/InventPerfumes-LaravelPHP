<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PerfumesController extends Controller
{
    // @ Función index
    public function index()
    {
        $perfumes = Perfume::all();

        return view('perfumes.index', compact('perfumes'));
    }


    // @ Función create
    public function create() {
        return view('perfumes.create');
    }


    // @ Functión store
    public function store(Request $request) {

        // * Validación a nivel backend * //
        $request->validate([
            'namePerfume' => 'required | min:3 | max:40 ',
            'gender' => 'required',
            'designer' => 'required',
            'olfactoryFamily' => 'required',
            'pureEssence' => 'required',
            'fabricationDate' => 'required',
            'expirationDate' => 'required'
        ]);

        $perfume = new Perfume();
        $perfume->namePerfume = $request->namePerfume;
        $perfume->gender = $request->gender;
        $perfume->designer = $request->designer;
        $perfume->olfactoryFamily = $request->olfactoryFamily;
        $perfume->pureEssence = $request->pureEssence;
        $perfume->fabricationDate = $request->fabricationDate;
        $perfume->expirationDate = $request->expirationDate;
        
        $perfume->save();
        
        Alert::success('Añadido', 'El perfume ha sido añadido con éxito.');

        return redirect()->route('perfumes.index');
    }


    // @ Función edit
    public function edit($id) {

        $perfume = Perfume::find($id);

        return view('perfumes.edit', compact('perfume'));
        
    }
    
    
    // @ Función update
    public function update(Request $request, $id) {
        
        $perfume = Perfume::find($id);

        // * Validación a nivel backend * //
        $request->validate([
            'namePerfume' => 'required | min:3 | max:40 ',
            'gender' => 'required',
            'designer' => 'required',
            'olfactoryFamily' => 'required',
            'pureEssence' => 'required',
            'fabricationDate' => 'required',
            'expirationDate' => 'required'
        ]);

        
        
        $perfume->update($request->all());
        
        Alert::success('Actualizado', 'El perfume ha sido actualizado con éxito.');

        return redirect()->route('perfumes.index');
    }


    // @ Función destroy
    public function destroy($id) {

        $perfume = Perfume::find($id);

        // Alert::warning('¿Estás seguro que quieres eliminar?', 'Question Message');

        
        alert()->question('Are you sure?','You won\'t be able to revert this!')->showCancelButton()->showConfirmButton()->focusConfirm(true);

        $perfume->delete();

        return redirect()->route('perfumes.index');
    }




    
}
