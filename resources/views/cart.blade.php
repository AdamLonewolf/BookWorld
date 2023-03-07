@extends('layout.layout')
@section('content')

@include('portion.header')

<style>
    table th{
        font-size: 25px;
        color: #FE7D4E;
        opacity: 0.8;   
    }

    table td{
        font-size: 22px;
    }
    .total{
        flex-direction: column;
    }

</style>

<div class="bg-dark banner d-flex justify-content-center align-items-center" style="height: 350px !important; background-image:url(/assets/dddepth-345.jpg); background-position:center center; background-repeat:no-repeat; background-size:cover; position: relative;">
    <div class="overlay" style="width:100%; height:100%; background-color:#181818; position:absolute; opacity:0.4; z-index:1000"></div>
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder" style="z-index: 1000; position:relative">Le Panier</h1>
        </div>
    </div>
</div>

<section class="cart-section p-5">
    <div class="container">
        <div class="cart-title">
            <h2 class="mb-5" style="font-size:45px; font-weight:bold;">Elements du <span style="color:#FE7D4E">panier</span></h2>
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
        <div class="total p-4" style="background-color: #F1FDFB; width:900px; height:200px;">
            <div class="fw-bold" style="margin-right: 30px !important"><p style="font-size 25px; color:#4D7971">Sous-total : <span style="color:#181818"> {{$subtotal}}</span></p>
            </div>
            <div class="fw-bold" style="margin-right: 30px !important"><p style="font-size 25px; color:#4D7971">TVA (Taux 20%):<span style="color:#181818"> {{$tva}}</span></p>
            </div>
            <div class="fw-bold" style="margin-right: 30px !important"><p style="font-size 25px; color:#4D7971">Total: <span style="color:#181818"> {{$total}}</span></p>
            </div>
        </div> 
    </div>
</section>


@endsection