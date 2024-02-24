<!-- Modal -->
<div class="modal fade" id="editSellerProfile" tabindex="-1" aria-labelledby="editSellerProfile" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content text-center">
            <div class="d-flex flex-row-reverse me-2 mt-2">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container mt-4 col-10">
                <div class="container-header border border-tertiary rounded-top px-3 py-1">
                    <h1>Account Infomation</h1>
                </div>
                <div class="container-body border border-top-0 rounded-bottom border-tertiary px-3 text-start">
                    <form action="#" method="">
                        <div class="row">
                            <div class="col-8 mt-2">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="firstName" class="form-label mb-0 mt-2">First Name</label>
                                        <input type="text" class="form-control" id="firstName" value="Emily">
                                    </div>
                                    <div class="col-6">
                                        <label for="lastName" class="form-label mb-0 mt-2">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" value="Jones">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="username" class="form-label mb-0 mt-2">Username</label>
                                    <input type="text" class="form-control" id="username" value="EmilyJones22">
                                </div>

                                <div class="col-12">
                                    <label for="companyName" class="form-label mb-0 mt-2">Company Name</label>
                                    <input type="text" class="form-control" id="companyName" value="NovaLink Global">
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label mb-0 mt-2">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        value="emily-jones58@gmail.com">
                                </div>

                                <div class="col-12">
                                    <label for="phoneNumber" class="form-label mb-0 mt-2">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber" value="(603) 555-0123">
                                </div>
                            </div>

                            <div class="col-4 text-center">
                                <img src="https://via.placeholder.com/150" alt="profile image"
                                    class="rounded-circle picture-circle border border-primary mt-2">
                                <input type="file" class="form-control mt-2" id="picture">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <label for="streetAddress" class="form-label mb-0 mt-2">Street Address</label>
                                <input type="text" class="form-control" id="streetAddress" value="4140 Parl">
                            </div>
                            <div class="col-4">
                                <label for="country" class="form-label mb-0 mt-2">Country / Region</label>
                                <input type="text" class="form-control" id="country" value="United States">
                            </div>
                            <div class="col-4">
                                <label for="states" class="form-label mb-0 mt-2">States</label>
                                <input type="text" class="form-control" id="states" value="Washinton DC">
                            </div>
                            <div class="col-4">
                                <label for="zipCode" class="form-label mb-0 mt-2">Zip Code</label>
                                <input type="text" class="form-control" id="zipCode" value="20033">
                            </div>

                            <div class="col-6">
                                <label for="password" class="form-label mb-0 mt-2">Password</label>
                                <input type="text" class="form-control" id="password" value="123456">
                            </div>

                            <div class="col-6">
                                <label for="creditCard" class="form-label mb-0 mt-2">Credit Card Number</label>
                                <input type="text" class="form-control" id="creditCard" value="123456">
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="review" class="form-label mb-0 mt-2">Add review</label>
                            <textarea class="rounded col-12" id="review" placeholder="Input Review">test</textarea>
                        </div>

                        <div class="d-flex flex-row-reverse gap-2">
                            <button type="submit" class="btn btn-primary rounded-3">Save Change</button>
                            <button type="button" class="btn btn-secondary rounded-3 me-2"
                                data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
