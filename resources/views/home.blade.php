@extends('widget.head')
@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_7.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center"
            data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Agir aujourd'hui pour des lendemains meilleurs</h1>

                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a
                        href="#dons"
                        class="btn btn-white btn-outline-white px-4 py-3 popup-vimeo"><span
                            class="icon-gift mr-2"></span>Faire un don</a></p>
            </div>
        </div>
    </div>
</div>

<section class="ftco-counter ftco-intro" id="section-counter">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-1 align-items-stretch">
                    <div class="text text-white">
                        <strong style="color: white !important; font-weight:bold">+</strong>
                       <b> <strong class="number" data-number="500" style="color: white !important; font-weight:bold">0</strong></b>
                        <span style="color: white !important; font-weight:bold"><b>Enfants et personnes soutenus au Cameroun</b></span>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-2 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">Faire un don</h3>
                        <p>Faites la différence, soutenez la Fondation Himalaya.</p>
                        <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Je fais un don maintenant</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 color-3 align-items-stretch">
                    <div class="text">
                        <h3 class="mb-4">Devenir bénévole</h3>
                        <p>Chaque geste compte, donnez de l'espoir à ceux qui en ont besoin.</p>
                        <p><a href="#" class="btn btn-white px-3 py-2 mt-2">Je suis volontaire</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Faire un don</h3>
                        <p>Aidez-nous à construire un monde meilleur, Faites un don aujourd'hui et donnez de l'espoir.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Devenir Volontaire</h3>
                        <p>Devenez acteur du changement ! Votre engagement peut changer une vie.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 d-flex services p-3 py-4 d-block">
                    <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
                    <div class="media-body pl-4">
                        <h3 class="heading">Sponsoring</h3>
                        <p>Votre soutien est essentiel pour construire un avenir meilleur, Votre action peut changer une vie</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container-fluid">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Nos Causes</h2>
                <p>Nous sommes une organisation à but non lucratif qui s'engage à améliorer les conditions de vie des populations vulnérables à travers le monde.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-cause owl-carousel">
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('images/causes/cause-2.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Lutte contre la pauvreté</a></h3>
                                <p>Soutien aux familles démunies, accès à l'éducation et à la santé, microfinancement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('images/causes/cause-5.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Aide d'urgence</a></h3>
                                <p>Intervention en cas de catastrophes diverses, distribution de nourriture et de produits de première nécessité.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('images/causes/cause-1.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Protection de l'enfance</a></h3>
                                <p>Soutien aux orphelins et aux enfants défavorisés, accès à l'éducation et à la protection sociale.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('images/causes/cause-3.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Promotion de la santé</a></h3>
                                <p>Lutte contre les maladies transmissibles, sensibilisation aux questions de santé publique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="cause-entry">
                            <a href="#" class="img"
                                style="background-image: url({{asset('images/causes/cause-4.jpg')}});"></a>
                            <div class="text p-3 p-md-4">
                                <h3><a href="#">Ecologie durable</a></h3>
                                <p>Protection des ressources naturelles, lutte contre le changement climatique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="row justify-content-center mt-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Quelques Images</h2>
        </div>
    </div>
    <div class="d-md-flex">
        <a href="{{asset('images/gallery/cause-1.png')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/cause-1.png')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/gallery/cause-2.png')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/cause-2.png')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/gallery/cause-3.png')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/cause-3.png')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/gallery/img-2.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/img-2.jpg')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
    <div class="d-md-flex">
        <a href="{{asset('images/gallery/img-3.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/img-3.jpg')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/gallery/img-4.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/img-4.jpg')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/gallery/img-5.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/img-5.jpg')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
        <a href="{{asset('images/gallery/img-1.jpg')}}"
            class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
            style="background-image: url({{asset('images/gallery/img-1.jpg')}});">
            <div class="icon d-flex justify-content-center align-items-center">
                <span class="icon-search"></span>
            </div>
        </a>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Actualités récentes</h2>
                <p>Nous partageons régulièrement avec vous toutes nos activités, nos actions de déploiement et d'aide auprès des personnes étant dans le besoin.</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('https://scontent-lhr8-1.xx.fbcdn.net/v/t39.30808-6/425000476_262624456864501_3443625227739286344_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHjJaD7D3Ku5JjmYsfMZISUmvScSk5ZNK-a9JxKTlk0ryNoilSre72QIO2I4e8JvE0AAXjUXNUBHCuk5eMqWDN5&_nc_ohc=AXr0vif1UwMAX-Euwgy&_nc_ht=scontent-lhr8-1.xx&oh=00_AfBscffFvBa2fFO-1Emq0pkGie25pI6RtxudGAjV6MotYw&oe=65EC655F');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Fev 10-17, 2024</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="#">SPECIALE  COLECTE DE DONS DE VÊTEMENTS
                            POUR LES ORPHELINS DE LA RÉGION DE L'EST</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('https://scontent-lhr6-2.xx.fbcdn.net/v/t39.30808-6/398839363_205816832545264_3061394572295286749_n.jpg?stp=dst-jpg_s600x600&_nc_cat=100&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeEHNk_cL8Wj2KjL93I6n5dbyQhzdEeTdILJCHN0R5N0ggjBPcDMCZJbv7yBritAm460X2fHatJZXHWElTuFJJHK&_nc_ohc=zM1C4aTkjAUAX9u80Ao&_nc_ht=scontent-lhr6-2.xx&oh=00_AfA3y6kTH1OvTVbjU_vAfIcBQ8d2r8UBwt6ef1ggVgziCw&oe=65EC17CF');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Nov 02, 2023</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="#">𝙅𝙤𝙪𝙧𝙣𝙚́𝙚 𝙘𝙤𝙢𝙢𝙚́𝙢𝙤𝙧𝙖𝙩𝙞𝙫𝙚 des 𝘿𝙚́𝙛𝙪𝙣𝙩𝙨
                            avec les veuves de la ville de 𝙔𝙖𝙤𝙪𝙣𝙙𝙚́</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('https://scontent-lhr6-2.xx.fbcdn.net/v/t39.30808-6/378694291_174311265695821_3424604077725822160_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=dd5e9f&_nc_eui2=AeHp5XZEgpVORl1gzSuhvEAZfC2F3471M318LYXfjvUzfYJ_vWtLbue5ZhW_MPSzxtz4M7cvSIjQTHr5ADvPTkhg&_nc_ohc=hME81DQFWIQAX_6wWqI&_nc_ht=scontent-lhr6-2.xx&oh=00_AfD_Vu_qustAvgSELOzSRdAmjttrUkMBMqZ7AcLHpJUoEQ&oe=65EC2A03');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sept 13, 2023</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-3"><a href="#">Visite ᴅᴇ ʟ’ᴏʀᴘʜᴇʟɪɴᴀᴛ Bon ʙᴇʀɢᴇ́
                            Nkoabang </a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <h2 class="mb-4">Our Latest Events</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/event-1.jpg');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span>
                        </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/event-2.jpg');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span>
                        </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('images/event-3.jpg');">
                    </a>
                    <div class="text p-4 d-block">
                        <div class="meta mb-3">
                            <div><a href="#">Sep. 10, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mb-4"><a href="#">World Wide Donation</a></h3>
                        <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>
                                10:30AM-03:30PM</span> <span><i class="icon-map-o"></i> Venue Main Campus</span>
                        </p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.</p>
                        <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="ftco-section-3 img" style="background-image: url({{asset('images/gallery/img-6.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-md-6 d-flex ftco-animate">
                <div class="img img-2 align-self-stretch" style="background-image: url(https://img.freepik.com/vecteurs-libre/volontaires-collectent-marchandises-pour-charite-dans-enorme-boite-dons-donnent-pieces-monnaie-dans-pot-don-fonds-dons-charite-concept-don-nature-illustration-isolee-bleu-corail-rose_335657-1387.jpg);"></div>
            </div>
            <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                <h3 class="mb-3">Faire un don</h3>
                <form action="#" class="volunter-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
