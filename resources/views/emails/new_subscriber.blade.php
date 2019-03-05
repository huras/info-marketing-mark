<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <style>
            .a1{
                margin: 0cm;
                margin-bottom: .0001pt;
                font-size: 28.0pt;
                font-family: "Calibri Light",sans-serif;
                letter-spacing: -.5pt;

                
                text-align: center;
            }
            .a1 a{
                color: wheat;
            }

            .blue-td{
                background-color: #05406c;
                color: white;
                padding: 16px 30px;
            }

            .site-link{
                color: whitesmoke;
                text-decoration: none;
                padding: 8px;
                background-color: #1b61c5;
                border: 1px solid aliceblue;
                border-radius: 35px;
            }
            .site-link:hover{
                background-color: #3c61d5;
            }
        </style>
    </head>
    <body>
        <table style="width:100; border-collapse: collapse; padding: 32px;">
            <tr>
                <td class='a1 blue-td' style='font-weight: bold; font-size: 48px;'> 
                    You have a new subscriber!
                </td>
            </tr>
            <tr>
                <td style='background-color: #05406c; text-align: center; border: 0;'>
                    <a href='http://www.sogniamoingrande.it/admin/subscriptions'>
                        <img src='http://www.sogniamoingrande.it/img/site/logo.jpg' style='max-height: 200px;'>
                    </a>
                </td>
            </tr>
            <tr>
                <td class='a1 blue-td'> 
                    Name : {{{ $name }}}
                </td>
            </tr>
            <tr>
                <td class='a1 blue-td'> 
                    Email : {{{ $email }}}
                </td>
            </tr>
            <tr>
                <td class='a1 blue-td'> 
                    <a class='site-link' href='http://www.sogniamoingrande.it/admin/subscriptions'> Go to the subscribers list at sogniamoingrande.it </a>
                </td>
            </tr>
        </table>
    </body>
</html>