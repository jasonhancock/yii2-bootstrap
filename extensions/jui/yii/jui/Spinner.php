<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\jui;

use Yii;
use yii\helpers\Html;

/**
 * Spinner renders an spinner jQuery UI widget.
 *
 * For example:
 *
 * ```php
 * echo Spinner::widget(array(
 *     'model' => $model,
 *     'attribute' => 'country',
 *     'clientOptions' => array(
 *         'step' => 2,
 *     ),
 * ));
 * ```
 *
 * The following example will use the name property instead:
 *
 * ```php
 * echo Spinner::widget(array(
 *     'name'  => 'country',
 *     'clientOptions' => array(
 *         'step' => 2,
 *     ),
 * ));
 *```
 *
 * @see http://api.jqueryui.com/spinner/
 * @author Alexander Kochetov <creocoder@gmail.com>
 * @since 2.0
 */
class Spinner extends InputWidget
{
	/**
	 * Renders the widget.
	 */
	public function run()
	{
		echo $this->renderWidget();
		$this->registerWidget('spinner');
	}

	/**
	 * Renders the Spinner widget.
	 * @return string the rendering result.
	 */
	public function renderWidget()
	{
		if ($this->hasModel()) {
			return Html::activeTextInput($this->model, $this->attribute, $this->options);
		} else {
			return Html::textInput($this->name, $this->value, $this->options);
		}
	}
}