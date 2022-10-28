<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class controladorGitHub extends Controller
{
    //
    public function confirmarFormulario(validadorFormulario $req){
        
        return redirect('formulario')->with('confirmación','Información Recibida');
     
    }

}
