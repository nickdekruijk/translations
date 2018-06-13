[![Latest Stable Version](https://poser.pugx.org/larapages/translations/v/stable)](https://packagist.org/packages/larapages/translations)
[![Latest Unstable Version](https://poser.pugx.org/larapages/translations/v/unstable)](https://packagist.org/packages/larapages/translations)
[![Monthly Downloads](https://poser.pugx.org/larapages/translations/d/monthly)](https://packagist.org/packages/larapages/translations)
[![Total Downloads](https://poser.pugx.org/larapages/translations/downloads)](https://packagist.org/packages/larapages/translations)
[![License](https://poser.pugx.org/larapages/translations/license)](https://packagist.org/packages/larapages/translations)

# LaraPages/Translations
A simple Translation trait to be used with Laravel Models.
When this trait is enabled on your model you can user $model->__('column') or $model->trans('column') to get the translated value for your current locale.

## Installation
To install the package use

`composer require larapages/translations`

## Configuration
If you don't like the default configuration options publish the config file and change the `translations.php` file in your Laravel `app/config` folder.

`php artisan vendor:publish --tag=config --provider="LaraPages\Translations\ServiceProvider"` 

## Usage
First off all your database table must include all columns for the translations. For example if you have a table with a title and a description column you must add a title_nl and description_nl column if you want do support Dutch (nl) translations.
Add this to the use section of your model:
```use LaraPages\Translations\Translations;```
And add
```use Translations;```
after 
```class Story extends Model
{
```
Then you can use the trans or __ methods on your models. Like this:
```$story->trans('title')``` or ```$story->__('description')```

## License
LaraPages is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
