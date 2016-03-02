<?php
/**
 * Настройки модуля
 *
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
 */

if (! defined('DIAFAN'))
{
	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}

/**
 * Shop_admin_config
 */
class Shop_admin_config extends Frame_admin
{
	/**
	 * @var array поля в базе данных для редактирования
	 */
	public $variables = array (
		'base' => array (
			'hr1' => array(
				'type' => 'title',
				'name' => 'Основные',
			),
			'no_buy' => array(
				'type' => 'checkbox',
				'name' => 'Запретить покупать товары',
				'help' => 'Чтобы запретить пользователям покупать товары и использовать сайт как интернет-магазин без кнопки «Купить» и без «Корзины», удалите или деактивируйте страницу сайта с прикрепленным модулем «Корзина». Чтобы вернуть возможность продажи товаров, в системе (в модуле «Страницы сайта») должна существовать страница с подключенным модулем «Корзина».',
				'no_save' => true,
				'disabled' => true,
			),
			'security_user' => array(
				'type' => 'checkbox',
				'name' => 'Покупать могут только зарегистрированные',
				'help' => 'Если отмечена, кнопка купить будет появляться только для авторизованных пользователей.',
			),
			'use_count_goods' => array(
				'type' => 'checkbox',
				'name' => 'Учитывать остатки товаров на складе',
				'help' => 'Если отмечена, у каждого товара появится поле с количеством товара и необходимо будет указывать количество товара на складе. Товар с остатком 0 нельзя купить, кнопка «Купить» будет заменена на сообщение «Товар отсутствует». При покупке товара и и выполнении заказа (статус заказа с товаром «Выполнен») количество будет минусоваться.',
			),
			'hide_compare' => array(
				'type' => 'checkbox',
				'name' => 'Отключить сравнение товаров',
				'help' => 'Если отмечена, у товаров не будет кнопки «Сравнить».',
			),
			'buy_empty_price' => array(
				'type' => 'checkbox',
				'name' => 'Разрешать покупать товары без цены',
				'help' => 'Если отмечена, товар с нулевой ценой можно положить в корзину.',
			),
			'one_click' => array(
				'type' => 'checkbox',
				'name' => 'Включить «Заказать в один клик»',
				'help' => 'На странице товара появится форма быстрой покупки товара. Поля для формы выводятся опцией «Использовать в форме быстрого заказа».',
			),
			'rel_two_sided' => array(
				'type' => 'checkbox',
				'name' => 'В блоке похожих товаров связь двусторонняя',
				'help' => 'Если отметить, то при назначении товару А похожего товара Б, у товара Б автоматически станет похожим товар А.',
			),
			'nastr' => array(
				'type' => 'numtext',
				'name' => 'Количество товаров на странице',
				'help' => 'Количество одновременно выводимых товаров в списке.',
			),
			'first_page_list' => array(
				'type' => 'checkbox',
				'name' => 'Выводить на первой странице весь список товаров',
				'help' => 'По умолчанию на первой странице выводится список категорий с несколькими товарами.',
			),
			'sort' => array(
				'type' => 'select',
				'name' => 'Сортировка товаров',
				'help' => 'Выбранная сортировка будет применена и в административной панеле и на сайте.',
			),
			'order_redirect' => array(
				'type' => 'text',
				'name' => 'По окончанию оформления заказа',
				'help' => 'Страница сайта, на которую попадает покупатель после успешного оформления заказа.',
			),
			'use_non_material_goods' => array(
				'type' => 'checkbox',
				'name' => 'Включить возможность продажи файлов',
				'help' => 'Если отмечена, возможно продавать файлы. Тогда товаром можно сделать загружаемый файл, который будет храниться в защищенном месте и после оплаты пользователем доступен ему по уникальной ссылке, «живущей» один час.',
			),
			'attachment_extensions' => array(
				'type' => 'text',
				'name' => 'Доступные типы файлов (через запятую)',
			),
			'attachments_access_admin' => array(
				'type' => 'none',
				'hide' => true,
			),
			'hr3' => array(
				'type' => 'title',
				'name' => 'Категории',
			),
			'cat' => array(
				'type' => 'checkbox',
				'name' => 'Использовать категории',
				'help' => 'Позволяет включить/отключить категории товаров.',
			),
			'nastr_cat' => array(
				'type' => 'numtext',
				'name' => 'Количество категорий на странице',
				'help' => 'Количество одновременно выводимых категорий в списке на первой страницы модуля.',
			),
			'count_list' => array(
				'type' => 'numtext',
				'name' => 'Количество товаров в списке категорий',
				'help' => 'Для первой страницы магазина, где выходят по несколько товаров из всех категорий.',
			),
			'children_elements' => array(
				'type' => 'checkbox',
				'name' => 'Показывать товары подкатегорий',
				'help' => 'Если отмечена, в списке товаров категории будут отображатся товары из всех вложенных категорий.',
			),
			'count_child_list' => array(
				'type' => 'numtext',
				'name' => 'Количество товаров в списке вложенной категории',
				'help' => 'Для первой страницы модуля и для страницы категории.',
			),
			'hr4' => 'hr',
			'currency' => array(
				'type' => 'text',
				'name' => 'Название основной валюты',
				'help' => 'Название основной валюты сайта. Для добавления дополнительных валют, воспользуйтесь интерфейсом «Справочники» — «Валюты».',
				'multilang' => true,
			),
			'format_price' => array(
				'type' => 'function',
				'name' => 'Формат цены',
				'help' => 'Возможность указать формат отображения цены (количество знаков после запятой, разделитель целых, разделитель десятков).',
			),
			'format_price_1' => array(
				'type' => 'none',
				'hide' => true,
			),
			'format_price_2' => array(
				'type' => 'none',
				'hide' => true,
			),
			'format_price_3' => array(
				'type' => 'none',
				'hide' => true,
			),
			'hr6' => 'hr',
			'search_price' => array(
				'type' => 'checkbox',
				'name' => 'Искать по цене',
				'help' => 'Параметр позволяет выводить в блоке поиска по товарам поиск по цене.',
			),
			'search_article' => array(
				'type' => 'none',
				'name' => 'Искать по артикулу',
				'help' => 'Параметр позволяет выводить в блоке поиска по товарам поиск по артикулу.',
			),
			'search_brand' => array(
				'type' => 'none',
				'name' => 'Искать по производителям',
				'help' => 'Параметр позволяет выводить в блоке поиска по товарам список производителей для выбора.',
			),
			'search_action' => array(
				'type' => 'none',
				'name' => 'Искать товары по акции',
				'help' => 'Параметр позволяет выводить в блоке поиска по товарам поиск товаров, участвующих в акциях (у товара отмечена опция «Акция»).',
			),
			'search_new' => array(
				'type' => 'none',
				'name' => 'Искать по новинкам',
				'help' => 'Параметр позволяет выводить в блоке поиска по товарам поиск новинок (у товара отмечена опция «Новинок»).',
			),
			'search_hit' => array(
				'type' => 'none',
				'name' => 'Искать по хитам',
				'help' => 'Параметр позволяет выводить в блоке поиска по товарам поиск хитов (у товара отмечена опция «Хит»).',
			),
			'hr5' => array(
				'type' => 'title',
				'name' => 'Подключения',
			),
			'comments' => array(
				'type' => 'module',
				'name' => 'Подключить комментарии к товарам',
				'help' => 'Подключение модуля «Комментарии». Параметр не будет включен, если модуль «Комментарии» не установлен. Подробности см. в разделе [модуль «Комментарии»](http://www.diafan.ru/dokument/full-manual/upmodules/comments/).',
			),
			'comments_cat' => array(
				'type' => 'none',
				'name' => 'Показывать комментарии к категориям',
				'help' => 'Подключение модуля «Комментарии» к категориям товаров. Параметр не будет включен, если модуль «Комментарии» не установлен. Подробности см. в разделе [модуль «Комментарии»](http://www.diafan.ru/dokument/full-manual/upmodules/comments/).',
				'no_save' => true,
			),
			'tags' => array(
				'type' => 'module',
				'name' => 'Подключить теги к товарам',
				'help' => 'Подключение модуля «Теги». Параметр не будет включен, если модуль «Теги» не установлен. Подробности см. в разделе [модуль «Теги»](http://www.diafan.ru/dokument/full-manual/modules/tags/).',
			),
			'rating' => array(
				'type' => 'module',
				'name' => 'Подключить рейтинг товаров',
				'help' => 'Подключение модуля «Рейтинг». Параметр не будет включен, если модуль «Рейтинг» не установлен. Подробности см. в разделе [модуль «Рейтинг»](http://www.diafan.ru/dokument/full-manual/upmodules/rating/).',
			),
			'rating_cat' => array(
				'type' => 'none',
				'name' => 'Подключить рейтинг к категориям',
				'help' => 'Подключение модуля «Рейтинг» к категориям. Параметр не будет включен, если модуль «Рейтинг» не установлен. Подробности см. в разделе [модуль «Рейтинг»](http://www.diafan.ru/dokument/full-manual/upmodules/rating/).',
				'no_save' => true,
			),
			'keywords' => array(
				'type' => 'module',
				'name' => 'Подключить перелинковку',
				'help' => 'Отображение перелинковки в модуле. Подробности см. в разделе [модуль «Перелинковка»](http://www.diafan.ru/dokument/full-manual/upmodules/keywords/).',
			),
			'hr6' => 'hr',
			'counter' => array(
				'type' => 'checkbox',
				'name' => 'Подключить счетчик просмотров',
				'help' => 'Позволяет считать количество просмотров отдельного товара.',
			),
			'geomap' => array(
				'type' => 'module',
				'name' => 'Подключить геокарту',
				'help' => 'Подключение модуля «Геокарта». Параметр не будет включен, если модуль «Геокарта» не установлен. Подробности см. в разделе [модуль «Геокарта»](http://www.diafan.ru/dokument/full-manual/upmodules/geomap/).',
			),
			'counter_site' => array(
				'type' => 'checkbox',
				'name' => 'Выводить счетчик на сайте',
				'help' => 'Позволяет вывести на сайте количество просмотров отдельного товара. Параметр выводится, если отмечена опция «Счетчик просмотров».',
			),
			'hr7' => array(
				'type' => 'title',
				'name' => 'Автогенерация для SEO',
			),
			'title_tpl' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Title',
				'help' => "Если шаблон задан и для товара не прописан заголовок *Title*, то заголовок автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название,\n* %category – название категории,\n* %parent_category – название категории верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'keywords_tpl' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Keywords',
				'help' => "Если шаблон задан и для товара не заполнено поле *Keywords*, то поле *Keywords* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название,\n* %category – название категории,\n* %parent_category – название категории верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'descr_tpl' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Description',
				'help' => "Если шаблон задан и для товара не заполнено поле *Description*, то поле *Description* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название,\n* %category – название категории,\n* %parent_category – название категории верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'title_tpl_cat' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Title для категории',
				'help' => "Если шаблон задан и для категории не прописан заголовок *Title*, то заголовок автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название категории,\n* %parent – название категории верхнего уровня,\n\n* %page – страница (текст можно поменять в интерфейсе «Языки сайта» – «Перевод интерфейса») (SEO-специалисту).",
				'multilang' => true
			),
			'keywords_tpl_cat' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Keywords для категории',
				'help' => "Если шаблон задан и для категории не заполнено поле *Keywords*, то поле *Keywords* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название категории,\n* %parent – название категории верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'descr_tpl_cat' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Description для категории',
				'help' => "Если шаблон задан и для категории не заполнено поле *Description*, то поле Description автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название категории,\n* %parent – название категории верхнего уровня (SEO-специалисту).",
				'multilang' => true
			),
			'title_tpl_brand' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Title для производителей',
				'help' => "Если шаблон задан и для производителя не прописан заголовок *Title*, то заголовок автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название производителя,\n* %page – страница (текст можно поменять в интерфейсе «Языки сайта» – «Перевод интерфейса»)\n\n(SEO-специалисту).",
				'multilang' => true
			),
			'keywords_tpl_brand' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Keywords для производителей',
				'help' => "Если шаблон задан и для производителя не заполнено поле *Keywords*, то поле *Keywords* автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название категории\n\n(SEO-специалисту).",
				'multilang' => true
			),
			'descr_tpl_brand' => array(
				'type' => 'text',
				'name' => 'Шаблон для автоматического генерирования Description для производителей',
				'help' => "Если шаблон задан и для производителя не заполнено поле *Description*, то поле Description автоматически генерируется по шаблону. В шаблон можно добавить:\n\n* %name – название категории\n\n(SEO-специалисту).",
				'multilang' => true
			),
			'hr8' => array(
				'type' => 'title',
				'name' => 'Оформление',
			),
			'themes' => array(
				'type' => 'function',
				'hide' => true,
			),
			'theme_list' => array(
				'type' => 'none',
				'name' => 'Шаблон для списка элементов',
				'help' => 'По умолчанию modules/shop/views/shop.view.list.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_list' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_first_page' => array(
				'type' => 'none',
				'name' => 'Шаблон для первой страницы модуля (если подключены категории)',
				'help' => 'По умолчанию modules/shop/views/shop.view.fitst_page.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_first_page' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_id' => array(
				'type' => 'none',
				'name' => 'Шаблон для страницы элемента',
				'help' => 'По умолчанию, modules/shop/views/shop.view.id.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_id' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_list_brand' => array(
				'type' => 'none',
				'name' => 'Шаблон для списка товаров производителя',
				'help' => 'По умолчанию, modules/shop/views/shop.view.list.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_list_brand' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_list_param' => array(
				'type' => 'none',
				'name' => 'Шаблон для списка элементов с одинаковой характеристикой',
				'help' => 'По умолчанию, modules/shop/views/shop.view.list.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_list_param' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_list_compare' => array(
				'type' => 'none',
				'name' => 'Шаблон для сравнения товаров',
				'help' => 'По умолчанию modules/shop/views/shop.view.compare.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_list_compare' => array(
				'type' => 'none',
				'hide' => true,
			),
			'theme_list_search' => array(
				'type' => 'none',
				'name' => 'Шаблон для поиска элементов',
				'help' => 'По умолчанию modules/shop/views/shop.view.list.php. Параметр для разработчиков! Не устанавливайте, если не уверены в результате.',
			),
			'view_list_search' => array(
				'type' => 'none',
				'hide' => true,
			),
			//'hr_admin_page' => 'hr',
			//'admin_page'     => array(
			//	'type' => 'checkbox',
			//	'name' => 'Отдельный пункт в меню администрирования для каждого раздела сайта',
			//	'help' => 'Если модуль подключен к нескольким страницам сайта, отметка данного параметра выведет несколько пунктов в меню административной части для удобства быстрого доступа (администратору сайта).',
			//),
			'map' => array(
				'type' => 'module',
				'name' => 'Индексирование для карты сайта',
				'help' => 'При изменении настроек, влияющих на отображение страницы, модуль автоматически переиндексируется для карты сайта sitemap.xml.',
			),
			'where_access' => array(
				'type' => 'none',
				'hide' => true,
			),
		),
		'images' => array (
			'images' => array(
				'type' => 'module',
				'element_type' => array('element', 'cat', 'brand'),
				'hide' => true,
			),
			'images_element' => array(
				'type' => 'none',
				'name' => 'Использовать изображения для товаров',
				'help' => 'Позволяет включить/отключить загрузку изображений к товарам.',
				'no_save' => true,
			),
			'images_variations_element' => array(
				'type' => 'none',
				'name' => 'Генерировать размеры изображений',
				'help' => 'Размеры изображений, заданные в модуле «Изображения» и тег латинскими буквами для подключения изображения на сайте. Обязательно должны быть заданы два размера: превью изображения в списке товаров (тег medium) и полное изображение (тег large). Если задан дополнительный вариант, помеченный тегом preview, то на странице товара будет выводиться уменьшенные изображения (preview), при нажатии на которые обновленится основное изображение товара (medium).',
				'no_save' => true,
			),
			'list_img_element' => array(
				'type' => 'none',
				'name' => 'Отображение изображений в списке',
				'help' => "Параметр принимает значения:\n\n* нет (отключает отображение изображений в списке);\n* показывать одно изображение;\n* показывать все изображения. Параметр выводится, если отмечена опция «Использовать изображения».",
				'no_save' => true,
			),
			'images_cat' => array(
				'type' => 'none',
				'name' => 'Использовать изображения для категорий',
				'help' => 'Позволяет включить/отключить загрузку изображений к категориям.',
				'no_save' => true,
			),
			'images_variations_cat' => array(
				'type' => 'none',
				'name' => 'Генерировать размеры изображений для категорий',
				'help' => 'Размеры изображений, заданные в модуле «Изображения» и тег латинскими буквами для подключения изображения на сайте. Обязательно должны быть заданы два размера: превью изображения в списке категорий (тег medium) и полное изображение (тег large). Параметр выводится, если отмечена опция «Использовать изображения для категорий».',
				'no_save' => true,
			),
			'list_img_cat' => array(
				'type' => 'none',
				'name' => 'Отображение изображений в списке категорий',
				'help' => "Параметр принимает значения:\n\n* нет (отключает отображение изображений в списке);\n* показывать одно изображение;\n* показывать все изображения. Параметр выводится, если отмечена опция «Использовать изображения для категорий».",
				'no_save' => true,
			),
			'images_brand' => array(
				'type' => 'none',
				'name' => 'Использовать изображения для производителей',
				'help' => 'Позволяет включить/отключить загрузку изображений для производителей.',
				'no_save' => true,
			),
			'images_variations_brand' => array(
				'type' => 'none',
				'name' => 'Генерировать размеры изображений для производителей',
				'help' => 'Размеры изображений, заданные в модуле «Изображения» и тег латинскими буквами для подключения изображения на сайте. Параметр выводится, если отмечена опция «Использовать изображения для производителей».',
				'no_save' => true,
			),
			'use_animation' => array(
				'type' => 'none',
				'name' => 'Использовать анимацию при увеличении изображений',
				'help' => 'Параметр добавляет JavaScript код, позволяющий включить анимацию при увеличении изображений. Параметр выводится, если отмечена опция «Использовать изображения».',
				'no_save' => true,
			),
			'upload_max_filesize' => array(
				'type' => 'none',
				'name' => 'Максимальный размер загружаемых файлов',
				'help' => 'Параметр показывает максимально допустимый размер загружаемых файлов, установленный в настройках хостинга. Параметр выводится, если отмечена опция «Использовать изображения».',
				'no_save' => true,
			),
			'resize' => array(
				'type' => 'none',
				'name' => 'Применить настройки ко всем ранее загруженным изображениям',
				'help' => 'Позволяет переконвертировать размер уже загруженных изображений. Кнопка необходима, если изменены настройки размеров изображений. Параметр выводится, если отмечена опция «Использовать изображения».',
				'no_save' => true,
			),
		),
		'1c_shop' => array (
			'enable_1c' => array(
				'type' => 'text',
				'name' => 'Включить синхронизацию с 1С',
			),
			'1c_act' => array(
				'type' => 'checkbox',
				'name' => 'Активировать новые товары, категории и производителей после синхронизации',
				'help' => 'Если отметить, то товары, категории и производители, добавленные из системы 1С:Предприятие, будут сразу показаны на сайте.',
			),
			'1c_sale_all' => array(
				'type' => 'checkbox',
				'name' => 'Выгружать все заказы, включая ранее выгруженные',
				'help' => 'Если не отмечено, то с сайта выгружаются только заказы старше даты последней выгрузки.',
			),
		),
		'yandex_shop' => array (
			'yandex' => array(
				'type' => 'checkbox',
				'name' => 'Подключить Яндекс Маркет',
				'help' => 'Если отметить, по адресу *http://www.site.ru/modules/shop/shop.yandex.php* будет активен файл с импортом товаров для системы «Яндекс.Маркет» в формате YML. Все подробости и требования к магазинам смотрите на [сайте «Яндекс Маркет»](http://partner.market.yandex.ru/legal/tt/).',
			),
			'nameshop' => array(
				'type' => 'text',
				'name' => 'Короткое название магазина',
				'help' => 'Название магазина для системы «Яндекс Маркет». Не должно содержать более 20 символов. Нельзя использовать слова, не имеющие отношения к наименованию магазина («лучший», «дешевый»), указывать номер телефона и т. п. Название магазина, должно совпадать с фактическим названием магазина, которое публикуется на сайте).',
			),
			'currencyyandex' => array(
				'type' => 'select',
				'name' => 'Валюта',
				'help' => 'Валюта для системы «Яндекс Маркет».',
			),
			'show_yandex_category' => array(
				'type' => 'select',
				'name' => 'Выгружать категории в Яндекс.Маркет',
				'help' => 'Позволяет выбрать какие категории выгружать в «Яндекс Маркет»: все или только помеченные (появляется галочка при редактировании категории).',
			),
			'show_yandex_element' => array(
				'type' => 'select',
				'name' => 'Выгружать товары в Яндекс.Маркет',
				'help' => 'Позволяет выбрать какие товары выгружать в «Яндекс Маркет»: все или только помеченные (появляется галочка при редактировании товара).',
			),
			'bid' => array(
				'type' => 'numtext',
				'name' => 'Основная ставка',
				'help' => 'Смотрите [инструкцию «Яндекс Маркет»](http://partner.market.yandex.ru/legal/tt/).',
			),
			'cbid' => array(
				'type' => 'numtext',
				'name' => 'Ставка для карточек',
				'help' => 'Смотрите [инструкцию «Яндекс Маркет»](http://partner.market.yandex.ru/legal/tt/).',
			),
			'yandex_fast_order' => array(
				'type' => 'checkbox',
				'name' => 'Подключить Яндекс Быстрый заказ',
				'help' => 'Позволяет заполнять форму оформления заказа данными, предзаполненными в [системе «Яндекс Быстрый заказ»](http://help.yandex.ru/partnermarket/api-of-addresses.xml).',
			),
		),
		'send_mails' => array (
			'emailconf' => array(
				'type' => 'function',
				'name' => 'E-mail, указываемый в обратном адресе пользователю',
				'help' => "Возможные значения:\n\n* e-mail, указанный в параметрах сайта;\n* другой (при выборе этого значения появляется дополнительное поле **впишите e-mail**).",
			),
			'email' => array(
				'type' => 'none',
				'name' => 'впишите e-mail',
				'hide' => true,
			),
			'hr7' => 'hr',
			'subject_waitlist' => array(
				'type' => 'text',
				'name' => 'Тема письма пользователю о поступлении товара',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru).",
				'multilang' => true,
			),
			'message_waitlist' => array(
				'type' => 'textarea',
				'name' => 'Сообщение пользователю о поступлении товара',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n* %good – название товара,\n* %link – ссылка на товар.",
				'multilang' => true,
			),
			'hr8' => 'hr',
			'mes' => array(
				'type' => 'textarea',
				'name' => 'Сообщение о совершенном заказе перед оплатой',
				'help' => 'Сообщение, получаемое пользователем по окончании оформления заказа.',
				'multilang' => true,
			),
			'desc_payment' => array(
				'type' => 'text',
				'name' => 'Описание платежа',
				'help' => "Используется платежными системами. Можно добавлять:\n\n* %id – номер заказа.",
				'multilang' => true,
			),
			'payment_success_text' => array(
				'type' => 'textarea',
				'name' => 'Сообщение о принятии платежа',
				'help' => 'Сообщение, которое увидит пользователь, если платеж успешно принят платежной системой.',
			),
			'payment_fail_text' => array(
				'type' => 'textarea',
				'name' => 'Сообщение об ошибке платежа',
				'help' => 'Сообщение, которое увидит пользователь, если платеж не принят платежной системой.',
			),
			'hr9' => 'hr',
			'subject' => array(
				'type' => 'text',
				'name' => 'Тема письма пользователю о новом заказе',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n* %id – номер заказа.",
				'multilang' => true,
			),
			'message' => array(
				'type' => 'textarea',
				'name' => 'Сообщение пользователю о новом заказе',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n* %order – таблица заказа,\n* %payment – способ оплаты,\n* %message – поля формы «Оформление заказа»,\n* %fio – имя пользователя,\n* %id – номер заказа.",
				'multilang' => true,
			),
			'subject_change_status' => array(
				'type' => 'text',
				'name' => 'Тема письма пользователю об изменении статуса заказа',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru).",
				'multilang' => true,
			),
			'message_change_status' => array(
				'type' => 'textarea',
				'name' => 'Сообщение пользователю об изменении статуса заказа',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n*  %order – номер заказа,\n* %status – новый статус.",
				'multilang' => true,
			),
			'hr10' => 'hr',
			'subject_admin' => array(
				'type' => 'text',
				'name' => 'Тема письма администратору о новом заказе',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n* %id – номер заказа,\n* %message – поля формы «Оформление заказа».",
			),
			'message_admin' => array(
				'type' => 'textarea',
				'name' => 'Текст письма администратору о новом заказе',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n* %order – таблица заказа,\n* %payment – способ оплаты,\n* %message – поля формы «Оформление заказа»,\n* %fio – имя пользователя, совершившего заказ,\n* %id – номер заказа.",
			),
			'emailconfadmin' => array(
				'type' => 'function',
				'name' => 'E-mail для уведомлений администратора',
				'help' => "Возможные значения:\n\n* e-mail, указанный в параметрах сайта;\n* другой (при выборе этого значения появляется дополнительное поле **впишите e-mail**).",
			),
			'email_admin' => array(
				'type' => 'none',
				'name' => 'впишите e-mail',
				'hide' => true,
			),
			'hr11' => 'hr',
			'sendsmsadmin' => array(
				'type' => 'checkbox',
				'name' => 'Уведомлять о поступлении новых заказов по SMS',
				'help' => 'Возможность отправлять SMS администратору при поступлении заказа. Параметр можно подключить, если в [Параметрах сайта](http://www.diafan.ru/dokument/full-manual/sysmodules/config/) настроены SMS-уведомления.',
			),
			'sms_admin' => array(
				'type' => 'text',
				'name' => 'Номер телефона в федеральном формате',
				'help' => 'Номер телефона для SMS-уведомлений администратора о новом заказе.',
			),
			'sms_message_admin' => array(
				'type' => 'textarea',
				'name' => 'Сообщение для уведомлений',
				'help' => 'Текст сообщения для SMS-уведомлений администратора о новом заказе. Не более 800 символов.',
			),
			'hr12' => 'hr',
			'file_sale_message' => array(
				'type' => 'textarea',
				'name' => 'Сообщение пользователю о купленных файлах',
				'help' => "Можно добавлять:\n\n* %title – название сайта,\n* %url – адрес сайта (например, site.ru),\n* %files – ссылки на скачивание файлов,\n* %id – номер заказа.",
			),
		),
	);

	/**
	 * @var array названия табов
	 */
	public $tabs_name = array(
		'base' => 'Основные настройки',
		'images' => 'Изображения',
		'yandex_shop' => 'Яндекс Маркет',
		'1c_shop' => '1C',
		'send_mails' => 'Сообщения и уведомления',
	);

	/**
	 * @var array настройки модуля
	 */
	public $config = array (
		'tab_card', // использование вкладок
		'element_site', // делит элементы по разделам (страницы сайта, к которым прикреплен модуль)
		'config', // файл настроек модуля
	);

	/**
	 * @var array зависимости между полями
	 */
	public $show_tr_click_checkbox = array(
		'cat' => array(
			'count_list',
			'count_child_list',
			'children_elements',
			'title_tpl_cat',
			'keywords_tpl_cat',
			'descr_tpl_cat',
			'first_page_list',
			'nastr_cat',
		),
		'yandex' => array(
			'nameshop',
			'currencyyandex',
			'bid',
			'cbid',
			'show_yandex_category',
			'show_yandex_element',
		),
		'use_non_material_goods' => array(
			'attachment_extensions',
		),
		'counter' => array(
			'counter_site',
		),
		'sendsmsadmin' => array(
			'sms_admin',
			'sms_message_admin',
		),
	);

	/**
	 * @var array значения списков
	 */
	public $select_arr = array(
		'currencyyandex' => array(
			'RUR' => 'RUR',
			'USD' => 'USD',
			'EUR' => 'EUR',
			'UAH' => 'UAH',
			'BYR' => 'BYR',
			'KZT' => 'KZT',
		),
		'show_yandex_category' => array(
			0 => 'все',
			1 => 'только помеченные',
		),
		'show_yandex_element' => array(
			0 => 'все',
			1 => 'только помеченные',
		),
		'sort' => array(
			0 => 'ручная сортировка',
			1 => 'по дате добавления: от нового к старому',
			2 => 'по дате добавления: от старого к новому',
			3 => 'по алфавиту',
		),
	);

	/**
	 * Подготавливает конфигурацию модуля
	 * @return void
	 */
	public function prepare_config()
	{
		if(! SMS)
		{
			$this->diafan->variable("sendsmsadmin", "disabled", true);
			$name = $this->diafan->_($this->diafan->variable("sendsmsadmin", "name")).'<br>'.$this->diafan->_('Необходимо %sнастроить%s SMS-уведомления.', '<a href="'.BASE_PATH_HREF.'config/">', '</a>');
			$this->diafan->variable("sendsmsadmin", "name", $name);
			$this->diafan->configmodules("sendsmsadmin", $this->diafan->_admin->module, $this->diafan->_route->site, _LANG, 0);
		}
	}

	/**
	 * Задает значения полей для формы
	 *
	 * @return array
	 */
	public function get_values()
	{
		$array['no_buy'] = ! DB::query_result("SELECT id FROM {site} WHERE module_name='cart' AND [act]='1' AND trash='0'");
		return $array;
	}

	/**
	 * Редактирование поля "Формат цены"
	 *
	 * @return void
	 */
	function edit_config_variable_format_price()
	{
		echo '
		<div class="unit" id="'.$this->diafan->key.'">
				<div class="infofield">
		'.$this->diafan->variable_name().'</div>
				'
		. sprintf(
				$this->diafan->_('количество знаков после запятой: %s разделитель целых: %s разделитель десятков: %s'), '<input type="number" name="format_price_1" size="2" value="'.$this->diafan->values("format_price_1").'">', '<input type="text" name="format_price_2" size="2" value="'.$this->diafan->values("format_price_2").'">', '<input type="text" name="format_price_3" size="2" value="'.$this->diafan->values("format_price_3").'">'
		)
		. $this->diafan->help().'
			</div>';
	}

	/**
	 * Редактирование поля "Настройки поиска"
	 *
	 * @return void
	 */
	function edit_config_variable_search_price()
	{
		echo '
		<div class="unit" id="'.$this->diafan->key.'">
				<div class="infofield">
		'.$this->diafan->_('Поля, участвующие в поиске').'</div>
			<input name="search_price" id="input_search_price" value="1" type="checkbox"'.($this->diafan->values("search_price") ? ' checked' : '').'>
			<label for="input_search_price">'.$this->diafan->_('цена').'</label>
			<br><input name="search_article" id="input_search_article" value="1" type="checkbox"'.($this->diafan->values("search_article") ? ' checked' : '').'>
			<label for="input_search_article">'.$this->diafan->_('артикул').'</label>
			<br><input name="search_brand" id="input_search_brand" value="1" type="checkbox"'.($this->diafan->values("search_brand") ? ' checked' : '').'>
			<label for="input_search_brand">'.$this->diafan->_('производитель').'</label>
			<br><input name="search_action" id="input_search_action" value="1" type="checkbox"'.($this->diafan->values("search_action") ? ' checked' : '').'>
			<label for="input_search_action">'.$this->diafan->_('акция').'</label>
			<br><input name="search_new" id="input_search_new" value="1" type="checkbox"'.($this->diafan->values("search_new") ? ' checked' : '').'>
			<label for="input_search_new">'.$this->diafan->_('новинка').'</label>
			<br><input name="search_hit" id="input_search_hit" value="1" type="checkbox"'.($this->diafan->values("search_hit") ? ' checked' : '').'>
			<label for="input_search_hit">'.$this->diafan->_('хиты').'</label>
			'.$this->diafan->help().'
		</div>';
	}

	/**
	 * Выводит вкладку "Название магазина для Яндекс.Маркета"
	 *
	 * @return void
	 */
	public function edit_config_variable_nameshop()
	{
		echo '
		<div class="unit" id="'.$this->diafan->key.'">
				<div class="infofield">
		'.$this->diafan->variable_name().'</div>
				<input type="text" name="'.$this->diafan->key.'" size="40" value="'
		. (!$this->diafan->is_new ? str_replace('"', '&quot;', $this->diafan->value) : '')
		. '" maxlength="20" class="inp_maxlength"> <span class="maxlength">'.(20 - utf::strlen($this->diafan->value)).'</span>
				'.$this->diafan->help().'
		</div>';
	}

	public function edit_config_variable_order_redirect()
	{
		echo '
			<div class="unit" id="order_redirect">
				<div class="infofield">'.$this->diafan->variable_name().$this->diafan->help().'</div>';

		if(preg_match("/^[0-9]+$/", $this->diafan->value))
		{
			$name = DB::query_result("SELECT [name] FROM {site} WHERE [act]='1' AND trash='0' AND id=%d LIMIT 1", $this->diafan->value);
			$id = $this->diafan->value;
		}
		else
		{
			$row = DB::query_fetch_array("SELECT s.[name], s.id FROM {site} AS s INNER JOIN {rewrite} AS r ON r.module_name='site' AND r.element_type='element' AND r.element_id=s.id WHERE s.[act]='1' AND s.trash='0' AND r.rewrite='%s' LIMIT 1", $this->diafan->value);
			$name = $row["name"];
			$id = $row["id"];
		}

		echo $this->diafan->_('Переходить на страницу').': <a href="'.BASE_PATH_HREF.'site/edit'.$id.'/" class="menu_base_link" target="_blank"><strong>'.$name.'</strong></a>';
		echo ' (<a href="javascript:void(0)" class="order_redirect_select">'.$this->diafan->_('выбрать другую').'</a>)';

		echo '<input name="order_redirect" value="'.$this->diafan->value.'" type="hidden">
		</div>';
	}

	public function edit_config_variable_enable_1c()
	{
		echo '
			<div class="unit" id="enable_1c">
				';
		echo 'Для синхронизации DIAFAN.CMS и 1С:Предприятие достаточно подключиться к сайту из программы согласно <a href="http://www.diafan.ru/dokument/full-manual/modules/shop/#Integratsiya-s-sistemoy-1SPredpriyatie" target="_blank" style="color:#1b9ada">руководству по настройке</a>.
		</div>';
	}

	/**
	 * Редактирование поля "Шаблон страницы для разных ситуаций"
	 * @return void
	 */
	public function edit_config_variable_themes()
	{
		$themes = $this->diafan->get_themes();
		$views = $this->diafan->get_views($this->diafan->_admin->module);

		echo '<div class="unit" id="'.$this->diafan->key.'">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_list").'
			</div>
				<select name="theme_list" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_list") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_list" style="width:250px">
					<option value="">'.(! empty($views['list']) ? $views['list'] : $this->diafan->_admin->module.'.view.list.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'list')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_list") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_list").'
			</div>

		<div class="unit" id="theme_first_page">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_first_page").'</div>
				<select name="theme_first_page" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_first_page") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_first_page" style="width:250px">
					<option value="">'.(! empty($views['first_page']) ? $views['first_page'] : $this->diafan->_admin->module.'.view.first_page.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'first_page')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_first_page") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_first_page").'
			</div>

		<div class="unit" id="theme_id">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_id").'</div>
				<select name="theme_id" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_id") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_id" style="width:250px">
					<option value="">'.(! empty($views['id']) ? $views['id'] : $this->diafan->_admin->module.'.view.id.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'id')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_id") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_id").'
			</div>

		<div class="unit" id="theme_list_brand">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_list_brand").'</div>
				<select name="theme_list_brand" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_list_brand") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_list_brand" style="width:250px">
					<option value="">'.(! empty($views['list']) ? $views['list'] : $this->diafan->_admin->module.'.view.list.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'list')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_list_brand") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_list_brand").'
			</div>

		<div class="unit" id="theme_list_param">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_list_param").'</div>
				<select name="theme_list_param" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_list_param") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_list_param" style="width:250px">
					<option value="">'.(! empty($views['list']) ? $views['list'] : $this->diafan->_admin->module.'.view.list.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'list')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_list_param") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_list_param").'
			</div>

		<div class="unit" id="theme_list_search">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_list_search").'</div>
		<select name="theme_list_search" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_list_search") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_list_search" style="width:250px">
					<option value="">'.(! empty($views['list']) ? $views['list'] : $this->diafan->_admin->module.'.view.list.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'list')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_list_search") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_list_search").'
			</div>

		<div class="unit" id="theme_list_compare">
				<div class="infofield">
		'.$this->diafan->variable_name("theme_list_compare").'</div>
		<select name="theme_list_compare" style="width:250px">
					<option value="">'.(! empty($themes['site.php']) ? $themes['site.php'] : 'site.php').'</option>';
		foreach ($themes as $key => $value)
		{
			if ($key == 'site.php')
				continue;
			echo '<option value="'.$key.'"'.( $this->diafan->values("theme_list_compare") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				<select name="view_list_compare" style="width:250px">
					<option value="">'.(! empty($views['compare']) ? $views['compare'] : $this->diafan->_admin->module.'.view.compare.php').'</option>';
		foreach ($views as $key => $value)
		{
			if ($key == 'compare')
			{
				continue;
			}
			echo '<option value="'.$key.'"'.( $this->diafan->values("view_list_compare") == $key ? ' selected' : '' ).'>'.$value.'</option>';
		}
		echo '
				</select>
				'.$this->diafan->help("theme_list_compare").'
			</div>';
	}

	/**
	 * Сохранение поля "Валюта"
	 *
	 * @return void
	 */
	public function save_config_variable_currency()
	{
		$this->diafan->set_query("currency='%s'");
		$this->diafan->set_value($_POST["currency"]);
	}

	/**
	 * Сохранение поля "Валюта"
	 *
	 * @return void
	 */
	public function save_config_variable_use_count_goods()
	{
		if(! empty($_POST["use_count_goods"]) && ! $this->diafan->configmodules("use_count_goods", "shop", $this->diafan->_route->site))
		{
			DB::query("UPDATE {shop_price} SET count_goods=1 WHERE count_goods=0".($this->diafan->_route->site ? " AND good_id IN (SELECT id FROM {shop} WHERE site_id=".$this->diafan->_route->site.")" : ''));
		}
		$this->diafan->set_query("use_count_goods='%d'");
		$this->diafan->set_value(! empty($_POST["use_count_goods"]) ? 1 : 0);
	}
}
