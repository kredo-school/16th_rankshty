@extends('layouts.app')

@section('title', 'Admin: Content Management')

@section('content')
    <div class="justify-content-center rounded border" style="min-width:696px">
        <h1 class="ps-3 mt-2">Content Management <span class="ps-3 mt-2 fs-2">Details</span> </h1>
        <table class="table table-hover align-migddle bg-white text-secondary text-center">
            <thead class="small table-secondary text-secondary">
                <tr>
                    <th>STATUS</th>
                    <th>CATEGORY</th>
                    <th>SIZE</th>
                    <th>COLOR</th>
                    <th>REVIEW TITLE</th>
                    <th>RATING</th>
                    <th>UNIT COST</th>
                    <th>STOCK QUANTITY</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        shipped
                    </td>
                    <td>
                        Audio
                    </td>
                    <td>S </td>
                    <td>Orange </td>
                    <td>Thunderous Soundwaves Delivered!</td>
                    <td>3</td>
                    <td>16.25(USD)</td>
                    <th>425</th>
                </tr>
                <tr>
                    <td>
                        shipped
                    </td>
                    <td>
                        Electronics
                    </td>
                    <td>LL </td>
                    <td>Purple </td>
                    <td>Immersive Reality at Its Finest!</td>
                    <td>4</td>
                    <td>105.0(USD)</td>
                    <th>38</th>
                </tr>

                <tr>
                    <td>
                        shipping
                    </td>
                    <td>
                        Outdoor Accessories
                    </td>
                    <td>M </td>
                    <td>Green </td>
                    <td>Staying Hydrated in Style!</td>
                    <td>3.5</td>
                    <td>41.75(USD)</td>
                    <th>90</th>
                </tr>

                <tr>
                    <td>
                        purchased
                    </td>
                    <td>
                        Electronics
                    </td>
                    <td>M </td>
                    <td>Yellow </td>
                    <th>Soaring to New Heights!</th>
                    <td>4</td>
                    <td>62.5(USD)</td>
                    <th>238</th>
                </tr>
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation usermanagement">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link border disabled" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item checked"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link border" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection