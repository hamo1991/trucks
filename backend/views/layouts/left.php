<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu TX', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'О Нас', 'icon' => 'fas fa-columns', 'url' => ['/about']],
                    ['label' => 'Почему Мы', 'icon' => 'dashboard', 'url' => ['/chooseus']],
                    ['label' => 'Услуги', 'icon' => 'dashboard', 'url' => ['/service']],
                    ['label' => 'Tехника', 'icon' => 'car', 'url' => ['/technology']],
                    ['label' => 'Товары ', 'icon' => 'car', 'url' => ['/products']],
                    ['label' => 'Садик', 'icon' => 'dashboard', 'url' => ['/garden']],
                    ['label' => 'Info', 'icon' => 'dashboard', 'url' => ['/info']],
                    ['label' => 'Слайдер', 'icon' => 'fas fa-play', 'url' => ['/slider']],
                    ['label' => 'Сообщения', 'icon' => 'fas fa-envelope', 'url' => ['/email']],

                ],
            ]
        ) ?>

    </section>

</aside>
