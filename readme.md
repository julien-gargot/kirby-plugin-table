# Table Plugin

This is a plugin for [Kirby](http://getkirby.com/) enables a simple syntax in Kirbytext for simple table layouts.

![Table](table.png)

## Installation

[Download the plugins repository](https://github.com/julien-gargot/kirby-plugin-table.git) and copy the folder content to `/site/plugins/table/` of your site.

## Example usage in Kirbytext

```
(table…)

##### A1

////

Donec ullamcorper nulla non metus auctor fringilla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.

////

(image: default.jpg)

++++

##### A2

////

Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

////

- Bibendum
- Venenatis
- Quam
- Etiam
- Lorem

++++

##### A3

////

Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum.

////

Aenean lacinia bibendum nulla sed consectetur. Nullam quis risus eget urna mollis ornare vel eu leo.

(…table)
```

The `++++` seperator is used to divide text into rows. The `////` seperator is used to divide text into columns. Just make sure to provide the same number of columns for each row. For the opening and closing column tags you can either use the more elegant ellipsis … (Alt+. on a Mac) or three dots.

```
(table…)

(…table)
```

or

```
(table...)

(...table)
```

## Modifying class names

Class names for the table can be modified in your config:

```php
c::set('table.container', 'table');
```
