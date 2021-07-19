## Instructions

In order to run, clone the repo using `git clone https://github.com/danielCristeaa/vpn-pricing.git`, open a terminal in the folder and run `php artisan serve`.

To access the webpages, open a browser and go to 127.0.0.1:8000

## Examples
http://127.0.0.1:8000/austria

http://127.0.0.1:8000/premier_league

http://127.0.0.1:8000/austria?voucher=OFF25

http://127.0.0.1:8000/premier_league?campaign=test

http://127.0.0.1:8000/austria?source=website

etc.

## Config files
`/config/austria_vpn_details.php` => text content for austria

`/config/premier_league_details.php` => text content for premier league

`/config/vouchers.php` => available vouchers

`/config/vpn_prices.php` => vpn prices for windows and linux
