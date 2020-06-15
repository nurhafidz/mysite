@extends('publik.layouts.app')
@section('content')
<h2 class="mbr-section-title pb-2 mbr-fonts-style display-2" id="about">
    Image between two columns
</h2>
<h3 class="mbr-section-subtitle pb-3 mbr-fonts-style display-5">
    Click any text or icon to edit or style it. Use the block parameters to hide/show text or icons and change  media size.
</h3>

<div class="media-container-row pt-5">
    <div class="block-content align-right">
        <div class="card pl-3 pr-3 pb-5">
            <div class="mbr-card-img-title">
                <div class="card-img pb-3">
                     <span class="mbri-upload mbr-iconfont"></span>
                </div>
                <div class="mbr-crt-title">
                    <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                        Host Anywhere                     
                    </h4>
                </div>
            </div>                

            <div class="card-box">
                <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                    Publish your website to a local drive, FTP or host on Amazon S3, Google Cloud, Github Pages.  Don't be a hostage to just one platform or service provider.
                </p>
            </div>
        </div>

        <div class="card pl-3 pr-3">
            <div class="mbr-card-img-title">
                <div class="card-img pb-3">
                    <span class="mbri-drag-n-drop2 mbr-iconfont"></span>
                </div>
                <div class="mbr-crt-title">
                    <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                        Easy and Simple to Use
                    </h4>
                </div>
            </div>
            <div class="card-box">
                <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                    Just drop the blocks into the page, edit content inline and publish - no technical skills   required.
                </p>
            </div>
        </div>
    </div>

    <div class="mbr-figure m-auto" style="width: 50%;" >
        <img src="assets/images/4380-982x614.jpg" alt="Mobirise" title="">
    </div>

    <div class="block-content align-left">
        <div class="card pl-3 pr-3 pb-5">
            <div class="mbr-card-img-title">
                <div class="card-img pb-3">
                     <span class="mbri-features mbr-iconfont"></span>
                </div>
                <div class="mbr-crt-title">
                    <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                        Over 400 Amazing Blocks
                    </h4>
                </div>
            </div>                

            <div class="card-box">
                <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                    Mobirise offers several themes that include sliders, galleries, article blocks, counters,   accordions, video and many more.</p>
            </div>
        </div>

        <div class="card pl-3 pr-3">
            <div class="mbr-card-img-title">
                <div class="card-img pb-3">
                    <span class="mbri-sites mbr-iconfont"></span>
                </div>
                <div class="mbr-crt-title">
                    <h4 class="card-title py-2 mbr-crt-title mbr-fonts-style display-7">
                        Unlimited Sites
                    </h4>
                </div>
            </div>
            <div class="card-box">
                <p class="mbr-text mbr-section-text mbr-fonts-style display-7">
                    Mobirise gives you the freedom to develop as many websites as you like given the fact that  it is a desktop app.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
@section('galeri')
<div class="container" id="portofolio">
    <div><!-- Gallery -->
        <h2>hello world</h2>
        <div class="gallery-row">
            <div class="mbr-gallery-layout-default">
                <div>
                <div class="row-first row justify-content-center m-0">
                    <div class="mbr-gallery-item col-lg-4 col-md-4 col-sm-12 p-2" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="0" data-toggle="modal"><img src="assets/images/background1.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span></div>
                    </div>
                    <div class="mbr-gallery-item col-lg-4 col-md-4 col-sm-12 p-2" data-video-url="false">
                        <div href="#lb-gallery4-f" data-slide-to="1" data-toggle="modal"><img src="assets/images/background2.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span></div>
                        </div>
                        <div class="mbr-gallery-item col-lg-4 col-md-4 col-sm-12 p-2" data-video-url="false">
                            <div href="#lb-gallery4-f" data-slide-to="2" data-toggle="modal"><img src="assets/images/background3.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span></div>
                        </div>
                    </div>
                    <div class="row-second row justify-content-center m-0">
                        <div class="mbr-gallery-item col-lg-3 col-md-6 col-sm-12 p-2" data-video-url="false">
                            <div href="#lb-gallery4-f" data-slide-to="3" data-toggle="modal"><img src="assets/images/background4.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                            </div>
                        </div>
                        <div class="mbr-gallery-item col-lg-3 col-md-6 col-sm-12 p-2" data-video-url="false">
                            <div href="#lb-gallery4-f" data-slide-to="4" data-toggle="modal"><img src="assets/images/background5.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                            </div>
                        </div>
                        <div class="mbr-gallery-item col-lg-3 col-md-6 col-sm-12 p-2" data-video-url="false">
                            <div href="#lb-gallery4-f" data-slide-to="5" data-toggle="modal"><img src="assets/images/background6.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                            </div>
                        </div>
                        <div class="mbr-gallery-item col-lg-3 col-md-6 col-sm-12 p-2" data-video-url="false">
                            <div href="#lb-gallery4-f" data-slide-to="6" data-toggle="modal"><img src="assets/images/background7.jpg" alt="" title=""><span class="icon-focus"></span><span class="mbr-gallery-title mbr-fonts-style display-7">Type caption here</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div><!-- Lightbox -->
        <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery4-f">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img src="assets/images/background1.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background2.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background3.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background4.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background5.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background6.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background7.jpg" alt="" title=""></div>
                            <div class="carousel-item"><img src="assets/images/background8.jpg" alt="" title=""></div>
                        </div>
                        <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery4-f">
                            <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery4-f">
                            <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <a class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('blog')
<div class="container">
    <div class="media-container-row">
        <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper">
                <div class="card-img">
                    <img src="assets/images/background1.jpg" alt="Mobirise">
                </div>
                <div class="card-box">
                    <h4 class="card-title mbr-fonts-style display-7">
                        No Coding
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Mobirise is an easy website builder - just drop site elements to your page, add content and style it to look the way you like.
                    </p>
                </div>
                <div class="mbr-section-btn text-center">
                    <a href="https://mobirise.co" class="btn btn-primary display-4">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper">
                <div class="card-img">
                    <img src="assets/images/background2.jpg" alt="Mobirise">
                </div>
                <div class="card-box">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Mobile Friendly
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        All sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site.
                    </p>
                </div>
                <div class="mbr-section-btn text-center">
                    <a href="https://mobirise.co" class="btn btn-primary display-4">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        <div class="card p-3 col-12 col-md-6 col-lg-4">
            <div class="card-wrapper">
                <div class="card-img">
                    <img src="assets/images/background3.jpg" alt="Mobirise">
                </div>
                <div class="card-box">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Unique Styles
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        Mobirise offers many site blocks in several themes, and though these blocks are pre-made, they are flexible.
                    </p>
                </div>
                <div class="mbr-section-btn text-center">
                    <a href="https://mobirise.co" class="btn btn-primary display-4">
                        Learn More
                    </a>
                </div>
            </div>
        </div>

        
    </div>
</div>
@endsection