@extends('layout.layout')
@section('content')

@include('portion.header')
<div class="cart-title">
    <h3>Elements du panier</h3>
</div>
<table class="table my-table table-borderless">
    <thead>
        <th>Image du livre</th>
        <th>Titre</th>
        <th>Quantité</th>
        <th>Prix</th>
        <th>Supprimer</th>
    </thead>
    <tbody>
        @foreach ($cart as $item)
        <tr class="table-row">
            <td>
                <div class="image">
                    <img src="{{URL::to('img/'.$item['image'])}}" alt="">
                </div>
            </td>
            <td class="fw-bold"><p style="margin-top:12px; margin-bottom:0">{{$item['titre']}}</p></td>
            <td>
                <div class="quantity-input " style="margin-top:9px">
                    <input class="form-control text-center quantite" type="num" style="max-width: 3rem" name="quantite" value="{{$item['quantite']}}" />
                </div>
            </td>
            <td class="fw-bold">
                <p style="margin-top:12px; margin-bottom:0">{{$item['prix']}}</p>
            </td>
            <td class="fw-bold">
                <form action="{{route('deleteCart')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item['id']}}">
                    <button type="submit" class="supprimer" style="margin-top:12px">
                        <i class="fa-solid fa-xmark" style="opacity: 0.6"></i>
                    </button>  
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection