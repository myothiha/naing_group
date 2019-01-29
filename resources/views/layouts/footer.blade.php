<section class="footer-info">
    <div class="container footer-info">
        <div class="row py-4 mx-2">
            <div class="col-lg-3 col-md-6 py-2">
                <div class="row d-flex justify-content-center footer-line py-3 ">
                    <div class="col-3 align-self-center"><i class="fas fa-2x fa-map-marker "></i></div>
                    <div class="col-9">
                        <h6>ADDRESS</h6>
                        <p class="footer-text">{{ $contact->address }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-2">
                <div class="row d-flex justify-content-center footer-line py-3">
                    <div class="col-3 align-self-center"><i class="fas fa-2x fa-mobile-alt"></i></div>
                    <div class="col-9">
                        <h6>PHONE</h6>
                        <p class="footer-text">{{ $contact->phone }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-2">
                <div class="row d-flex justify-content-center footer-line py-3">
                    <div class="col-3 align-self-center"><i class="fas fa-2x fa-envelope"></i></div>
                    <div class="col-9">
                        <h6>Email</h6>
                        <p class="footer-text">{{ $contact->mail }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 py-2">
                <div class="row d-flex justify-content-center footer-line py-3">
                    <div class="col-3 align-self-center"><i class="fas fa-clock fa-2x"></i></div>
                    <div class="col-9">
                        <h6>OFFICE HOURS</h6>
                        <p class="footer-text">{{ $contact->office }}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bar">
    </div>

    <div class="bg-gray py-2">
        <div class="container">
            <p class="copy my-2">©{{ \Carbon\Carbon::now()->year }}  by Naing Group Construction, Developed by
                <a href="http://www.upsalute.com" target="_blank" style="color: whitesmoke;">UpSalute Co.Ltd </a>
                    & Naing Techlabs
            </p>
        </div>
    </div>
</section>
