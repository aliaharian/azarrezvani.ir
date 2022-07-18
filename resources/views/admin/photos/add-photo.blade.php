<!DOCTYPE html>
<html>

<head>
    <title>افزودن تصویر</title>

    @include('admin.includes.headerLinks')
    <style>
        .display-none {
            display: none !important;
        }

        .hidden {
            visibility: hidden;
        }

        .variableImage {
            width: 50px;
        }

        .add-gallery {
            display: block;
            background-color: #f2f2f2;
            height: 100px;
            border: dashed black 1px;
            text-align: center;
            font-size: 18px;
            line-height: 100px;
            padding: 0;
            z-index: 9999999;

        }

        .deletegaler {
            display: block;
            background-color: rgba(0, 0, 0, 0.3);
            transform: translateY(-100px);
        }

        .wronginput {
            border: red 1px solid;
        }
    </style>
    <link rel="stylesheet" href="/panel-admin/css/persian-datepicker-0.4.5.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.popupWindow.js"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">


        @include('admin.includes.header')
        <!-- right side column. contains the logo and sidebar -->
        @include('admin.includes.aside')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    افزودن تصویر
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                    <li>تصویر ها</li>
                    <li class="active">افزودن تصویر</li>
                </ol>
            </section>
            <form action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-3">
                            @if(isset($pm))
                            <a class="btn btn-success btn-block margin-bottom"> {{$pm}}
                            </a>


                            @endif


                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <a href="{{route('photo.index')}}" class="btn btn-primary btn-block margin-bottom">بازگشت</a>

                            <!-- /. box -->
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <h3 class="box-title" id="image_title">تصویر اصلی تصویر</h3>

                                    <div class="box-tools">
                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <div class="input-group" style="width: 100%;padding: 10px">
                                        <div id="picture" style="width: 100%;margin: 5px auto;"></div>
                                        <button type="button" class="browse btn btn-primary" id="imageUpload" style="width: 100%;padding: 10px;margin: auto"> انتخاب تصویر با ابعاد
                                            ۶۰۰*۳۷۰
                                        </button>
                                        <input type="text" hidden name="mainImage" style="width: 100%;height: 100%" id="featured_image" placeholder="آدرس تصویر" readonly />

                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>




                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">عنوان و توضیحات کلی</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="form-group">
                                        <input class="form-control" name="title" id="title" placeholder="عنوان تصویر">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="video" id="video" placeholder="کد آپارات">
                                    </div>



                                </div>
                                <!-- /.box-body -->

                                <!-- /.box-footer -->
                            </div>


                            <div class="box box-primary">

                                <div class="box-footer">
                                    <div class="pull-right">

                                        <button type="submit" class="btn btn-primary" onclick="return productvalidate()"><i class="fa fa-share"></i> انتشار
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-footer -->
                        </div>
                        <!-- /. box -->
                    </div><!-- /.col -->
                    <!-- /.row -->
                </section>
                <!-- /.content -->
            </form>
        </div>
        <!-- /.content-wrapper -->

        @include('admin.includes.footer')
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->


    @include('admin.includes.footerLinks')

    <script src="/js/add-Product.js"></script>
    <script src="/panel-admin/js/persian-date-0.1.8.min.js"></script>
    <script src="/panel-admin/js/persian-datepicker-0.4.5.min.js"></script>
    <!-- Page script -->
    <script>
        function validatenumericsnum(key) {
            var keycode = (key.which) ? key.which : key.keyCode;
            if (keycode > 31 && (keycode < 48 || keycode > 57))
                return false;
            else
                return true;
        }
    </script>
    <script type="text/javascript" src="/js/jquery.popupWindow.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $('#imageUpload').popupWindow({
                windowURL: '/arts-admin/elfinder/popup/main',
                windowName: 'Filebrowser',
                height: 490,
                width: 950,
                centerScreen: 1
            });
            window.callbackmain = function(file) {
                $('#picture').html('<a onclick="deletemainImage()"><i class="fa fa-times btn btn-danger btn-lg"></i></a><img style="width: 50%" src="' + file + '" /> ');
                $('#featured_image').val(file);
            }
        });

        function deletemainImage() {
            $('#picture').html('');
            $('#featured_image').val('');
        }

        $(document).ready(function() {

            $('#videoUpload').popupWindow({
                windowURL: '/arts-admin/elfinder/popup/mainVideo',
                windowName: 'Filebrowser',
                height: 490,
                width: 950,
                centerScreen: 1
            });
            window.callbackmainVideo = function(file) {
                $('#videoPlace').html('<a onclick="deletemainVideo()"><i class="fa fa-times btn btn-danger btn-lg"></i></a><img style="width: 50%" src="' + file + '" /> ');
                $('#featured_video').val(file);
            }
        });

        function deletemainVideo() {
            $('#videoPlace').html('');
            $('#featured_video').val('');
        }
    </script>
</body>

</html>