@extends('layouts.app')

@section('content')
    <div class="row justify-content-center mx-5">
        <div class="col col-md-8">
            <div class="row">
                <div class="col col-md-4 text-end">
                    Name:
                </div>
                <div class="col col-md-8 text-start">
                    {{ $plant->name }}
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4 text-end">
                    Cientific name:
                </div>
                <div class="col col-md-8 text-start">
                    {{ $plant->cientificName }}
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4 text-end">
                    Family:
                </div>
                <div class="col col-md-8 text-start">
                    {{ $plant->family }}
                </div>
            </div>
            <div class="row">
                <div class="col col-md-4 text-end">
                    Description:
                </div>
                <div class="col col-md-8 text-start">
                    {{ $plant->description }}
                </div>
            </div>
        </div>
        <div class="col col-md-4">

        </div>
    </div>
    <div class="row justify-content-center mx-5 p-5">
            @foreach($images as $image)
                <div class="col col-md-3 m-3 shadow-lg p-2">
                    <img src="{{ $image->image }}" alt="Imagen" class="w-100 mb-2">
                    @php 
                        $liked = false;
                        foreach($image->likes as $like)
                        {
                            if($like->user == Auth::user()->id)
                            {
                                $liked = true;
                            }
                        }
                    @endphp
                    @if($liked)
                        <div><a href="#" class="text-warning fs-4"><i class="bi bi-star-fill"></i></a> {{ count($image->likes) }}</div>
                    @else
                        <div><a href="#" class="text-black fs-4"><i class="bi bi-star"></i></a> {{ count($image->likes) }}</div>
                    @endif
                </div>
            @endforeach
        </div>
@endsection