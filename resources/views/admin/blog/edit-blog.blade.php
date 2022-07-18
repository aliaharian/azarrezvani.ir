<!DOCTYPE html>
<html>

<head>
    <title>ویرایش مقاله</title>

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
                    ویرایش مقاله
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                    <li>مقاله ها</li>
                    <li class="active">ویرایش مقاله</li>
                </ol>
            </section>
            <form action="{{route('blog.update',['post' => $blog->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                {{method_field('PUT')}}

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

                            <a href="{{route('blog.index')}}" class="btn btn-primary btn-block margin-bottom">بازگشت</a>

                            <!-- /. box -->
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <h3 class="box-title" id="image_title">تصویر اصلی مقاله</h3>

                                    <div class="input-group" style="width: 100%;padding: 10px">
                                        <div id="picture" style="width: 100%;margin: 5px auto;"><img src="{{$blog->image}}" style="width: 100%;margin: 5px auto;"></div>
                                        <button type="button" class="browse btn btn-primary" id="imageUpload" style="width: 100%;padding: 10px;margin: auto"> تغییر تصویر </button>
                                        <input type="text" hidden name="mainImage" style="width: 100%;height: 100%" value="{{$blog->image}}" id="featured_image" placeholder="آدرس تصویر" readonly />

                                    </div>
                                </div>
                                <!-- /.box-header -->
                          
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
                                        <input class="form-control" value="{{$blog->title}}" name="title" id="title" placeholder="عنوان مقاله">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" value="{{$blog->author}}" name="author" id="author" placeholder="نام نویسنده">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" value="{{$blog->tags}}" name="tags" id="tags" placeholder="تگ های مقاله: معلم,معلمی,آذر رضوانی">
                                    </div>
                                    <!-- <div class="form-group">
                                        <input class="form-control" name="slug" id="slug" value="{{$blog->slug}}" placeholder="slug in english">
                                    </div> -->
                                    <div class="form-group">
                                        <textarea name="brief" class="form-control" style="height: 300px">{{$blog->brief}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea id="ckeditor" name="ckeditor" class="form-control" style="height: 300px">
                                        {{$blog->content}}
                                        </textarea>
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

    </script>
</body>

</html>