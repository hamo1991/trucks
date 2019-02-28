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
                    ['label' => 'Website Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
<<<<<<< HEAD
                    ['label' => 'страницы', 'icon' => 'dashboard', 'url' => ['/pages']],
                    ['label' => 'Почему Нас', 'icon' => 'dashboard', 'url' => ['/choose']],
                    ['label' => 'Услуги', 'icon' => 'dashboard', 'url' => ['/service']],
                    ['label' => 'Техника', 'icon' => 'dashboard', 'url' => ['/technology']],
                    ['label' => 'Фотографий', 'icon' => 'dashboard', 'url' => ['/pictures']],
                    ['label' => 'Информация', 'icon' => 'dashboard', 'url' => ['/info']],
                    ['label' => 'Слидер', 'icon' => 'dashboard', 'url' => ['/slider']],
=======
                    ['label' => 'О Нас', 'icon' => 'fas fa-columns', 'url' => ['/about']],
                    ['label' => 'Choose-Us', 'icon' => 'dashboard', 'url' => ['/choose']],
                    ['label' => 'Service', 'icon' => 'dashboard', 'url' => ['/service']],
                    ['label' => 'Tехника', 'icon' => 'car', 'url' => ['/technology']],
                    ['label' => 'Pictures', 'icon' => 'dashboard', 'url' => ['/pictures']],
                    ['label' => 'Info', 'icon' => 'dashboard', 'url' => ['/info']],
                    ['label' => 'Слайдер', 'icon' => 'fas fa-play', 'url' => ['/slider']],
                    ['label' => 'Сообщения', 'icon' => 'fas fa-envelope', 'url' => ['/email']],
>>>>>>> b98554e590c956581c20dde3947465d2a81eea5f
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
