<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class KaryawanController extends Controller
{

    public function index(): View
    {
        $karyawans = Karyawan::paginate(5);
        return view ('karyawans.index')->with('karyawans', $karyawans);
    }

 
    public function create(): View
    {
        return view('karyawans.create');
    }

  
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required|unique:karyawans',
            'nama' => 'required',
            'alamat' => 'nullable',
            'no_telepon' => 'nullable',
        ], [
            'nik.required' => 'NIK wajib diisi.',
            'nik.unique' => 'NIK sudah terdaftar.',
            'nama.required' => 'Nama wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        Karyawan::create($request->all());

        return redirect()->route('karyawans.index')
            ->with('success', 'Karyawan berhasil ditambahkan.');
    }



    public function show(string $id): View
    {
        $karyawan = Karyawan::find($id);
        return view('karyawans.show')->with('karyawans', $karyawan);
    }

    public function edit(string $id): View
    {
        $karyawan = Karyawan::find($id);
        return view('karyawans.edit')->with('karyawans', $karyawan);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'nullable',
            'no_telepon' => 'nullable',
        ], [
            'nik.required' => 'NIK wajib diisi.',
            'nama.required' => 'Nama wajib diisi.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $karyawan = Karyawan::find($id);
        $karyawan->update($request->all());

        return redirect()->route('karyawans.index')
            ->with('updated', 'Karyawan berhasil diupdate.'); 
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Karyawan::destroy($id);
        return redirect()->route('karyawans.index')
        ->with('success', 'Karyawan berhasil dihapus.');
    }
}