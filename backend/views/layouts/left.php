<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= \yii\helpers\Url::to(['/images/avatar5.png']) ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Админ</p>

                <a href=""><i class="fa fa-circle text-success"></i> Онлайн</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Искать..."/>
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
	                ['label' => 'Слайдер', 'icon' => 'fas fa-play', 'url' => ['/slider']],
	                ['label' => 'Почему Мы', 'icon' => 'dashboard', 'url' => ['/chooseus']],
	                ['label' => 'Товары ', 'icon' => 'car', 'url' => ['/products']],
	                ['label' => 'Услуги', 'icon' => 'dashboard', 'url' => ['/service']],
	                ['label' => 'Садик', 'icon' => 'dashboard', 'url' => ['/garden']],



                    ['label' => 'Tехника', 'icon' => 'car', 'url' => ['/technology']],


	                ['label' => 'Сообщения', 'icon' => 'fas fa-envelope', 'url' => ['/email']],

                    ['label' => 'Информация', 'icon' => 'dashboard', 'url' => ['/info']],


                    ['label' => 'Коментарии', 'icon' => 'fas fa-envelope', 'url' => ['/coments']],


                ],
            ]
        ) ?>
    </section>
</aside>
