<div class="col-3 categorize-bar">
    <div class="mb-4">
        <h3>Main Categories</h3>
        <nav class="nav flex-column">
            <a href="#" class="form-check">
                <input class="form-check-input" type="radio" value="" name="mainCheck" id="defaultCheck1">
                <label class="form-check-label text-black" for="defaultCheck1">Fasion(500)</label>
            </a>
            <a href="#" class="form-check">
                <input class="form-check-input" type="radio" value="" name="mainCheck" id="defaultCheck2">
                <label class="form-check-label text-black" for="defaultCheck2">Sports(300)</label>
            </a>
            <a href="#" class="form-check">
                <input class="form-check-input" type="radio" value="" name="mainCheck" id="defaultCheck3">
                <label class="form-check-label text-black" for="defaultCheck3">Food(200)</label>
            </a>
        </nav>
    </div>

    <div class="mb-4">
        <h4>Sub categories</h4>
        <nav class="nav flex-column">
            <a href="#" class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="subCheck1">
                <label class="form-check-label text-black" for="subCheck1">Tops(300)</label>
            </a>
            <a href="#" class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="subCheck2">
                <label class="form-check-label text-black" for="subCheck2">Bottoms(100)</label>
            </a>
            <a href="#" class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="subCheck3">
                <label class="form-check-label text-black" for="subCheck3">Inner(100)</label>
            </a>
        </nav>
    </div>

    {{-- Price --}}
    <div class="mb-4">
        <div class="accordion w-75" id="accordionPanelsStayOpenExample">
            <div class="accordion-item border-0">
                <div class="accordion-headerborder-0">
                    <button class="accordion-button ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h4>Price</h4>
                    </button>
                </div>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body border-0">
                        <div class="selector">
                            <div class="price-slider me-3">
                                <div id="slider-range2"
                                    class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span
                                        tabindex="3500" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <span>Price:</span>
                                <span id="min-price2" data-currency="¥" class="slider-price">0</span> <span
                                    class="seperator">-</span> <span id="max-price2" data-currency="¥" data-max="3500"
                                    class="slider-price">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Rating --}}
    <div>
        <div class="accordion w-75" id="accordionPanelsStayOpenExample">
            <div class="accordion-item border-0">
                <div class="accordion-header">
                    <button class="accordion-button ps-0" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                        <h4>Rating</h4>
                    </button>
                </div>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ratingCheck5">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <label class="form-check-label" for="ratingCheck5">
                                    5.0
                                </label>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ratingCheck4">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <label class="form-check-label" for="ratingCheck4">
                                    4.0 % up
                                </label>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ratingCheck3">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <label class="form-check-label" for="ratingCheck3">
                                    3.0 % up
                                </label>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="ratingCheck2">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <label class="form-check-label" for="ratingCheck2">
                                    2.0 % up
                                </label>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="fratingCheck1">
                            <div>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <label class="form-check-label" for="ratingCheck1">
                                    1.0 % up
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
