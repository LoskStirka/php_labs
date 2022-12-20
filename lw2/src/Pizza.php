<?php

abstract class Pizza
{
	public string $name;
	public string $sauce;
	/** @var string[] $toppings */
	public array $toppings;
	public string $slicing;
	public function prepare(): void
	{
		print('Началась готовка пиццы');
		print("$this->name \n");
		print('Добавлен соус');
		print("$this->sauce \n");
		print('Добавлены топики: ');
		foreach ($this->toppings as $value) {
			print("$value ");
		}
	}
	public function cut(): void
	{
		print('Данную пиццу нарезают');
		print("$this->slicing \n");
	}
}
