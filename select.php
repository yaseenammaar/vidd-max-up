<div class="page-breadcrumb bg-white">
    <div class="row align-items-center">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Step 1 - Upload</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <div class="d-md-flex">
                <ol class="breadcrumb ms-auto">
                    <li><a href="#" class="fw-normal">Dashboard</a></li>
                </ol>
               
            </div>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">


    <!-- ============================================================== -->
    <!-- Three charts -->
    <!-- ============================================================== -->
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Rendered Videos</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-success">659</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Draft Design</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash2"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-purple">869</span></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="white-box analytics-info">
                <h3 class="box-title">Total Videos Added</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                    <li>
                        <div id="sparklinedash3"><canvas width="67" height="30"
                                style="display: inline-block; width: 67px; height: 30px; vertical-align: top;"></canvas>
                        </div>
                    </li>
                    <li class="ms-auto"><span class="counter text-info">911</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- PRODUCTS YEARLY SALES -->
    <!-- ============================================================== -->

    <style type="text/css">
        
    </style>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Upload Video</h3>
               <div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
                <br>
                    <div id="drag_upload_file">
                        <p>Drop file here</p>
                        <p>or</p>
                        <p><input style="color: white;" type="button" value="Select File" class="btn btn-cyan" onclick="file_explorer();" /></p>
                        <input type="file" id="selectfile" />
                    </div>
                </div>
                <div class="img-content"></div>
               
                <script src="custom.js"></script>
                <br>
                <center>
                    Or Search Creative Commons on YouTube
                </center>
                <center>
                <input style="width: 50%" class="form-control mt-0" type="text" name="YouTube" placeholder="Keyword">
                <br>
                <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button style="color: white;" class="btn btn-success">Search</button>
                            </div>
                        </div>
            </center>
            </div>

        </div>

    </div>
    <!-- ============================================================== -->
    <!-- RECENT SALES -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Uploaded Videos</h3>
                    <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                        <select class="form-select shadow-none row border-top">
                            <option>March 2021</option>
                            <option>April 2021</option>
                            <option>May 2021</option>
                            <option>June 2021</option>
                            <option>July 2021</option>
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Preview</th>
                                <th class="border-top-0">Name</th>
                                
                                <th class="border-top-0">Date</th>
                                <th class="border-top-0">Use</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img class="img-preview" src="./img/img10.jpeg"></td>
                                <td class="txt-oflo">iPhone Unboxing</td>
                                
                                <td class="txt-oflo">October 28, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img class="img-preview" src="./img/img11.jpeg"></td>
                                <td class="txt-oflo">Bullet Fire on MacBook</td>
                                
                                <td class="txt-oflo">August 20, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img class="img-preview" src="./img/img12.jpeg"></td>
                                <td class="txt-oflo">Greetings</td>
                                
                                <td class="txt-oflo">April 19, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img class="img-preview" src="./img/img2.jpeg"></td>
                                <td class="txt-oflo">Ending Cards Template</td>
                                
                                <td class="txt-oflo">May 20, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img class="img-preview" src="./img/img3.png"></td>
                                <td class="txt-oflo">Logo Splash</td>
                                
                                <td class="txt-oflo">August 21, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><img class="img-preview" src="./img/img6.jpg"></td>
                                <td class="txt-oflo">Transition</td>
                                
                                <td class="txt-oflo">July 25, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><img class="img-preview" src="./img/img7.png"></td>
                                <td class="txt-oflo">News</td>
                                
                                <td class="txt-oflo">April 22, 2021</td>
                                <td><a href="#" class="fw-normal">Add</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent Comments -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- .col -->
        <div class="col-md-12 col-lg-8 col-sm-12">
            <div class="card white-box p-0">
                <div class="card-body">
                    <h3 class="box-title mb-0">Recent Designs</h3>
                </div>
                <div class="comment-widgets">
                    <!-- Comment Row -->
                   
                    <!-- Comment Row -->
                    <div >
                        <div class="p-2" >
                            <img src="./img/thumb5.jpeg" alt="user" class=" recent-design-layout">
                            <img src="./img/thumb6.jpeg" alt="user" class="recent-design-layout">
                            <img src="./img/thumb4.jpeg" alt="user" class="recent-design-layout">
                            <img src="./img/thumb1.jpg" alt="user" class="recent-design-layout">
                            <img src="./img/thumb2.jpg" alt="user" class="recent-design-layout">
                            <img src="./img/thumb3.png" alt="user" class="recent-design-layout">
                        
                            <img src="./img/thumb5.jpeg" alt="user" class=" recent-design-layout">
                            <img src="./img/thumb6.jpeg" alt="user" class="recent-design-layout">
                            <img src="./img/thumb4.jpeg" alt="user" class="recent-design-layout">
                            <img src="./img/img10.jpeg" alt="user" class="recent-design-layout">
                            <img src="./img/img12.jpeg" alt="user" class="recent-design-layout">
                            <img src="./img/img4.jpeg" alt="user" class="recent-design-layout">

                        </div>
                        <a href="arrange.html">
                            <button class="btn btn-success text-white btn" type="button">
                                  Next - Arrange  
                            </button>
                        </a>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card white-box p-0">
                <div class="card-heading">
                    <h3 class="box-title mb-0">Recent YouTube Searches</h3>
                </div>
                <div class="card-body">
                    <ul class="chatonline">
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <div class="ms-2">
                                    <span class="text-dark">iPhone <small
                                            class="d-block text-muted d-block">Tap to Search Again</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <div class="ms-2">
                                    <span class="text-dark">Unboxing <small class="d-block text-muted">Tap to Search Again</small></span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="call-chat">
                                <button class="btn btn-success text-white btn-circle btn" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <a href="javascript:void(0)" class="d-flex align-items-center">
                                <div class="ms-2">
                                    <span class="text-dark">Arm Wrestling <small class="d-block text-muted">Hover to Search Again</small></span>
                                </div>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>