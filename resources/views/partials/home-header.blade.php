<div class='infomarketing-header' id='navbar'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-5'>
                <a href='/' class='main-title nlink'> Sogniamo in Grande </a>
                <div class='small-title'>
                    {{__('Maritime training and orientation')}}
                </div>
            </div>
            <div class='col-md-7 options'>
                <a href='/' class='nlink' target='_blank'> Home </a>
                <a href='/about' class='nlink'> {{ __('About Us') }} </a>
                <a href='/contact' class='nlink'> {{ __('Contact') }} </a>
                <a href='/services' class='nlink'> {{ __('Services') }} </a>

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