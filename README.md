

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Web Scraping whit Laravel Framework version 7.x
This project we use web scraping or web scraping, this technique is used to extract information from websites in this case of [computrabajo](https://www.computrabajo.com.mx/trabajo-de-desarrollador?q=Developer) of this we extract data such as:
- Title of the job offer.
- Location of the same.
- Description of the job offer.

Data that is stored in a database.


To execute this project:
1. Execute the `Composer Update` command to update dependencies.
2. Configure your databases in the `.env` file.
3. Run the command `php artisan migrate --sed`
4. Finally the command `php artisan serve`


## Configuration
In your `.env `  file you should insert your api token from your bot created by the [@botfather](https://t.me/botfather)
```bash
     TELEGRAM_BOT_TOKEN=YOUR_API_TOKEN _HERE
```
## Dependencies
You must install the following dependencies copy and paste in your file [composer.json](composer.json).
```json
 "require": {
        "guzzlehttp/guzzle": "^6.3.1|^7.0.1",
        "irazasyed/telegram-bot-sdk": "^3.0",
        "laravel/ui": "^2.4",
        "laravelium/feed": "7.*"
 }
```
## Screenshots
![App](Screenshot_20211210_032107.png)

## Documentacion
If you want to know more about the Telegram API
I invite you to read [HERE](https://t.me/scraping_web_ebuubs)
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
