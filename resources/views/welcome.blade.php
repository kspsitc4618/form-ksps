<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="PT. Mitra Perkasa Ekatama">
    <meta name="keywords" content="Project Management">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>FORM PENGISIAN KSPS</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('logo/logokecil.png')}}">
    <!-- Start css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css.map')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.scss')}}" rel="stylesheet" type="text/css">
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}" rel="stylesheet">
    <!-- End css -->
</head>

<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div class="wrapper">
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" id="wizard">
            @csrf
            <!-- SECTION 1 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="{{asset('images/Gambar-1.jpg')}}" alt="logo">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your details</p>
                        <div class="form-holder">
                            <input type="hidden" class="form-control" name="tgl" value="<?php echo date("Y-m-d"); ?>">
                            <input type="hidden" class="form-control" name="status" value="Belum Karyawan">
                            <input type="hidden" class="form-control" name="job_group" value="3">
                            <input type="hidden" class="form-control" name="job_lists" value="36">
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" name="name" placeholder="Your Name" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" name="email" placeholder="Your Email" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" name="alamat" placeholder="Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" name="telp" placeholder="Phone Number" class="form-control">
                            </div>
                            <div class="form-holder">
                                <select class="select2-single form-control" name="last_education" id="last_education">
                                    <option value="">--------Last Education--------</option>
                                    <option value="SMA/SMK">SMA/SMK</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4">D4</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 2 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="{{asset('images/Gambar-2.jpg')}}" alt="">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with additional info</p>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" name="skill" placeholder="Skill" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" name="languange" placeholder="Language" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" name="certified" placeholder="Certified" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- SECTION 3 -->
            <h2></h2>
            <section>
                <div class="inner">
                    <div class="image-holder">
                        <img src="{{asset('images/Gambar-3.jpg')}}" alt="logo">
                    </div>
                    <div class="form-content">
                        <div class="form-header">
                            <h3>Registration</h3>
                        </div>
                        <p>Please fill with your details</p>
                        <div class="form-row">
                            <div class="form-holder">
                                <input type="text" name="work_experiences_place1" placeholder="Place Work Experiences" class="form-control">
                            </div>
                            <div class="form-holder">
                                <input type="text" name="work_experiences_tgl1" placeholder="Time Work Experiences" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder w-100">
                                <input type="text" name="work_experiences_description1" placeholder="Description" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-holder">
                                <select class="select2-single form-control" name="lama_bekerja" id="lama_bekerja" required>
                                    <option value="">---Long Work Experience---</option>
                                    <option value="Kurang 1 Tahun">Kurang 1 Tahun</option>
                                    <option value="1 Tahun">1 Tahun</option>
                                    <option value="2 Tahun">2 Tahun</option>
                                    <option value="3 Tahun">3 Tahun</option>
                                    <option value="4 Tahun">4 Tahun</option>
                                    <option value="5 Tahun">5 Tahun</option>
                                    <option value="Lebih 5 Tahun">Lebih 5 Tahun</option>
                                </select>
                            </div>
                            <div class="form-holder">
                                <label for="Upload CV"> <input type="file" name="dokumen_cv" placeholder="Time Work Experiences" class="form-control"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End row -->
        </form>
    </div>
    <!-- End Containerbar -->
    <!-- Start js -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery.steps.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <!-- End js -->
</body>

</html>