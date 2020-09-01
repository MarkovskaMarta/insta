@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="https://images.clipartlogo.com/files/istock/previews/9085/90857777-animal-pig-vector-icon.jpg" alt="" class="rounded-circle" width="180" height="180">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>sk</strong> posts</div>
                <div class="pr-5"><strong>sk</strong> followers</div>
                <div class="pr-5"><strong>sk</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">
                quickpic
            </div>
            <div>
                apraksts
            </div>
            <div>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">hehe</a>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://www.schirn.de/fileadmin/SCHIRN/Magazin/Simone/Instagrammer_Daniel_und_Anna/MAGRITTE-drcuerda_anniset_02_share.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://www.atlasofplaces.com/atlas-of-places-images/_scaled/ATLAS-OF-PLACES-RENE%CC%81-MAGRITTE-EKPHRASIS-GPH-1.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://painting-planet.com/images/8/image313.jpg" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
