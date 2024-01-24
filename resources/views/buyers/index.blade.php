@extends('layouts.app')

@section('title', 'Buyer: My page')

@section('content')
<div class="container mt-4 col-6">
    <div class="container-header border border-tertiary rounded-top px-3 py-1">
        <h1>Account Infomation</h1>
    </div>
    <div class="container-body border border-top-0 rounded-bottom border-tertiary px-3">
        <div class="row">
            <div class="col-8 mt-2">
                <div class="row">
                    <div class="col-6">
                        <p class="mb-0">First Name</p>
                        <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">David</p>
                    </div>
                    <div class="col-6">
                        <p class="mb-0">Last Name</p>
                        <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">Miller</p>
                    </div>
                </div>

                <div class="col-12">
                    <p class="mb-0">Company Name</p>
                    <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">NovaLink Global</p>
                </div>

                <div class="col-12">
                    <p class="mb-0">Email</p>
                    <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">novaLink_global21@Inc.com</p>
                </div>

                <div class="col-12">
                    <p class="mb-0">Phone Number</p>
                    <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">(603) 926-0167</p>
                </div>
            </div>

            <div class="col-4">
                <img src="#" alt="" class="rounded-circle picture-circle border border-primary">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="mb-0">Street Address</p>
                <p class="rounded py-2 px-3" style="background-color: #E6E6E6;">4140 Parl</p>
            </div>

            <div class="col-4">     
                <p class="mb-0">Country / Region</p>
                <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">United States</p>
            </div>
            <div class="col-4">  
                <p class="mb-0">States</p>
                <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">Washinton DC</p>
            </div>
            <div class="col-4">  
                <p class="mb-0">Zip Code</p>
                <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">20033</p>
            </div>

            <div class="col-6">
                <p class="mb-0">password</p>
                <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">**********</p>
            </div>

            <div class="col-6">
                <p class="mb-0">Credit Card Number</p>
                <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">***************</p>
            </div>

            <div class="col-12">
                <p class="mb-0">Add review</p>
                <p class="rounded col-12 py-2 px-3" style="background-color: #E6E6E6;">Lorem ipsum dolor sit amet. Ut rerum asperiores et eveniet mollitia sit optio repellendus non minima quam vel obcaecati eius sed repudiandae tempora non dicta unde. Et dignissimos recusandae ut sint blanditiis et natus dolores qui facere suscipit? Eos voluptates eveniet et aliquam nesciunt vel excepturi enim aut adipisci culpa ut distinctio quia.
                    Et quia sapiente eos rerum accusantium et distinctio eveniet. Ab quos accusantium quo cupiditate iure aut rerum ipsa aut quia doloribus ut dolorem nihil et laborum eius aut fuga tempore. Non autem odit ut quod quos non corrupti quas et odit quas in eaque magni. In vero amet et ipsum sunt eum alias dicta cum dolorem magni non debitis reiciendis.
                    Aut quis omnis non voluptatem assumenda quo earum galisum cum ipsum corrupti ea tempora repellendus. Eos debitis dolore At magnam dolor aut nostrum veniam et magnam praesentium aut incidunt quia.
                </p>
            </div>
            <div class="text-end mb-3">
                <button type="button" class="btn btn-primary rounded-3">Edit</button>
            </div>
        </div>
    </div>
</div>
@endsection
