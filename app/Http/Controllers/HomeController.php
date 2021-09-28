<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Carbon;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::inRandomOrder()->with('files','advertisement')->get();
        // dd($users->toArray());
        return view('welcome',compact('users'));
    }

    public function kinesiologaShow($id)
    {
        $user=User::with(['advertisement', 'files'])->findOrFail($id);

        return view('kinesiologa.index',compact('user'));
    }
    public function anuncio(){

        return view('anuncio.index');

    }

    public function indexApi(){

        setlocale(LC_ALL,"es_ES"); 
        Carbon::setLocale(config('app.locale'));
        setlocale(LC_ALL, 'es_MX', 'es', 'ES', 'es_MX.utf8');
        // \Carbon\Carbon::setLocale('es');;
        $carbon = new Carbon();
        $date = $carbon->now();
        $hora =  $date->hour;
        $fecha = $date->format('l');
        // $fechas=[
        //     'Monday' => 'lunes',
        //     'Tuesday' => 'martes',
        //     "Saturday" => "sabado"
        // ];
        // $fechaesp=$fechas[$fecha];
        $users=User::inRandomOrder()->with('files','advertisement')->get();
        $arr=[];
        foreach($users as $key=>$user){
            if($user->advertisement){
                if(!empty($user->advertisement->atributos)){
                    $dia_actual = null;

                    foreach ($user->advertisement->atributos as $key => $atributos) {
                        if(strstr($atributos['key'],$fecha)){
                             $dia_actual = $atributos;
                        }
                    }
                    if($dia_actual){
                        if( $dia_actual['value_fin']>=$hora && $dia_actual['value']<= $hora ){
                            $user['is_active']= 1;
                        }
                    }else{
                        $user['is_active']= 0;
                    }
                }
            }
        }
        return response()->json($users);
    }
}
