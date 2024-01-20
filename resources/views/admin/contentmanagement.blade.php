@extends('layouts.app')

@section('title', 'Admin: Content Management')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Content Management</h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary">
                <tr>
                    <th>ID</th>
                    <th>PRODUCT NAME</th>
                    <th>BUYER ID</th>
                    <th>SELLER ID</th>
                    <th>UNIT PRICE</th>
                    <th>QUANTITY</th>
                    <th>PURCHASE DATE</th>
                    <th>MORE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        # 1
                    </td>
                    <td>
                        SonicBlast Elite
                    </td>
                    <td>SarahSmith</td>
                    <td>TechSphaere Innovations</td>
                    <td>32.3(USD)</td>
                    <td>2</td>
                    <td>2023/8/24 08:30</td>
                    <td><a class="list-group-item text-danger-emphasis" href="{{ route('admin.contentmanagementdetails') }}" alt=""><i class="fa-solid fa-ellipsis"></i>view details</a></td>
                </tr>
                <tr>
                    <td>
                        # 2
                    </td>
                    <td>
                        PixelPulse VR Headset
                    </td>
                    <td>JohnDoe</td>
                    <td>GreenWave EcoTech</td>
                    <td>210.0(USD)</td>
                    <td>1</td>
                    <td>2023/8/24 08:35</td>
                    <td><a class="list-group-item text-danger-emphasis" href="{{ route('admin.contentmanagementdetails') }}" alt=""><i class="fa-solid fa-ellipsis"></i>view details</a></td>
                </tr>

                <tr>
                    <td>
                        # 3
                    </td>
                    <td>
                        AquaGlow Hydration Bottle
                    </td>
                    <td>EmilyJones</td>
                    <td>StellarCraft Solutions</td>
                    <td>83.5(USD)</td>
                    <td>1</td>
                    <td>2023/8/24 08:50</td>
                    <td><a class="list-group-item text-danger-emphasis" href="{{ route('admin.contentmanagementdetails') }}" alt=""><i class="fa-solid fa-ellipsis"></i>view details</a></td>
                </tr>

                <tr>
                    <td>
                        # 4
                    </td>
                    <td>
                        SkySurge Drone Explorer
                    </td>
                    <td>AlexJohnson</td>
                    <td>QuantumLogic Labs</td>
                    <td>125.0(USD)</td>
                    <td>1</td>
                    <td>2023/8/24 08:52</td>
                    <td><a class="list-group-item active text-danger-emphasis" href="{{ route('admin.contentmanagementdetails') }}"><i class="fa-solid fa-ellipsis"></i>view details</a></td>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation usermanagement">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link border disabled" href="{{ route('admin.contentmanagementdetails') }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item checked"><a class="page-link" href="{{ route('admin.contentmanagementdetails') }}">1</a></li>
                    <li class="page-item"><a class="page-link" href="{{ route('admin.contentmanagementdetails') }}">2</a></li>
                    <li class="page-item"><a class="page-link" href="{{ route('admin.contentmanagementdetails') }}">3</a></li>
                    <li class="page-item">
                        <a class="page-link border" href="{{ route('admin.contentmanagementdetails') }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection