<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();

        return view('admin.users.index', compact('users', 'roles'));
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
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
            'name'       => 'required',
            'first_name' => 'required',
            'email'      => 'required|email|unique:users',
            'role_id'    => 'required',
            'address'    => 'required',
            'phone'      => 'required'
        ];

        $messages = [
            'name.required'     => 'El nombre es un campo requerido',
            'first_name.unique' => 'El primer apellido es un campo requerido',
            'email.required'    => 'El correo electrónico es un campo requerido',
            'role_id.required'  => 'El rol es un campo requerido',
            'address.required'  => 'La dirección es un campo requerido',
            'phone.required'  => 'La dirección es un campo requerido'
        ];

        $validator = Validator::make($input, $rules, $messages);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        DB::beginTransaction();

        try {

            $user = new User();
            $user->name = $request->name;
            $user->first_surname = $request->first_surname;
            $user->second_surname =  (isset($request->second_surname)) ? $request->second_name : "" ;
            $user->email = $request->email;
            $user->role_id = $request->role_id;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->status_id = 1;
            $user->password = bcrypt('12345678');

            $user->save();

            DB::commit();

            return redirect()->route('user.index')->with(['success' => 'Usuario ' . $user->name . ' creado correctamente.']);

        }catch (\PDOException $e){
            DB::rollBack();
            return back()->withErrors(['Error' => substr($e->getMessage(), 0, 150)]);
        }
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
        DB::beginTransaction();

        try {

            $user = User::findOrfail($id);
            $user->delete();

            DB::commit();

        } catch (\PDOException $e) {
            DB::rollBack();
        }

        return back()->with(['success' => 'Usuario ' . $user->name . ' eliminado.']);
    }
}
