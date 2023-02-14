@extends('frontend.master')

@section('title', 'page Tiyle')

@section('page_header')
    @parent
    <div class="page-header">
        <div class="about-banner-shape-left wow animate__animated animate__fadeInLeft">
            <img src="images/shapes/03_shape-01.png" class="wow animate__animated animate__pulse animate__infinite" alt="habu">
        </div>
        <div class="about-banner-shape-right wow animate__animated animate__fadeInRight animate__delay-1s">
            <img src="images/shapes/03_shape-02.png" class="wow animate__animated animate__pulse animate__infinite" alt="habu">
        </div>
        <div class="container">
            <div class="page-header-text wow animate__animated animate__fadeInDown">
                <h1 class="page-title">Portfolio</h1>
                <span>Home</span>
                <span class="span-divider font-weight-bold">|</span>
                <span class="font-weight-bold">Portfolio</span>
                <div class="page-banner-shape-title">
                    <img src="images/shapes/03_shape-03.png" class="wow animate__animated animate__fadeInUp animate__delay-1s" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <!-- =========================== 4. Portfolio Section =========================================== -->

    <section class="projects-area portfolio">
        <div class="container">
            <div class="section-heading">
                <h2>Our Works</h2>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you.</p>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="project-menu filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".design">Design</button>
                        <button data-filter=".marketing">Marketing</button>
                        <button data-filter=".bug">Bug Fixing</button>
                        <button data-filter=".custom">Custom Projects</button>
                    </div>
                </div>
            </div>

            <div class="row projects-holder grid">
                <div class="col-lg-4 col-6 grid-item design bug">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-01.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item marketing custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-06.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item design custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-04.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item design bug">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-02.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item marketing custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-05.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item marketing bug custom">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-03.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-6 grid-item design">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-07.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 grid-item design marketing">
                    <div class="project-box">
                        <div class="project-thumbnail">
                            <img src="images/projects/work-08.png" alt="Habu">
                        </div>
                        <div class="project-text text-center">
                            <a href="portfolio-details.html">
                                <h3>View Website</h3>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                                     style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#2196F3;" d="M511.189,259.954c1.649-3.989,0.731-8.579-2.325-11.627l-192-192
        c-4.237-4.093-10.99-3.975-15.083,0.262c-3.992,4.134-3.992,10.687,0,14.82l173.803,173.803H10.667
        C4.776,245.213,0,249.989,0,255.88c0,5.891,4.776,10.667,10.667,10.667h464.917L301.803,440.328
        c-4.237,4.093-4.355,10.845-0.262,15.083c4.093,4.237,10.845,4.354,15.083,0.262c0.089-0.086,0.176-0.173,0.262-0.262l192-192
        C509.872,262.42,510.655,261.246,511.189,259.954z" />
                                    <path d="M309.333,458.546c-5.891,0.011-10.675-4.757-10.686-10.648c-0.005-2.84,1.123-5.565,3.134-7.571L486.251,255.88
        L301.781,71.432c-4.093-4.237-3.975-10.99,0.262-15.083c4.134-3.992,10.687-3.992,14.82,0l192,192
        c4.164,4.165,4.164,10.917,0,15.083l-192,192C314.865,457.426,312.157,458.546,309.333,458.546z" />
                                    <path d="M501.333,266.546H10.667C4.776,266.546,0,261.771,0,255.88c0-5.891,4.776-10.667,10.667-10.667h490.667
        c5.891,0,10.667,4.776,10.667,10.667C512,261.771,507.224,266.546,501.333,266.546z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center"><a href="portfolio.html" class="wow animate__animated animate__flipInX large-blue-button">Load More</a></div>
        </div>
    </section>

    <!-- =========================== 5. Custom Project Section =========================================== -->

    <div class="custom-projects">
        <div class="container d-lg-flex align-items-center">
            <div class="section-heading">
                <h1>Custom Projects</h1>
                <p>We have people of multiple kind in the house. Together we can provide high quality work to satisfy
                    you. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="custom-project-button ml-auto">
                <button>Get A Quote</button>
            </div>
        </div>
        <div class="custom-projects-shape-2">
            <img src="images/shapes/shape-02.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-1">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite" alt="Habu">
        </div>
        <div class="custom-projects-circle-2">
            <img src="images/shapes/shape-circle.png" alt="Habu">
        </div>
        <div class="custom-projects-circle-3">
            <img src="images/shapes/shape-circle.png" class="wow animate__animated animate__pulse animate__infinite" alt="Habu">
        </div>
        <div class="custom-projects-circle-4"></div>
    </div>
@endsection
