@extends('layouts.app')

@section('title', 'Seller: My page')
@section('content')

    <div class="container seller">
        <div class="container-header border border-tertiary rounded-top px-3 py-1">
            <h1>Account Infomation</h1>
        </div>
        <div class="container-body border border-top-0 rounded-bottom border-tertiary px-3">
            <div class="row">
                <div class="col-8 mt-2">
                    <div class="row">
                        <div class="col-6">
                            <p class="mb-0">First Name</p>
                            <input class="rounded col-12 py-2 px-3" value="Emily" readonly>
                        </div>
                        <div class="col-6">
                            <p class="mb-0">Last Name</p>
                            <input class="rounded col-12 py-2 px-3" value="Jones" readonly>
                        </div>
                    </div>

                    <div class="col-12">
                        <p class="mb-0">Username</p>
                        <input class="rounded col-12 py-2 px-3" value="EmilyJones22" readonly>
                    </div>

                    <div class="col-12">
                        <p class="mb-0">Company Name</p>
                        <input class="rounded col-12 py-2 px-3" value="NovaLink Global" readonly>
                    </div>

                    <div class="col-12">
                        <p class="mb-0">Email</p>
                        <input class="rounded col-12 py-2 px-3" value="emily-jones58@gmail.com" readonly>
                    </div>

                    <div class="col-12">
                        <p class="mb-0">Phone Number</p>
                        <input class="rounded col-12 py-2 px-3" value="(603) 555-0123" readonly>
                    </div>
                </div>

                <div class="col-4">
                    <img src="#" alt="" class="rounded-circle picture-circle border border-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="mb-0">Street Address</p>
                    <input class="rounded py-2 px-3" value="4140 Parl" readonly>
                </div>

                <div class="col-4">
                    <p class="mb-0">Country / Region</p>
                    <input class="rounded col-12 py-2 px-3" value="United States" readonly>
                </div>
                <div class="col-4">
                    <p class="mb-0">States</p>
                    <input class="rounded col-12 py-2 px-3" value="Washinton DC" readonly>
                </div>
                <div class="col-4">
                    <p class="mb-0">Zip Code</p>
                    <input class="rounded col-12 py-2 px-3" value="20033">
                </div>

                <div class="col-6">
                    <p class="mb-0">password</p>
                    <input tyle="password" class="rounded col-12 py-2 px-3" value="**********">
                </div>

                <div class="col-6">
                    <p class="mb-0">Credit Card Number</p>
                    <input tyle="password" class="rounded col-12 py-2 px-3" value="***************">
                </div>

                <div class="col-12">
                    <p class="mb-0">Add review</p>
                    <textarea class="rounded col-12 py-2 px-3">Lorem ipsum dolor sit amet. Ut
                        rerum asperiores et eveniet mollitia sit optio repellendus non minima quam vel obcaecati eius sed
                        repudiandae tempora non dicta unde. Et dignissimos recusandae ut sint blanditiis et natus dolores
                        qui facere suscipit? Eos voluptates eveniet et aliquam nesciunt vel excepturi enim aut adipisci
                        culpa ut distinctio quia.
                        Et quia sapiente eos rerum accusantium et distinctio eveniet. Ab quos accusantium quo cupiditate
                        iure aut rerum ipsa aut quia doloribus ut dolorem nihil et laborum eius aut fuga tempore. Non autem
                        odit ut quod quos non corrupti quas et odit quas in eaque magni. In vero amet et ipsum sunt eum
                        alias dicta cum dolorem magni non debitis reiciendis.
                        Aut quis omnis non voluptatem assumenda quo earum galisum cum ipsum corrupti ea tempora repellendus.
                        Eos debitis dolore At magnam dolor aut nostrum veniam et magnam praesentium aut incidunt quia.
                    </textarea>
                </div>
                <div class="text-end mb-3">
                    <button type="button" class="btn btn-primary rounded-3" data-bs-toggle="modal"
                        data-bs-target="#editSellerProfile">Edit</button>
                </div>
            </div>
        </div>
    </div>
    @include('sellers.modal.editprofile')
@endsection
