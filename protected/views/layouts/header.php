<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/testdrive/"><?php echo CHtml::encode(Yii::app()->name); ?></a>
        </div>
        <div class="collapse navbar-collapse">
        <?php
        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav'),
			'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Users', 'url'=>array('/user')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
			),
        ));

        ?>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <?php if (Yii::app()->user->name == "Guest")
                    {
                ?>
                <li><a href="/testdrive/index.php/site/login">Sign in</a></li>
                <?php }
                    else
                    {
                ?>
                <a class="dropdown-toggle" data-toggle="dropdown" href="">
                    <?php echo(Yii::app()->user->name) ?><b class="caret"></b>
                </a>
                    <ul class="dropdown-menu">
                        <li><a href="">Profile</a></li>
                        <li><a href="">Setting</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="/testdrive/index.php/site/signout">Sign out</a>
                        </li>
                    </ul>
                <?php } ?>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</header>

