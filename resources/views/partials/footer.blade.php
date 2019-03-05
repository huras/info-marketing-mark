<div class='container-fluid'>
    <div class='row'>
        <div class='footer' style='width: 100%; display: flex; flex-wrap: wrap;'>

            <div class='col-lg-4 col-md-6 social-nets'>
                <a class='social-net-icon' title='faceboook' target='_blank' href='https://www.facebook.com/Sogniamo-in-Grande-278875232794723/'>
                    <i class="fab fa-facebook"></i>
                </a>
                <a class='social-net-icon' title='linkedin' target='_blank' href='https://www.linkedin.com/in/sogniamo-in-grande-marco-polito-a94748a7/'>
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class='social-net-icon' title='instagram' target='_blank' href='https://www.instagram.com/sogniamoingrande/'>
                    <i class="fab fa-instagram"></i>
                </a>
                <a class='social-net-icon' title='youtube' target='_blank' href='https://www.youtube.com/channel/UCL6PL_3UhIO-VqFJ_IJWu3g'>
                    <i class="fab fa-youtube"></i>
                </a>
            </div>

            <div class='col-lg-4 col-md-6 register'>
                <form class='row' method='POST' id='footer-form' action='/newsletter/subscribe'>
                    {{ csrf_field() }}
                    <div class='w-100 form-holder'>
                        <div class='form-group col-sm-12' style='color: white; font-size: 18px; text-align: center; border-bottom: 1px solid #5f77a2; padding: 8px 16px;'>
                            Inscriviti al sito per rimanere aggiornato su opportunitá di lavoro e news
                        </div>
                        <div class='form-group col-sm-12'>
                            <input type='text' name='first_name' placeholder="first name">
                        </div>
                        <div class='form-group col-sm-12'>
                            <input type='text' name='email' placeholder="@mail">
                        </div>
                        <div class='form-group col-md-12'>
                            <div class='submit-button' onclick='document.getElementById("footer-form").submit();'> <span> Subscribe </span> </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class='col-lg-4 col-md-12 contacts'>
                <div class='contact-info'> 
                    <i class="far fa-envelope"></i> 
                    <div class='value'> sogniamoingrande@yahoo.com </div>
                </div>
                <div class='contact-info'> 
                    <i class="fab fa-whatsapp"></i> 
                    <div class='value'> +39 328 973 3662 </div>
                </div>
            </div>

            <div class='col-md-12 infos'>
                <!-- <div class='logo'> <img src='{{asset("/img/site/logo-trans.png")}}'> </div> -->
                <div class='titulo'> Sogniamo in Grande ® </div>
                <div class='sub-titulo'> All rights reserved 2019 </div>
            </div>
        </div>
    </div>
</div>