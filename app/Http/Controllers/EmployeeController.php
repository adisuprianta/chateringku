<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use File;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employees::all();
        return view('employees.employees', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.employeesAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'position' => 'required',
            'salary' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('images'), $imageName);
        
        $data = new Employees([
            'name' => $request->get('name'),
            'address' => $request->get('address'),
            'position' => $request->get('position'),
            'salary' => $request->get('salary'),
            'foto' => $imageName,
        ]);

        $data->save();

        return redirect('/employees')->with('success', 'Data Pegawai berhasil diperbarui!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employees::find($id);
        return view('employees.employeesDetail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employees::find($id);
        return view('employees.employeesEdit', compact('data'));
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
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'position' => 'required',
            'salary' => 'required',
        ]);

        $data = Employees::find($id);

        if ($request->image != null){
            $request->validate([
                'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $image_path = public_path('images')."/".$data->foto;  // Value is not URL but directory file path
            if(File::exists($image_path)) {
                File::delete($image_path);
            }
            $imageName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('images'), $imageName);
            $data->foto = $imageName;
        }
        
        $data->name =  $request->get('name');
        $data->address =  $request->get('address');
        $data->position =  $request->get('position');
        $data->salary =  $request->get('salary');
        
        $data->save();

        return redirect('/employees')->with('success', 'Data Surat Pindah berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employees::find($id);
        $image_path = public_path('images')."/".$data->foto;  // Value is not URL but directory file path
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $data->delete();
        return redirect('/employees')->with('success', 'Data Pegawai berhasil dihapus!');
    }
}
