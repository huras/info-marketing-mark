<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <style>
            .blue-td{
                background-color: #05406c;
                color: white;
                padding: 16px 30px;
            }

            .site-link{
                color: #9cdeff!important;
                text-decoration: none;
                padding: 16px;
                background-color: none;
                border: 0;
                border-radius: 35px;
                text-align: center;

            }
            .site-link:hover{
                background-color: #1474ff;
            }

            .blog-post-content{
                font-size: 20px;
                color: black;
                padding: 0px 24px;
                padding-top: 24px;
            }

            .blog-post-title{
                text-align: center;

                font-family: Lato, sans-serif;
                color: white;

                font-size: 28px;
                padding: 32px 32px;
            }

            .blog-post-cover{
                padding: 32px;
                background-color: #05406c;
            }

            table{
                max-width: 100%!important;
            }

            .blog-post-content img, .blog-post-cover img{
                width: 100%!important;
                height: auto!important;
                max-width: 100%!important;
                height: auto!important;
            }

            .blog-post-content big{
                font-size: 18px!important;
                font-style: initial!important;
                font-weight: 400;
                font-family: serif;
            }

            li {
                text-align: justify!important;
            }


            ul{
                list-style-type: none;
                padding-left: 8px;
            }

            /* f0da5e */
        </style>
    </head>
    <body >
        <div style="max-width: 980px; margin: 0; width: 100vw;">
            <div style="border-collapse: collapse;">
                <div style='background-color: #2f4a82;'>
                    <div class='blog-post-title'>
                        {!! $title !!}
                    </div>
                </div>
                @if($cover_type == 1)
                    <div>
                        <div class='blog-post-cover'>
                            <img src='http://sogniamoingrande.it/images/posts/{{$id}}/{!! $cover !!}' style='width: 100%;'>
                        </div>
                    </div>
                @elseif($cover_type == 2)
                    <div>
                        <div class='blog-post-cover'>
                            <iframe width="100%" height="450" src="https://www.youtube.com/embed/{{$cover}}"> </iframe>
                        </div>
                    </div>
                @endif
                <div style='background-color: #fafafa;'>
                    <div class='blog-post-content' style='padding-bottom: 16px; white-space: pre-line;'>
                        {!! $content !!}
                    </div>
                </div>
                <div>
                    <div class='a1 blue-td'>
                    </div>
                </div>
                <div class='bottom-logo'>
                    <div style='background-color: #05406c; text-align: center; border: 0; padding-bottom: 16px;'>
                        <a target='_blank' href='http://www.sogniamoingrande.it/'>
                            <img src='http://www.sogniamoingrande.it/img/site/logo.jpg' style='max-height: 150px;'>
                        </a>
                    </div>
                </div>
                <div>
                    <div class='a1 blue-td' style='text-align: center; padding-bottom: 16px; font-size: 18px;'>
                        <a target='_blank' class='site-link' href='http://www.sogniamoingrande.it/'> sogniamoingrande.it </a>
                    </div>
                </div>
                <div class='sharings'>
                    <div style='background-color: #05406c; text-align: center; border: 0; padding-bottom: 24px;'>
                        <a target='_blank' href='https://www.facebook.com/share.php?u={!!$blogPostLink!!}'>
                            <img src='http://www.sogniamoingrande.it/img/site/icone-circular-facebook.png' style='max-height: 25px;'>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
