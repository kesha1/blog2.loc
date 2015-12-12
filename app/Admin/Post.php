<?php

Admin::model(\App\Models\Post::class)->title('Блог')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->columns([
		Column::string('id')->label('#'),
		Column::string('title')->label('Заголовок'),
		Column::custom()->label('Опубликован')->callback(function($instance){
			return $instance->published ? 'Да' : 'Нет';
		}),
		Column::datetime('created_at')->label('Дата создания')
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::columns()->columns([
			[
				FormItem::checkbox('published', 'Опубликован')->defaultValue(1),
				FormItem::text('title', 'Заголовок')->required(),
				FormItem::ckeditor('body', 'Текст')->required(),
			],
		]),
	]);
	return $form;
});