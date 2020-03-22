<script>
  function open_mobile_menu(menuCount) {
    for(var i = 0; i < menuCount; i++){
      var menu = document.getElementById('menu-item-'+i);
      if(menu.style.display == 'none')
        menu.style.display = 'flex';
      else
        menu.style.display = 'none';
    }
  }
</script>

<div class='container-fluid layout2 header'>
  <div class='row w-100'>
    <div class='logo col-xl-6 col-lg-12'>
        <a href='/' class='naked-link'>
            <img src='/img/site/Logo top trans.png'>
        </a>
        <div class='dflex'>
            <a href='/' class='nome-grande naked-link'>
                SOGNIAMO IN GRANDE
            </a>
            <a href='/' class='nome-pequeno naked-link'>
                Formazione e orientamento al settore Marittimo
            </a>
        </div>
    </div>
    <div class='site-navbar col-xl-6 col-lg-12'>
      <?php
        $menus = [
          [
            'label' => 'HOME',
            'link' => '/'
          ],
          [
            'label' => 'ABOUT US',
            'link' => '/about'
          ],
          [
            'label' => 'WEBINAR',
            'link' => 'https://www.sogniamoingrande.info/webinar-gratuito'
          ],
          [
            'label' => 'BLOG',
            'link' => '/blog'
          ],
          [
            'label' => 'CONTACT US',
            'link' => '/contact'
          ]
        ];
      ?>

      <div class='menu-opener mobile-only' onclick='open_mobile_menu({{count($menus)}})'>
        <i class='fa fa-bars'></i>
      </div>

      @foreach($menus as $key => $menu)
        <a class='menu-item desktop-only' href='{{$menu["link"]}}'>
          {{$menu["label"]}}
        </a>
      @endforeach

      @foreach($menus as $key => $menu)
        <a class='menu-item mobile-only' style='display: none;' id='menu-item-{{$key}}' href='{{$menu["link"]}}'>
          {{$menu["label"]}}
        </a>
      @endforeach
    </div>
  </div>
</div>

