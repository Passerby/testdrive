<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="/testdrive/">Home</a></li>
                <li><a href="/testdrive/index.php/site/page?view=about">About</a></li>
                <li><a href="/testdrive/index.php/site/contact">Contact</a></li>
            </ul>
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
                            <a href="/testdrive/index.php/site/logout">Logout</a>
                        </li>
                        </ul>
                <?php } ?>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div><!--/.header-->

