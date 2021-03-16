<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Institutions;
use App\Models\Status;

class InstitutionsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $institutions = Institutions::with('user')->with('status')->paginate( 20 );
        return view('dashboard.institutions.institutionsList', ['institutions' => $institutions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = Status::all();
        return view('dashboard.institutions.create', [ 'statuses' => $statuses ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'status_id'         => 'required',
            'applies_to_date'   => 'required|date_format:Y-m-d',
            'institution_type'         => 'required'
        ]);
        $user = auth()->user();
        $institution = new Institutions();
        $institution->title     = $request->input('title');
        $institution->content   = $request->input('content');
        $institution->status_id = $request->input('status_id');
        $institution->institution_type = $request->input('institution_type');
        $institution->applies_to_date = $request->input('applies_to_date');
        $institution->users_id = $user->id;
        $institution->save();
        $request->session()->flash('message', 'Successfully created institution');
        return redirect()->route('institutions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institution = Institutions::with('user')->with('status')->find($id);
        return view('dashboard.institutions.institutionShow', [ 'institution' => $institution ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institution = Institutions::find($id);
        $statuses = Status::all();
        return view('dashboard.institutions.edit', [ 'statuses' => $statuses, 'institution' => $institution ]);
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
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'title'             => 'required|min:1|max:64',
            'content'           => 'required',
            'status_id'         => 'required',
            'applies_to_date'   => 'required|date_format:Y-m-d',
            'institution_type'         => 'required'
        ]);
        $institution = Institutions::find($id);
        $institution->title     = $request->input('title');
        $institution->content   = $request->input('content');
        $institution->status_id = $request->input('status_id');
        $institution->institution_type = $request->input('institution_type');
        $institution->applies_to_date = $request->input('applies_to_date');
        $institution->save();
        $request->session()->flash('message', 'Successfully edited institution');
        return redirect()->route('institutions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institution = Institutions::find($id);
        if($institution){
            $institution->delete();
        }
        return redirect()->route('institutions.index');
    }
}
