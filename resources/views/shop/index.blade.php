@extends('shop.layouts.shoplayout')

@section('content')
@include('shop.components.hero_slider')

@include('shop.components.categories')
@include('shop.components.quickview')
@include('shop.components.productarea')
@endsection
