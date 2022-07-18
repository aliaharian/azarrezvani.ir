<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="https://statics.arastowel.com/avatars/nasirzadeh.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{\Illuminate\Support\Facades\Auth::user()->name}} {{\Illuminate\Support\Facades\Auth::user()->last_name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>

            <!-- <li>
                <a href="{{route('template.index')}}">
                    <i class="fa fa-paint-brush"></i> <span>تنظیمات قالب</span>
                </a>
            </li> -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-photo"></i>
                    <span>گالری</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('photo.index')}}"><i class="fa fa-circle-o"></i>  گالری</a></li>
                    <li><a href="{{route('photo.create')}}"><i class="fa fa-circle-o"></i> افزودن تصویر</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pencil"></i>
                    <span>مقاله ها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('blog.index')}}"><i class="fa fa-circle-o"></i>  مقاله ها</a></li>
                    <li><a href="{{route('blog.create')}}"><i class="fa fa-circle-o"></i> افزودن مقاله</a></li>

                </ul>
            </li>


            <li>
                <a href="{{route('index')}}">
                    <i class="fa fa-backward"></i> <span>بازگشت به سایت</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>