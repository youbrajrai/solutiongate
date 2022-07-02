<div class="sidebar"  style="position: fixed;overflow-y: scroll; width:auto;" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{asset('images/logo.png')}}" style="margin-top: -22px;">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="{{route('dashboard')}}">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="{{route('dashboard')}}">
                    <i class="fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ (request()->is('users') ||  (request()->is('register'))) ? 'active' : '' }}">
                <a href="{{route('users')}}">
                    <i class="fa fa-users"></i>
                    <p>Users</p>
                </a>
            </li>
            <li class="{{ (request()->is('contact*')) ? 'active' : '' }}">
                <a href="{{route('contact.index')}}">
                    <i class="fa fa-phone"></i>
                    <p>Contact Us</p>
                </a>
            </li>
            <li class="{{ (request()->is('categories*')) ? 'active' : '' }}">
                <a href="{{route('categories.index')}}">
                    <i class="fa fa-bookmark"></i>
                    <p>Categories</p>
                </a>
            </li>
            <li class="{{ (request()->is('subcategories*')) ? 'active' : '' }}">
                <a href="{{route('subcategory.index')}}">
                    <i class="fa fa-book"></i>
                    <p>SubCategories</p>
                </a>
            </li>
            <li class="{{ (request()->is('product*')) ? 'active' : '' }}">
                <a href="{{route('product.index')}}">
                    <i class="fa fa-file"></i>
                    <p>Product</p>
                </a>
            </li>                    
            <li class="{{ (request()->is('about*')) ? 'active' : '' }}">
                <a href="{{route('about.index')}}">
                    <i class="fas fa-address-card"></i>
                    <p>About Us</p>
                </a>
            </li>
            <li class="{{ (request()->is('hero*')) ? 'active' : '' }}">
                <a href="{{route('hero.index')}}">
                    <i class="fas fa-mask"></i>
                    <p>Hero</p>
                </a>
            </li>
            <li class="{{ (request()->is('service*')) ? 'active' : '' }}">
                <a href="{{route('service.index')}}">
                    <i class="fas fa-video"></i>
                    <p>Services</p>
                </a>
            </li>
            <li class="{{ (request()->is('project*')) ? 'active' : '' }}">
                <a href="{{route('project.index')}}">
                    <i class="fas fa-tasks"></i>
                    <p>Projects</p>
                </a>
            </li>

            <li class="{{ (request()->is('work*')) ? 'active' : '' }}">
                <a href="{{route('work.index')}}">
                    <i class="fas fa-briefcase"></i>
                    <p>Work</p>
                </a>
            </li>
            <li class="{{ (request()->is('team*')) ? 'active' : '' }}">
                <a href="{{route('team.index')}}">
                    <i class="fas fa-user-friends"></i>
                    <p>Team</p>
                </a>
            </li>
            <li class="{{ (request()->is('client*')) ? 'active' : '' }}">
                <a href="{{route('client.index')}}">
                    <i class="fas fa-hands-helping"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li class="{{ (request()->is('mission*')) ? 'active' : '' }}">
                <a href="{{route('mission.index')}}">
                    <i class="fas fa-hands-helping"></i>
                    <p>Missions & Visions</p>
                </a>
            </li>
        </ul>
    </div>
</div>
