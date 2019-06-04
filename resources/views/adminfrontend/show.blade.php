@extends ('adminlayouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show team</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('team.index') }}"> Back</a>
            </div>
            <br>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <center><div class="card-title"><strong>Group Name:  {{ $team->groupName }}</strong>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Details:</strong>
                                <br><br>
                                @foreach ($userShow1 as $user1)

                                @if($user1->group_id == $team->group_id)

                                    <p>{{ $user1->firstName }}  {{$user1->lastName}}</p>

                                @endif
                                @endforeach
                            </div>
                        </div>


                </div>
            </div>
        </div>

    </div>



@endsection
