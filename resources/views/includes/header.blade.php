<header class="header" id="navbar-collapse-toggle">
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box @if($page=='home') active @endif">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>خانه</h2>
            </a>
        </li>
        <li class="icon-box @if($page=='about') active @endif">
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>من؟</h2>
            </a>
        </li>
        <li class="icon-box">
          <i class="fa fa-image"></i>
          <a href="/gallery">
            <h2>گالری</h2>
          </a>
        </li>
        <li class="icon-box  @if($page=='blog') active @endif">
            <i class="fa fa-comments"></i>
            <a href="/blog">
                <h2>مقالات</h2>
            </a>
        </li>
        <li class="icon-box @if($page=='contact') active @endif">
            <i class="fa fa-envelope-open"></i>
            <a href="/contact">
                <h2>ارتباط</h2>
            </a>
        </li>

    </ul>

    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active">
                    <a href="/"><i class="fa fa-home"></i><span>خانه</span></a>
                </li>
                <li>
                    <a href="/about"><i class="fa fa-user"></i><span>درباره من</span></a>
                </li>
                <li><a href="/gallery"><i class="fa fa-folder-open"></i><span>گالری</span></a></li>
                <li><a href="/blog"><i class="fa fa-comments"></i><span>مقالات</span></a></li>

                <li>
                    <a href="/contact"><i class="fa fa-envelope-open"></i><span>تماس با من </span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>