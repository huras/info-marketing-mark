<div class='container-fluid layout2 header'>
  <div class='row w-100'>
    <div class='logo col-6'>
      <img src='/img/site/Logo top.jpg'>
      <div class='dflex'>
        <a href='/' class='nome-grande naked-link'>
          SOGNIAMO IN GRANDE
        </a>
        <a href='/' class='nome-pequeno naked-link'>
          Formazione e orientamento al settore Marittimo 
        </a>
      </div>
    </div>
    <div class='site-navbar col-6'>
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

      @foreach($menus as $menu)
        <a class='menu-item' href='{{$menu["link"]}}'>
          {{$menu["label"]}}
        </a>
      @endforeach
    </div>
  </div>
</div>