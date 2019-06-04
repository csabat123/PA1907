@extends ('adminlayouts.master')

@section('content')

<div class="col-lg-12 margin-tb">
    <a class="btn btn-primary" href="{{ route('team.index') }}" style="float:right"> Back</a>
    <div class="pull-left">
        <h2>Add New team</h2>
        <br>
    </div>
    <div class="float-right">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="height:100%">
                    <div class="card-body">
                        <h5 class="card-header">Upload CSV List</h5>
                        <br>
                        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <strong>Select Your file here:</strong>
                            <input type="file" name="file" class="form-control" style="width:100%;">
                            <br><br>
                            <center><button class="btn btn-success col-12" style="">Import User Data</button>
                                <br><br>
                                <a class="btn btn-warning col-12" href="{{ route('export') }}">Export User Data</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-header">Create New Group</h5>
                        <form action="{{ route('team.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <br>
                                        <strong>Group Name:</strong>
                                        <input type="text" name="groupName" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Group Member:</strong>
                                        <select class="form-control" style="height:10%px" name="groupMember[]" id="groupMember" placeholder="Detail" multiple="multiple">
                                        @foreach($userStudent as $user)
                                        <option value={{$user->firstName}}{{$user->lastName}}
                                                @if ($user == old('groupMember[]', $user->option))
                                                    selected="selected"
                                                @endif
                                            >{{ $user->firstName}} {{$user->lastName}}
                                        </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="float:left; width:45%">Submit</button>
                                    <a class="btn btn-success" style="float:right; width:45%" href="{{ route('randomGroup') }}"> Randomise Team</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- New Row --}}
        <br>
        <div class="row">
                <div class="card border-danger col-xs-12 col-sm-12 col-md-12">
                        <div class="card-header">Unassign Students</div>
                        <div class="card-body text-danger">
                        @foreach($userStudent as $key => $user)

                        {{$user->firstName}} {{$user->lastName}} ||
                        @endforeach
                        </div>
        </div>
    </div>
    <br>

    {{-- Team Card Show here --}}






</div>








</div>




@endsection
