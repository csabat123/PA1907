
@extends ('adminlayouts.master')

@section('title', 'Team View')




    @section('content')
        <div class="team">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2><center>Group Management</h2>
                </div>
                <div class="center">
                    <a class="btn btn-success" href="{{ route('team.create') }}"> Managing Team</a>
                </div>
                <br>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif


        @foreach ($teamuser as $team)
        <div class="team">
                <center><div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $team->groupName }}</h5>
                            @foreach ($userShow1 as $user)

                            @if($team->group_id == $user->group_id )

                            <p class="card-text">{{ $user->firstName }} {{$user->lastName}}</p>

                            @endif

                        @endforeach
                            <form action="{{ route('team.destroy',$team->id) }}" method="POST">
                            <a class="btn btn-info" style="float:right; margin-right:0%; length:10%" href="{{ route('team.show',$team->id) }}">Show</a>
                            <a class="btn btn-primary" style="float:right; margin-right:5%; length:5%" href="{{ route('team.edit',$team->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="float:right; margin-right:5%; length:5%" class="btn btn-danger">Delete</button>
                            </form>

                        </div>
                    </div>
                    <br>
                </div>
                @endforeach
        </div>



        {{-- The card session --}}

        {{-- <center><div class="row">

                <br>
                <div class="card bg-light text-dark col-xs-12 col-sm-12 col-md-12">
                <div class="card-header">Group1</div>
                        <div class="card-body text-danger">
                                @foreach ($userShow1 as $key => $student)
                                <p>{{$student->firstName}} {{$student->lastName}}</p>
                                @endforeach


                        </div>
                </div>

            </div>

            <br>



            <div class="row">
                <br>
                <div class="card bg-light text-dark col-xs-12 col-sm-12 col-md-12">
                <div class="card-header">Group2</div>
                        <div class="card-body text-danger">
                                @foreach ($userShow2 as $student)
                                <p>{{$student->firstName.' '.$student->lastName}} </p>
                                @endforeach


                        </div>
                </div>
            </div>
            <br> --}}



    @endsection
