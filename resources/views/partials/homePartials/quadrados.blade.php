<div class='container mosaics-area'>
    <div class='mosaics row'>
            <?php 
                $topMosaics = [                    
                    //['title' => 'TV Sogniamo in grande', 'call' => '', 'cover' => 'logo.jpg', 'url' => '', 'cover-type' => 1]
                ];

                $bottomMosaics = [
                    ['title' => 'TV Sogniamo in grande', 'call' => '', 'cover' => 'youtube.png', 'url' => 'https://www.youtube.com/channel/UCL6PL_3UhIO-VqFJ_IJWu3g', 'cover-type' => 1],
                    ['title' => 'Il saturatore', 'call' => '', 'cover' => '2.jpg', 'url' => 'http://www.saturatore.it/', 'cover-type' => 1],
                    ['title' => 'Blog and News', 'call' => '', 'cover' => 'blog.jpg', 'url' => '/blog', 'cover-type' => 1],
                    //['title' => 'ASSIST TO THE WEBINAR.', 'call' => '', 'cover' => 'webinar.jpg', 'url' => '', 'cover-type' => 1]
                ];
            ?>

            <div class='mosaic top col-md-6 nlink'>
                <div class='cover'>
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/q5tPsoSwrq4"> </iframe>
                </div>
            </div>

            <div class='mosaic top col-md-6 mini-contact-form cover'>
                <form action='/contact/new' method='POST'>
                    <div class='form-group'>
                        <label> {{ __('name') }} </label>
                        <input type='text' name='firstname' placeholder="{{ __('Type your name here') }}">
                    </div>

                    <div class='form-group'>
                        <label> E-mail </label>
                        <input type='text' name='email' placeholder="{{ __('Type your email here') }}">
                    </div>

                    <div class='form-group'>
                        <label> {{ __('phone') }} </label>
                        <input type='text' name='phone' placeholder="{{ __('Type your phone number here') }}">
                    </div>

                    <div class='form-group'>
                        <input type='submit' value='Subscribe' class='cadastrar'>
                    </div>
                </form>
            </div>

            @foreach($topMosaics as $mosaic)
                <?php $imageAddress = "img/dev/".$mosaic['cover']; ?>
                <a target='_blank' href="{{$mosaic['url']}}" class='mosaic top col-md-6 nlink'>
                    @include('partials/mosaic', $mosaic)
                </a>
            @endforeach

            
    </div>
    
    <div class='mosaics row'>
        @foreach($bottomMosaics as $mosaic)
            <?php $imageAddress = "img/dev/".$mosaic['cover']; ?>
            <a target='_blank' href="{{$mosaic['url']}}" class='mosaic bottom col-md-4 nlink'>
                @include('partials/mosaic', $mosaic)
            </a>
        @endforeach
    </div>
</div>