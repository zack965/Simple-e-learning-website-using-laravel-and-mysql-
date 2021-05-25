<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;
use App\Models\student_space;
use App\Models\type;
use App\Models\profile;
use Illuminate\Support\Facades\Auth;

class StudentSpaceController extends Controller
{

    //
    public function GetUserSkills($id){
        $student_space = null;
        $level = null;
        $id = Auth::id();
        //if(student_space::where('id_user','=',$id)->exists()){
            $student_space = student_space::where('id_user','=',$id)
            ->join('levels','levels.id_level','=','skills.level_id')
            ->join('profiles','profiles.profile_id','=','skills.profile_id')
            ->join('types','types.id_type','=','skills.type_domaine_id')
            ->get();
        //}
        return view('student.skills')->with('student_space',$student_space);
    }
    public function AddSkill_Get(){
        $levels = level::all();
        $types = type::all();
        $portfolios = profile::all();
        return view('student.AddSkills')
        ->with('types',$types)
        ->with('portfolios',$portfolios)
        ->with('levels',$levels);
    }
    public function AddSkillsStudent_post(Request $request){
        $std = student_space::create([
            'id_user'=>Auth::id(),
            'level_id'=>$request->id_level,
            'profile_id'=>$request->profile_id,
            'type_domaine_id'=>$request->type_domaine_id,
            'technology_name'=>$request->technology_name
        ]);
        $std->save();
        return redirect()->route('GetUserSkills',['id'=>Auth::id()]);
    }
    public function DeleteSkill($id_skill){
        $std = student_space::where('id_skill','=',$id_skill)->delete();
        return redirect()->route('GetUserSkills',['id'=>Auth::id()]);
    }

}
