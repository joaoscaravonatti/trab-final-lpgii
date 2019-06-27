<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = DB::table('companies')->get();

        return view('companies.index', ['companies' => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = Company::create($request->all());

        if ($status) {
            Session::flash('success', 'Empresa alterada com sucesso!');
            return redirect('companies');
        }

        Session::flash('error', 'Ocorreu um erro ao alterar a empresa!');
        return view('companies.create');
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
        // $user = DB::table('users')
        //     ->join('roles', 'users.role_FK', '=', 'roles.id')
        //     ->where('users.id', '=', $id)
        //     ->select('users.*', 'roles.name as role')
        //     ->get();

        return view('companies.edit', ['company' => Company::findOrFail($id)]);
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
        $company = Company::findOrFail($id);

        $status = $company->update($request->all());

        if ($status) {
            Session::flash('success', 'Empresa alterada com sucesso!');
            return redirect('companies');
        }

        Session::flash('error', 'Ocorreu um erro ao alterar a empresa!');
        return view('companies.edit', ['company' => $company]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Company::destroy($id);
        Session::flash('success', 'Empresa excluída com sucesso!');

        return redirect('companies');
    }
}
