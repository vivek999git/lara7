@extends('layouts.app') {{-- Or your master layout --}}

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Sample Form</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{$data2->url}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
                type="text" 
                class="form-control " 
                id="name" 
                name="name" 
                value="{{ old('name') }}"
                required
            >
            
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                class="form-control " 
                id="email" 
                name="email" 
                value="{{ old('email') }}"
                required
            >
            
        </div>

        

        <div class="mb-3">
            <label for="email" class="form-label">Phone</label>
            <input 
                type="text" 
                class="form-control  " 
                id="phone" 
                name="phone" 
                value="{{ old('phone') }}"
                required
            >
            
        </div>


        <div class="mb-3">
            <label for="email" class="form-label">company</label>
            <input 
                type="text" 
                class="form-control  " 
                id="company" 
                name="company" 
                value="{{ old('company') }}"
                required
            >
           
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
