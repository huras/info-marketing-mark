<div class='infomarketing-header' id='navbar'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6'>
                <a href='/' class='main-title nlink'> Sogniamo in Grande </a>
                <div class='small-title'>
                    {{__('Maritime training and orientation')}}
                </div>
            </div>
            <div class='col-md-6 options'>
                <a href='/about' class='nlink'> {{ __('About') }} </a>
                <a href='/blog' class='nlink'> {{ __('Blog') }} </a>
                <a href='/contact' class='nlink'> {{ __('Contact') }} </a>
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
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>