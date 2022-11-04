<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorGitHub extends Controller
{
    //
    public function confirmarFormulario(validadorFormulario $req){
        
        return redirect('registrar')->with('confirmacion','Información Recibida');
     
    }


    public function showTabla(){
        return view('tabla');
    }

    public function showFormulario(){
        return view('formulario');
    }


}
