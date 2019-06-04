@extends('adminlayouts.master')

@section('content')
    <!-- Message -->
    @if(Session::has('message'))
    <p >{{ Session::get('message') }}</p>
 @endif

 <!-- Form -->
 <form action="{{ route('uploadFile') }}" method='POST' enctype='multipart/form-data' >
   @csrf
   <input type='file' name='file' >
   <input type='submit' name='submit' value='Import'>
 </form>
@endsection

