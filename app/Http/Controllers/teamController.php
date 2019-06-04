<?php

namespace App\Http\Controllers;

use App\team;
use App\User;
use App\role_team;
use App\teamdetail;
use Illuminate\Http\Request;

class teamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users,team $teams)
    {
        $teamuser = team::latest()->paginate(5);




        $userShow2 = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->join('teamdetail','users.id','=','teamdetail.user_id')
        ->where('teamdetail.group_id','=', 2)
        ->get();

        $teamuser = $teams
        ->join('teamdetail','team.group_id','=','teamdetail.group_id')
        ->leftjoin('users','teamdetail.user_id','=','users.id')
        ->select('team.id','team.groupName','team.group_id')
        ->distinct()
        ->get();

        $teamuser2 = $teams
        ->join('teamdetail','team.group_id','=','teamdetail.group_id')
        ->leftjoin('users','teamdetail.user_id','=','users.id')
        ->where('teamdetail.group_id','=',2)
        ->get();

        $userShow1 = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->join('teamdetail','users.id','=','teamdetail.user_id')
        ->select('users.firstName','users.lastName','teamdetail.group_id')
        ->get();





        return view('adminfrontend.team',compact('teams', 'users','userShow1','userShow2','teamuser','teamuser2'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $users)
    {


        $userStudent = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->leftjoin('teamdetail','users.id','=','teamdetail.user_id')
        ->select('users.*')
        ->where('role_user.role_id','=','2')
        ->where('teamdetail.group_id','=', NULL)
        ->get();


        $userShow1 = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->leftjoin('teamdetail','users.id','=','teamdetail.user_id')
        ->get();



        $userShow2 = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->leftjoin('teamdetail','users.id','=','teamdetail.user_id')
        ->where('teamdetail.group_id','=', 2)
        ->implode('users.firstName')
        ->get();



        return view('adminfrontend.create', compact('users', 'userStudent','userShow1','userShow2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groupName = $request->input('groupName');
        $groupMember = $request->input('groupMember');
        $groupMember = implode(',', $groupMember);
        $input = $request->except('groupMember');
        //Assign the "mutated" news value to $input
        $input['groupMember'] = $groupMember;

        $request->validate([
            'groupName' => 'required',
            'groupMember' => 'required',
        ]);



        team::create([
            'groupName' =>$groupName,
            'groupMember' =>$groupMember

        ]);

        return redirect()->route('team.index')
                        ->with('success','Team created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team, teamdetail $teamdetails, User $user)
    {
        //

        $userShow1 = $teamdetails
        ->join('users','teamdetail.user_id','=','users.id')
        ->select('users.firstName','users.lastName','teamdetail.group_id')
        ->get();




        return view('adminfrontend.show',compact('team','userShow1','user','teamdetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\team  $team
     * @param  \App\User  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(team $team, User $users)
    {
        //
        $users = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->select('users.*')
        ->where('role_user.role_id','=','2')
        ->get();



        return view('adminfrontend.edit',compact('team', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\team  $team
     * @param  \App\User  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, team $team, User $user)
    {
        //

        $groupName = $request->input('groupName');
        $groupMember = $request->input('groupMember');
        $groupMember = implode(',', $groupMember);
        $input = $request->except('groupMember');
        //Assign the "mutated" news value to $input
        $input['groupMember'] = $groupMember;

        $request->validate([
            'groupName' => 'required',
            'groupMember' => 'required',
        ]);

        $team->update([

            'groupName' =>$groupName,
            'groupMember' =>$groupMember
        ]);

        return redirect()->route('team.index')
                        ->with('success','Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        //
        $team->delete();

        return redirect()->route('team.index')
                        ->with('success','Team deleted successfully');
    }

    /**
     * Adding new team.
     *
     * @param  \App\team  $team
     * @param  \App\teamdetail  $teamdetails
     * @return \Illuminate\Http\Response
     */

    public function randomGroup(User $users, teamdetail $teamdetails, team $teams)
    {



        $users=$users;


        $userStudent = $users
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->select('users.*')
        ->where('role_user.role_id','=','2')
        ->get();

        $userid = $users
        ->select('users.id','teamdetail.group_id')
        ->join('role_user','users.id', '=',  'role_user.user_id')
        ->leftjoin('teamdetail','users.id','=','teamdetail.user_id')
        ->where('role_user.role_id','=','2')
        ->get();


        $teamplay = $teamdetails
        ->select('teamdetail.group_id')
        ->distinct()
        ->orderby('teamdetail.group_id')
        ->get();



        //<<-------Team select start here--------->>
        $userCount = $userStudent->count();
        $groupCount = intval($userCount/4);
        $extraUser = $userCount%4;

        if ($extraUser>0)
        {
            $groupCount++;
        }





        $i=1;
        foreach ($userid as $key => $idget)
        {
                $datas[] = ['user_id' => $idget->id, 'group_id' => $idget->group_id];
            foreach($datas as $key =>$data)
            {

                $teamdetails->updateOrCreate(['user_id'=>$idget->id, 'group_id'=>$idget->group_id],$datas);



            }
        }



        $teamCount = $teamdetails->count();
        $teamids= $teamdetails->select('user_id')->get();


                $i++;

                $id = $teamdetails->inRandomOrder()->take(4)->pluck('user_id');

        foreach($teamids as $key=> $user_idget)
        {
                        $teamdetails
                        ->where('user_id',$user_idget->user_id)
                        ->inRandomOrder()
                        ->update(['group_id'=>1]);
        }
        $userCount = $userCount-4;


        foreach($id as $key=> $id1)
        {
                        $teamdetails
                        ->where('user_id',$id1)
                        ->inRandomOrder()
                        ->take(4)
                        ->update(['group_id'=>2]);
        }

        $j=0;

        foreach ($teamplay as $key => $teamplay1)
        {
        $teams = team::updateOrCreate([

            'groupName' => 'group'.$j,
            'group_id' => $teamplay1->group_id
        ]);

        $j++;
        }



        return view('adminfrontend.create',compact('teamdetails','userStudent'));





    }


}
