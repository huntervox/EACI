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
        //
    }

    public function graficas()
    {
        $co = User::with('activitis')->get();
        $all = User::all();
        $ini= [
            "Facatativá",
            "Ubate",
            "Soacha",
            "Fusagasugá",
            "Girardot",
            "Chocontá",
            "Zipaquirá",
            "Chia",
            "Otro",
        ];

        for($i=0;$i<9;$i++){
            $est[$ini[$i]]= 0;
            $pro[$ini[$i]]= 0;
            $otro[$ini[$i]]= 0;

            $cf1[$ini[$i]]= 0;
            $cf2[$ini[$i]]= 0;
            $cf3[$ini[$i]]= 0;
            $ac1[$ini[$i]]= 0;
            $ac2[$ini[$i]]= 0;
            $ac3[$ini[$i]]= 0;
            $ac1r[$ini[$i]]= 0;
            $ac2r[$ini[$i]]= 0;
            $po[$ini[$i]]= 0;

            $porcent[$ini[$i]]= 0;
        };

        foreach($co as $cont){
            //participantes
            if($cont->rol ==  'Estudiante'){
                $est[$cont->sede_ext]++;
            }
            if($cont->rol ==  'Docente'){
                $pro[$cont->sede_ext]++;
            }
            if($cont->rol ==  'Otro'){
                $otro[$cont->sede_ext]++;
            }

            foreach($cont->activitis as $act){

                //Actividades
                if($act->name ==  'Conferencia 1'){
                    $cf1[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Conferencia 1'){
                    $cf2[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Conferencia 3'){
                    $cf3[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Taller 1'){
                    $ac1[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Taller 2'){
                    $ac2[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Taller 3'){
                    $ac3[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Taller 1 (Repetición)'){
                    $ac1r[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Taller 2 (repetición)'){
                    $ac2r[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
                if($act->name ==  'Ponencia'){
                    $po[$cont->sede_ext]++;
                    $porcent[$cont->sede_ext]++;
                }
            }   
        }

        //porcentajes
        $total=0;
        for($i=0;$i<9;$i++){
            $total = $total + $porcent[$ini[$i]];
        };
        
        for($i=0;$i<9;$i++){
            $porc[$i] = ($porcent[$ini[$i]] * 100) / $total;
        };
        
        

        return view('graficas',compact('co','est','pro','otro','all','ac1','ac2','ac3','ac1r','ac2r','cf1','cf2','cf3','po','porc'));
    }



}