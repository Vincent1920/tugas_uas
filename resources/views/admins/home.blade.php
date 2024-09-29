@extends('admins.index')
@section('admin')
<!-- 
    IF-8 
Abdul Malik Febrian Zulkifli (10123308)
Nadzla Khoerunnisa Misbah(10123285)
vincent luhulima  (10123309)
 -->
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">welcame admin,
         {{auth()->user()->name }}
        </h1>

  </div>
@endsection