@extends('layouts.app')

@section('title','Guide Page')

@section('content')
<form action="#" method="post">
    @csrf
    <div class="title fw-normal ms-5">
        <h1>
            Store Opening Process
        </h1>
    </div>
    <div class="container  mt-5">
        <div class="row">
           <div class="col-2 ms-5">
               <h4  style="white-space: nowrap;">Store Aprication</h4>
               <p>
                 <i class="fa-solid fa-file-pen m-3 p-5" style="background-color: rgba(76, 160, 212, 0.10); color: #00000099; font-size: 50px; border-radius: 30%;"></i>
                </p>
           </div>
           <div  class="col-2 text-center">
             <i class="fa-solid fa-arrow-right" style="font-size: 4em; margin-top: 100px; margin-left: 60px;  color: #00000080;"></i>
           </div>

           <div class="col-2">
                <h4 style="white-space: nowrap;">Commencement of Use</h4>
                <p>
                 <i class="fa-solid fa-desktop m-3 p-5" style="background-color: rgba(76, 160, 212, 0.10); color: #FA8557; font-size: 50px; border-radius: 30%;"></i>
               </p>
           </div>
           <div  class="col-2 text-center">
            <i class="fa-solid fa-arrow-right" style="font-size: 4em; margin-top: 100px; margin-left: 60px; color: #00000080;"></i>
           </div>

          <div class="col-2">
                <h4  style="white-space: nowrap;">Operation Start</h4>
                <p>
                 <i class="fa-solid fa-store m-3 p-5" style="background-color: rgba(76, 160, 212, 0.10); color: #0C66A6; font-size: 50px; border-radius: 30%;"></i>
                </p>
          </div>
        </div>
        <div class="text-muted" style="justyfy-content: space-around;">
            <div class="row ms-3">
                <div class="col-4">
                    <p style="max-width: 200px;  margin-left: 30px;">Please proceed with the necessary procedures for opening a store by clicking the "Store Application" button. After completing the process, you will start using Merchant Server, and we will create your actual page.</p>
                </div>
                <div  class="col-4">
                    <p style="max-width: 200px;  margin-left: 30px;">Use the store management system to create your shop on RANKSHTY and prepare for payments and shipping. Upon passing the open review, your store will officially open.</p>
                </div>
                <div  class="col-4">
                    <p style="max-width: 200px;  margin-left: 30px;">Finally, your store will open on the RANKSHTY! Orders will start coming in, and you will receive feedback from customers. Let's make your store one that brings smiles to many customers.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn px-5 mt-2" style="background-color: rgba(76, 160, 212, 0.10); color: #0C66A6;">Sign up</button>
    </div>
</form>
@endsection