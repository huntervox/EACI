<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\User;
use App\Actividades;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request, $id)
    {
        if($id == 1){

            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>79){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 1){
                            $val = $valor->name;
                        }
                        if($valor->id == 4){
                            $val = $valor->name;
                        }
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    $type = "error";
                    $mensaje = "Presenta cruce con " .$val;
                    
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
            $user = User::create($request->all());
            $user->activitis()->attach($id);
            $type = "success";
            $mensaje = "Actividad inscrita correctamente";
            }
            }

            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
            
        }

        if($id == 2){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>79){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{

            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){ 
                $validacion = $iuser->activitis()->get();
                $val = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 2){
                            $val = $valor->name;
                        }
                        if($valor->id == 5){
                            $val = $valor->name;
                        }
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    $type = "error";
                    $mensaje = "Presenta cruce con " .$val;
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
            $user = User::create($request->all());
            $user->activitis()->attach($id);
            $type = "success";
            $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 3){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>79){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 3){$val = $valor->name;}
                        if($valor->id == 6){$val = $valor->name;}
                        if($valor->id == 7){$val = $valor->name;}
                        if($valor->id == 8){$val = $valor->name;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    $type = "error";
                    $mensaje = "Presenta cruce con " .$val;
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 4){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>19){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                $valid = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 4){$val = $valor->name;}
                        if($valor->id == 1){$val = $valor->name;}
                        if($valor->id == 5){$val = $valor->name;}
                        if($valor->id == 7){$val = $valor->name;$valid = $valor->id;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    if($valid == 7){
                        $type = "error";
                        $mensaje = "Aparece inscrito en la  " .$val;
                    }else{
                        $type = "error";
                        $mensaje = "Presenta cruce con " .$val;
                    }
                }else{
                    $iuser->activitis()->attach($id);
                    return 'Matriculada correctamente';
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 5){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>19){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
            $validacion = $iuser->activitis()->get();
                $val = 0;
                $valid =0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 5){$val = $valor->name;}
                        if($valor->id == 4){$val = $valor->name;}
                        if($valor->id == 2){$val = $valor->name;}
                        if($valor->id == 8){$val = $valor->name;$valid = $valor->id;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    if($valid == 8){
                        $type = "error";
                        $mensaje = "Aparece inscrito en la  " .$val;
                    }else{
                        $type = "error";
                        $mensaje = "Presenta cruce con " .$val;
                    }
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 6){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>19){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 6){$val = $valor->name;}
                        if($valor->id == 3){$val = $valor->name;}
                        if($valor->id == 9){$val = $valor->name;}
                        if($valor->id == 7){$val = $valor->name;}
                        if($valor->id == 8){$val = $valor->name;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    $type = "error";
                    $mensaje = "Presenta cruce con " .$val;
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 7){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>19){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                $valid = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 7){$val = $valor->name;}
                        if($valor->id == 4){$val = $valor->name;$valid = $valor->id;}
                        if($valor->id == 9){$val = $valor->name;}
                        if($valor->id == 8){$val = $valor->name;}
                        if($valor->id == 6){$val = $valor->name;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    if($valid == 4){
                        $type = "error";
                        $mensaje = "Aparece inscrito en la  " .$val;
                    }else{
                        $type = "error";
                        $mensaje = "Presenta cruce con " .$val;
                    }
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 8){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>19){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                $valid = 0;
                $valu = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 8){$val = $valor->name;}
                        if($valor->id == 7){$val = $valor->name;}
                        if($valor->id == 5){$valu = $valor->name; $valid = $valor->id;}
                        if($valor->id == 9){$val = $valor->name;}
                        if($valor->id == 3){$val = $valor->name;}
                        if($valor->id == 6){$val = $valor->name;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0 || $valu !== 0){
                    if($valid == 5){
                        $type = "error";
                        $mensaje = "Aparece inscrito en la  " .$valu;
                    }else{
                        $type = "error";
                        $mensaje = "Presenta cruce con " .$val;
                    }
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
            }
            return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
        }
        if($id == 9){
            $actividades = Actividades::where('id', '=', $id)->first();
            $ver = $actividades->users()->get();

            if(count($ver)>79){
                $type = "error";
                $mensaje = "Se agotaron los cupos :(";
            }else{
            $iuser = User::where('cod_ced', '=', $request->cod_ced)->first();
            if($iuser !== null){
                $validacion = $iuser->activitis()->get();
                $val = 0;
                    foreach ($validacion as &$valor) {
                        if($valor->id == 9){$val = $valor->name;}
                        if($valor->id == 6){$val = $valor->name;}
                        if($valor->id == 7){$val = $valor->name;}
                        if($valor->id == 8){$val = $valor->name;}
                    }
                    unset($valor); // rompe la referencia con el último elemento

                if($val !== 0){
                    $type = "error";
                    $mensaje = "Presenta cruce con " .$val;
                }else{
                    $iuser->activitis()->attach($id);
                    $type = "success";
                    $mensaje = "Actividad inscrita correctamente";
                }
            }else{ 
                $user = User::create($request->all());
                $user->activitis()->attach($id);
                $type = "success";
                $mensaje = "Actividad inscrita correctamente";
            }
        }
        }
        return response()->json([
                    'type' => $type,
                    'message' => $mensaje
                ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function consultar(Request $request, $cod_ced)
    {
         $iuser = User::where('cod_ced', '=', $cod_ced)->first();
         if($iuser == null){
            return response()->json([
                        'message' => 'Usuario no encontrado'
                    ]);
         }else{
            $act = $iuser->activitis()->get();
            return response()->json([
                        'act' => $act
                    ]);
        }
    }
}
