<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        @if(Auth::check())
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{!! asset('avatars/'.Auth::user()->avatar  ) !!}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">{{ Auth::user()->user_name }}</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
        </li>
        @endif

        <?php
            $user = Auth::user();
            $menus = config('rightmenu'); 
          ?>
        <li class="nav-item ">
            <a class="nav-link" href="{{route('admin.backend.Home')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        @foreach($menus as $i=>$m )

        @if($user->can($m['route']))
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui<?php echo $i; ?>" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="menu-title">{{$m['label']}}</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            @if(isset($m['item']))
            <div class="collapse" id="ui<?php echo $i; ?>">
                <ul class="nav flex-column sub-menu">
                    @foreach($m['item'] as $mi)
                    @if( $user->can($mi['route']))
                    <li class="nav-item"> <a class="nav-link" href="{{route($mi['route'])}}">{{$mi['lable']}}</a></li>

                    @endif
                    @endforeach
                </ul>
            </div>
            @endif
        </li>
        @endif
        @endforeach
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#uib-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Blog</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="uib-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.Blog')}}">Thêm Blog</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.list.blog')}}">Danh sách Blog</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui1-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Đơn Hàng</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="ui1-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.list.order')}}">Danh sách đơn
                            hàng</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui9-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Mã giảm giá</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="ui9-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.list.coupon')}}">danh sách mã </a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.add.coupon')}}">thêm mới mã </a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui2-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">type</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="ui2-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.add.type')}}">Thêm type</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui3-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Banner</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="ui3-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.banner')}}">Thêm mới banner</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('admin.list.banner')}}">Danh sách
                            Banner</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui4-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Quản trị Cấu Hình Web</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
            </a>
            <div class="collapse" id="ui4-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a>
                    </li>
                </ul>
            </div>
        </li>

        <li class="nav-item sidebar-actions">
            <span class="nav-link">
                <div class="border-bottom">
                    <h6 class="font-weight-normal mb-3">Projects</h6>
                </div>
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add a project</button>
                <div class="mt-4">
                    <div class="border-bottom">
                        <p class="text-secondary">Categories</p>
                    </div>
                    <ul class="gradient-bullet-list mt-4">
                        <li>Free</li>
                        <li>Pro</li>
                    </ul>
                </div>
            </span>
        </li>
    </ul>
</nav>