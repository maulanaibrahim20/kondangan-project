@extends('index')
@section('content')
    <x-page-title title="Dashboard" home-url="{{ url('/admin/dashboard') }}" :breadcrumbs="[['label' => 'Dashboard', 'url' => url('admin/dashboard')]]" />
@endsection
