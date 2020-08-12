<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Certificates;

class CertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	public function __construct()
	{
		$this->middleware('auth');
	}
    public function index(Request $request)
    {
        //
		echo '==='.$request->user()->can('create-tasks');
		
		$certificates = Certificates::paginate(2);
		return view('certificates.index',compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$request->validate([
			'name'=>'required|max:255',
			'certificateid'=>'required|min:10',
			'location'=>'required|max:255',
			'coursecode'=>'required',
			'courseid'=>'required',
			'coursename'=>'required|max:255',
		]);
		$certificates = new Certificates([
			'name'=>$request->get('name'),
			'certificateid'=>$request->get('certificateid'),
			'location'=>$request->get('location'),
			'coursecode'=>$request->get('coursecode'),
			'courseid'=>$request->get('courseid'),
			'coursename'=>$request->get('coursename'),
		]);
		$certificates->save();
		return redirect('/certificates')->with('success','Certificate Saved');
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
		$certificates = Certificates::find($id);
        return view('certificates.view', compact('certificates')); 
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
}
