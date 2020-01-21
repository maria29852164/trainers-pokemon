<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Trainer;

use App\Http\Requests\StroreTrainerRequest;


class ControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainers=Trainer::all();

        return view('trainers/trainers', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trainers/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StroreTrainerRequest $request)
    {
       
        $trainer=new Trainer();
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name =  time().$file->getClientOriginalName();
            $trainer->avatar=$name;
 
            $file->move(public_path().'/images/',$name);

        }
       
        $trainer->name=$request->input('name');
        $trainer->password=$request->input('password');
        //$trainer->avatar=$name;
        $trainer->description=$request->input('description');
        $trainer->slug=$request->input('slug');
        $trainer->save();

        //return $request->all();
        return 'saved';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer){
      //$trainer=Trainer::find($id);
     

      return view('trainers/show',compact('trainer'));
       //return $trainer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('trainers/edit',compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Trainer $trainer,Request $request )
    {
        
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $name=time().$file->getClientOriginalName();
            $trainer->avatar=$name;
            $file->move(public_path().'/images/',$name);

        }
        $trainer->save();
        //$trainer->whereSlug($request->slug);
       return 'update';
        
     
        
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)

    {
    
     
        $file=public_path().'/images/'.$trainer->avatar;
        \File::delete($file);

        $trainer->delete();
        return 'deleted';
      
    }
}
