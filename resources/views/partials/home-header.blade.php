<div class='infomarketing-header' id='navbar'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-5 col-sm-12' style='justify-content: center;    align-items: center;'>
                <div class='row'>
                    <div class='col-sm-6' style='    display: flex;    justify-content: center;    align-items: center;'>
                        <img src='/img/site/Logo top trans.png' style='max-width: 135px;    height: auto;'>
                    </div>
                    <div class='col-sm-6' style='display: flex;    flex-direction: column;    justify-content: center;    align-items: center;'>
                        <a href='/' class='main-title nlink'>
                            Sogniamo 
                            in Grande 
                        </a>
                        <div class='small-title'>
                            {{__('Maritime training and orientation')}}
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-7 col-sm-12 options'>
                <a href='/' class='nlink'> <i class="fas fa-home"></i> </a>
                <a href='/about' class='nlink'> {{ __('About') }} </a>
                <a href='/contact' class='nlink'> {{ __('Contact') }} </a>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nlink" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='padding-top: 0;'>
                            Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/blog">News</a>
                            <a class="dropdown-item" href="/video">Videos</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nlink" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style='padding-top: 0;'>
                            Donazioni
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.mimmomoricone.com/">Mimmo Moricone</a>
                            <a class="dropdown-item" href="https://projetocorabe.wixsite.com/corabe/copia-home">Progetto Corabe</a>
                        </div>
                    </li>
                </ul>

                <a href='/admin/dashboard' class='nlink access'> <i class="fas fa-lock"></i> </a>

                @if(isset($links))
                    @foreach($links as $link)
                        <!-- <a href='{{$link["url"]}}' class='nlink'> {{$link["title"]}}</a> -->
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<div class='enchendo-linguica'></div>

<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>