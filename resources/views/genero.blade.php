@extends('plantillaG')


@section('contenido')
<div class="row justify-content-center">
    <div class="col-2 mt-2">

    </div>
    <div class="col-7 text-center">
        <div class="card p-3 bg-dark bg-opacity-50 border-info rounded-3 mb-4"
            style="background-color:aquamarine; color: white;">
            <label for="text" style="font-family: monospace; font-size: 30px;">Genero</label>
        </div>
    </div>
    <div class="col-2"></div>
</div>
<div class="row">
    <div class="col mt-3">
        <label for="text">Shonen</label>
        <div class="card" style="width: 18rem;">
            <img src="https://img.anime4filler.com/uploads/2023/09/dragon-ball-z-kai.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Dragon Ball Z</p>
            </div>
        </div>
        <p></p>
        <label for="text">Isekai</label>
        <p></p>
        <label for="text">Shojo</label>
        <p></p>
        <label for="text">Goren</label>
        <div class="card" style="width: 18rem;">
            <img src="https://th.bing.com/th/id/OIP.-mQkyinq94gjx54XPZK8AAAAAA?rs=1&pid=ImgDetMain" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Blood-C</p>
            </div>
    </div>
</div>

@endsection