@extends('include.master')

@section('content')
<div class="container-fluid">
<div class="welcomsection"style=" background-image:url('{{asset('staticimg/hero-bg.png')}}')">
   <section class="firstsection">

    <div class="row">
        <div class="col-md-6">
            <h1 class="h1bankname">
            @if (Session::has('user'))

       {{Session::get('user.fullname')}}
   @endif
   Welcome to the</h1>

            <h1 class="bank">Nishchay's Cashbook</h1>
            <h1 class="banks">Service</h1>
            <section class="servicelogin">
                <div class="row">
                    <div class="col-md-5">
                        <button>Login to check balance</button>
                    </div>
                    <div class="col-md-5">
                        <button>Our Services</button>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <img src="{{asset('staticimg/hero-img.svg')}}" class="img-fluid"/>
        </div>
    </div>
   </section>
</div>
</div>
<div class="container">
<section class="abountsection">
<div class="row">
    <div class="col-md-3"></div>
<div class="col-md-6">
    <h1>About us</h1>
<header class="about">
    <p>We understand the importance of efficient financial management for businesses. Our mission is to empower businesses with robust tools that simplify and streamline their cash flow management. The Cashbook Module for Laravel is a testament to our commitment to providing high-quality solutions that cater to the unique needs of modern businesses.</p>
</header>
</div>
<div class="col-md-3"></div>
</div>
</section>
<section class="secondabout">
<div class="row">
    <div class="col-md-6">
        <p> Our Laravel Cashbook Module is a result of meticulous development and careful consideration of the challenges businesses face in managing their finances. This module is tailored to seamlessly integrate with Laravel applications, providing a comprehensive and user-friendly platform for tracking and managing cash transactions.</p>
        <div class="quicstart">
            <h1>Quic start with us</h1>
        <p>
            To open an account with us you must contact our admistrator and wait for an email of approval
        </p>
        <h1>Instant fund transfer</h1>
        <p>
        </p>
        Transfer fund from any country without any delay, fast and convienet with 100% security
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{asset('staticimg/about-img.svg')}}" class="img-fluid"/>
    </div>
</div>
</section>
<div class="notice">
    <h1>Notice</h1>
    <p>Here are some latest update about us</p>
</div>
<div class="notice2">
<div class="row">
    <div class="col-md-4">
        <h1>Public Service Pack</h1>
        <p>the Public Service Pack is a bundled products and services offering for public and civil servants which enable them benefit from tariff advantages through a comprehensive set of products and services.</p>
    </div>
    <div class="col-md-3">
        <h1>Quic loans</h1>
        <p>One month automatic net salary loan repayable within 10 months, to more contact bank amistrator</p>
    </div>
    <div class="col-md-4">
        <h1>Current Account</h1>
        <p>current account offers a convenient means by which you can manage your day-to-day finances.
             This account enables you to carry out your regular payments and deposits transactions while
             at the same time enjoying access
            to your money at any time.</p>
    </div>

</div>
</div>
</div>
@endsection
