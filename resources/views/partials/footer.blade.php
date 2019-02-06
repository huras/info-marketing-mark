<div class='container-fluid'>
    <div class='row'>
        <div class='footer' style='width: 100%; display: flex; flex-wrap: wrap;'>

            <div class='col-lg-4 col-md-6 register'>
                <form class='row' method='POST' action='/newsletter/subscribe'>
                    {{ csrf_field() }}
                    <div class='w-100 form-holder'>
                        <div class='form-group col-lg-6 col-md-12 '>
                            <label> First Name </label>
                            <input type='text' name='first_name'>
                        </div>
                        <div class='form-group col-lg-6 col-md-12 '>
                            <label> Last Name </label>
                            <input type='text' name='last_name'>
                        </div>
                        <div class='form-group col-lg-6 col-sm-12'>
                            <label> Email </label>
                            <input type='text' name='email'>
                        </div>
                        <div class='form-group col-lg-6 col-sm-12'>
                            <label> Phone </label>
                            <input type='text' name='phone'>
                        </div>
                        <div class='form-group col-md-12'>
                            <input type='submit' value='Subscribe'>
                        </div>
                    </div>
                </form>
            </div>

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