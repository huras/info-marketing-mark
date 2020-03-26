<script>
        function showYellowButtonModal(){
            var modal = document.getElementById('yellow_btn_modal');
            modal.classList.add('show-modal');
        }

        function closeYellowButtonModal(){
            var modal = document.getElementById('yellow_btn_modal');
            modal.classList.remove('show-modal');
            setCookie("showYellowButtonModal",true,1/3);
        }


        function getCookie(name) {
            var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
            return v ? v[2] : null;
        }
        function setCookie(name, value, days = 0) {
            var d = new Date;
            d.setTime(d.getTime() + 24*60*60*1000*days);
            document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
        }


        function autoYellowButtonModalRoutine(){
            console.log("O cookie");
            console.log(getCookie("showYellowButtonModal"));
            if (!getCookie("showYellowButtonModal")){
                setTimeout(showYellowButtonModal, <?php if(isset($delay)) { echo $delay * 1000; } else { echo '60000'; } ?>);
            }
        }
        autoYellowButtonModalRoutine();



        // Redireciona pra próxima pagina caso não haja erros
        // @if(session('yellow_btn_modal_form')!==null)
        //     @if(session('yellow_btn_modal_form'))
        //         window.location = "https://www.sogniamoingrande.info/";
        //     @else
        //         <?php
        //             $yellow_modal_auto_open = true;
        //         ?>
        //     @endif
        // @endif
    </script>

<div class='container-fluid layout2-home'>
    <div class='yellow_btn_modal modal-setup @if(isset($yellow_modal_auto_open)) show-modal @endif' id='yellow_btn_modal'>
        <form class='modal-window' method='POST' action='/newsletter/subscribe'>
            <span class="close-button" onclick="closeYellowButtonModal();"> X </span>

            @csrf
            <div class='textao'>SOGNIAMO IN GRANDE</div>
            <div class='texto-azul'> Iscriviti per assistere al WEBINAR Gratuito dove comprenderai come applicare candidature vincenti per compagnie internazionali. </div>
            <div class='texto-branco'> Inoltre, SEMPRE GRATIS, potrai scaricare il tuo <b> Ebook </b> con la lista di tutte le compagnie di Crociera presenti sul mercato.</div>
            <input type='text' name='first_name'  placeholder='Nome e Cognome' value='{{old("first_name")}}'>
            @if($errors->has('first_name'))
                <div class="mensagem-de-erro">
                    <div>{{$errors->first('first_name') }}</div>
                </div>
            @endif
            <input type='text' name='email'  placeholder='E-mail' value='{{old("email")}}'>
            @if($errors->has('email'))
                <div class="mensagem-de-erro">
                    <div>{{$errors->first('email') }}</div>
                </div>
            @endif
            <input type='text' name='phone' placeholder='N. Telefono' value='{{old("phone")}}' class='it-phone-mask'>
            @if($errors->has('phone'))
                <div class="mensagem-de-erro">
                    <div>{{$errors->first('phone') }}</div>
                </div>
            @endif
            <input type='submit' value='Registrati'>
        </form>
    </div>
</div>
