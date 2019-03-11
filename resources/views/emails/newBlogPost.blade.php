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
                font-size: 24px;
                padding: 16px;
                font-family: Lato, sans-serif;
                color: white;
            }

            .blog-post-cover{
                padding: 32px;
                background-color: #05406c;
            }

            table{
                max-width: 800px;
            }
        </style>
    </head>
    <body>
        <table style="width:100%; border-collapse: collapse; padding: 32px;">
            <tr style='background-color: #2f4a82;'>
                <td class='blog-post-title'> 
                    {!! $title !!}
                </td>
            </tr>
            @if($cover_type == 1)
                <tr>
                    <td class='blog-post-cover'>
                        <img src='http://sogniamoingrande.it/images/posts/{{$id}}/{!! $cover !!}' style='width: 100%;'>
                    </td>
                </tr>
            @elseif($cover_type == 2)
                <tr>
                    <td class='blog-post-cover'>
                        <iframe width="100%" height="450" src="https://www.youtube.com/embed/{{$cover}}"> </iframe>
                    </td>
                </tr>
            @endif
            <tr style='background-color: #b1e3ff;'>
                <td class='blog-post-content' style='padding-bottom: 16px; white-space: pre-line;'> 
                    {!! $content !!}
                </td>
            </tr>
            <tr>
                <td class='a1 blue-td'>
                </td>
            </tr>
            <tr class='bottom-logo'>
                <td style='background-color: #05406c; text-align: center; border: 0; padding-bottom: 16px;'>
                    <a target='_blank' href='http://www.sogniamoingrande.it/'>
                        <img src='http://www.sogniamoingrande.it/img/site/logo.jpg' style='max-height: 150px;'>
                    </a>
                </td>
            </tr>
            <tr>
                <td class='a1 blue-td' style='text-align: center; padding-bottom: 16px; font-size: 18px;'>     
                    <a target='_blank' class='site-link' href='http://www.sogniamoingrande.it/'> sogniamoingrande.it </a>
                </td>
            </tr>
            <tr class='sharings'>
                    <td style='background-color: #05406c; text-align: center; border: 0; padding-bottom: 24px;'>
                        <a target='_blank' href='https://www.facebook.com/share.php?u={!!$blogPostLink!!}'>
                            <img src='http://www.sogniamoingrande.it/img/site/icone-circular-facebook.png' style='max-height: 25px;'>
                        </a>
                    </td>
                </tr>
        </table>
    </body>
</html>