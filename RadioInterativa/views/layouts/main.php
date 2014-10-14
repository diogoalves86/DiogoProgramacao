<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1"/>
    <?= Html::csrfMetaTags() ?>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="<?php echo 'http://www.radiocp2interativa.com.br/wp-content/themes/blankslate'; ?>/js/jquery.js"></script>
    <title><?= Html::encode($this->title) ?></title>
    <script>
        $(document).ready(function () {
            $('#s').keyup(function () {
                var search = $('#s').val();
                if (search.length < 4) { $('#search_hints').hide(); }
                else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            $('#search_hints').show();
                            $('#search_hints').html(xmlhttp.responseText);
                        }
                    }
                    xmlhttp.open("GET", '/wp-content/themes/blankslate/searchhints.php?s='+search, true)
                    xmlhttp.send();
                }
            });
              
             
             function arrumaTitulo(){
                 var h2 = $('.noticia .titulo h2');
                 h2.css('position', 'relative');
            }

            if($('.noticia .titulo').find('img') == '[]')
            {
                  arrumaTitulo();
            }
        });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-50187618-1', 'radiocp2interativa.com.br');
      ga('send', 'pageview');

    </script>
<?php $this->head() ?>

<?php $this->beginBody() ?>
    
    <div class="logo">
        <a href="#"><img src="<?php echo 'http://www.radiocp2interativa.com.br/wp-content/themes/blankslate'; ?>/img/logo.png"/></a>
    </div>

        <div class="content">

            <div class="top_bar">
                <!--<div class="navbar">
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Enquetes</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Sobre</a></li>
                    </ul>
                </div>-->
            </div>
            <div class="middle_bar">

                <div class="left_column">

                    <div class="noticias">
                        <?=$content; ?>
                    </div>
                </div>

                <div class="right_column">
                    <div class="social">
                        <a target="_blank" href="https://twitter.com/cp2interativa"><img src="<?php echo 'http://www.radiocp2interativa.com.br/wp-content/themes/blankslate'; ?>/img/twitter_icon.png" alt="Twitter Radio Interativa"/></a>
                        <a target="_blank" href="https://www.facebook.com/cp2interativa"><img src="<?php echo 'http://www.radiocp2interativa.com.br/wp-content/themes/blankslate' ?>/img/facebook_icon.png" alt="Facebook Radio Interativa"/></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UC0qOMx4D_4nFe-6m-syQ7Hg"><img src="<?php echo 'http://www.radiocp2interativa.com.br/wp-content/themes/blankslate'; ?>/img/youtube_icon.png" alt="Youtube Radio Interativa"/></a>
                    </div>
                    <div class="widget" id="widget_programas">
                        <div class="title">
                            <img alt="Últimos Programas" src="<?php echo 'http://www.radiocp2interativa.com.br/wp-content/themes/blankslate'; ?>/img/widget_recent_entries.jpg"/>
                            <h3>Últimos Programas</h3>
                        </div>
                        <div class="conteudo">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>

            </div>

        </div>
    <?php $this->endBody() ?>
<?php $this->endPage() ?>
