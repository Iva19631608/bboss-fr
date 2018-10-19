<?php

/** @var $this yii\web\View
 *@var $acats array
 *@var $afrs array
 */

//var_dump($acats);
$this->title = 'Каталог франшиз и франчайзинг предложений БИБОСС';
?>
<div class="site-index">
    <div class="container">
	    <div class="jumbotron">
        
            <h2>Каталог франшиз</h2>
        
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="list-group">
                         <li class="list-group-item main_menu_block">
                             <a href="#" >
                                 <span><img src="https://www.beboss.ru/img/icon/mobile/ios_new/all.png" class="img_cats alt=""></span> Все франшизы
                             </a>
                         </li>
                         <?php for ($i = 0; $i< count($acats['cats']['cat']) and $i<11 ; $i++) : ?>
                          <li class="list-group-item main_menu_block">
						      <a href="#" >
                                  <span><img src="https://www.beboss.ru/img/icon/mobile/ios_new/<?=$acats['cats']['cat'][$i]['ios_icon']?>" class="img_cats alt=""></span> <?=$acats['cats']['cat'][$i]['name']?>
                              </a>
                          </li>
                         <?php endfor;?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="list-group">
                        <?php for ($i = 11; $i< count($acats['cats']['cat']); $i++) : ?>
                            <li class="list-group-item main_menu_block">
                                <a href="#" >
                                    <span><img src="https://www.beboss.ru/img/icon/mobile/ios_new/<?=$acats['cats']['cat'][$i]['ios_icon']?>" class="img_cats alt=" " ></span> <?=$acats['cats']['cat'][$i]['name']?>
                                </a>
                            </li>
                        <?php endfor;?>
                    </div>
                </div>
			    <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="list-group">
                        <li class="list-group-item main_menu_block"><a href="#">Новые франшизы</a></li>
                        <li class="list-group-item main_menu_block"><a href="#">Франшизы со скидкой</a></li>
                        <li class="list-group-item main_menu_block"><a href="#">Франшизы с отзывами</a></li>
                        <li class="list-group-item main_menu_block"><a href="#">Рейтинг ТОП-100 франшиз</a></li>
                        <li class="list-group-item main_menu_block"><a href="#">Добавить франшизу</a></li>
                    </div>
                </div>
            </div>
		</div>		
        <div class="body-content">

        <div class="row">
            <?php for ($i = 0; $i< count($afrs['frs']['fr']); $i++) : ?>
                <div class="col-xs-6 col-sm-4 col-md-2">
                    <div class="frs_img">
                        <a href="#" class="thumbnail">
                            <img alt="<?=$afrs['frs']['fr'][$i]['name']?>" src="https://www.beboss.pro/listings/fr/<?=$afrs['frs']['fr'][$i]['id']?>/<?=$afrs['frs']['fr'][$i]['logo']?>">
                            <div class="frs_text">
                                <p><?=$afrs['frs']['fr'][$i]['cat_name']?></p>
                                <p><?=\number_format($afrs['frs']['fr'][$i]['invest'],0,'.',' ') ?> руб.</p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endfor;?>
        </div>

    </div>
</div>
