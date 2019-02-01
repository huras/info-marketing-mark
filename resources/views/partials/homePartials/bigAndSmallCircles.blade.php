<!-- Big and Small Circles -->
<div class='container' id='o-que-vou-aprender'>
        <div class='row'>
            <div class='w-100'>
                <div class='learn-circles w-100'>
                    <h1 class='w-100'> O que vou aprender? </h1>
                    <?php
                        $bigCircles = [
                            ['caption' => 'Even though the included view will inherit all data available.', 'cover' => '4.jpg'],
                            ['caption' => 'If you would like to @include a view depending on a given boolean condition.', 'cover' => '9.jpg'],
                            ['caption' => 'Blades @include directive allows you to include a Blade view from within another view. ', 'cover' => '10.jpg'],
                            ['caption' => 'The $loop variable also contains a variety of other useful properties.', 'cover' => '17.jpg']
                        ];

                        $smallCircles = [
                            ['caption' => "Since HTML forms can't make PUT, PATCH, or DELETE requests", 'cover' => '11.jpg'],
                            ['caption' => 'Anytime you define a HTML form in your application', 'cover' => '12.jpg'],
                            ['caption' => 'Blade also allows you to define comments in your views. ', 'cover' => '13.jpg'],
                            ['caption' => "However, unlike HTML comments.", 'cover' => '14.jpg'],
                            ['caption' => 'You should include a hidden CSRF token field.', 'cover' => '15.jpg'],
                            ['caption' => 'The CSRF protection middleware can validate the request.', 'cover' => '16.jpg']
                        ];
                    ?>
                    @foreach($smallCircles as $circle)
                        <?php $imageAddress = "img/dev/".$circle['cover']; ?>
                        <div class='circle small col-md-4' >
                            <div class='imagem' style="background-image: url('{{asset($imageAddress)}}');"></div>
                            <div class='caption'> {{$circle['caption']}} </div>
                        </div>
                    @endforeach
                    <div class='circle-separator col-md-12'></div>
                    @foreach($bigCircles as $circle)
                        <?php $imageAddress = "img/dev/".$circle['cover']; ?>
                        <div class='circle big col-md-3'>
                            <div class='imagem' style="background-image: url('{{asset($imageAddress)}}');"></div>
                            <div class='caption'> {{$circle['caption']}} </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>