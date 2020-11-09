<h1 style="margin:auto"><b>SIMPLE CRM API</b></h1>

# Laravel 8.9 Social media site [Visit!](http://18.191.134.123/)
Hey! I´m Jafar Jabbarzadeh, a wannabe software engineer from Las Palmas de Gran Canaria! https://www.linkedin.com/in/jafarjabbarzadeh/ And this is a Laravel 8.9 based Instagram clone, complete with accounts, posts, likes, follows, main and explore page, and more! 

## About Instantgram
Instantgram is a Instagram clone purely made for educational purposes, meant to mostly work and look like the official Facebook daughter app. 
Build with Laravel and node for backend and Bootstrap for front-end. 
Under deployment is information about that and the link to visit the deployed version where you can create your account and start posting things, if you do please follow me on there, it´s /profile/1, or JafarJ, that way I can be number one social media person on at least one site. 

## Installation
If you want to clone this on your local machine let me help you with the set-up.

* [STEP-1. Clone it.] Clone or just download it and place it where you want it, for example, C:/Users/YOURUSER/.
* [STEP-2. CD into your project.] To be able to install dependencies and continue setting things up you´ll need to open your console and type in [cd YOURPROJECTROUTE], so if it´s on the previously specified route a simple cd ProjectName will be enough.
* [STEP-3. Install Composer Dependencies.] This and many other projects have a composer.json file which includes all the composer (PHP) requirements needed. So inside your console, type [composer install].
* [STEP-4. Install NPM Dependencies.] Same as composer but for NPM requirements. So in your console type [npm install].
* [STEP-5. Create a copy of your .env file.] .env files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. To get that type [cp .env.example .env].
* [STEP-6. Generate an app encryption key] Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. Type [php artisan key:generate].
* [STEP-7. Create an empty database for our application.] Create an empty database for your project. Be it SQLite for which you would need to create a database.sqlite file for or any other service you like.
* [STEP-8. In the .env file, add database information to allow Laravel to connect to the database] In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.
* [STEP-9. Migrate the database.] Once your credentials are in the .env file, now you can migrate your database. Type [php artisan migrate].
* [STEP-10. Remove and re-link storage folder.] Not always needed but typing [rmdir public\storage] and then [php artisan storage:link] can solve permission issues for the app to use the storage folder.

And that´s it! Your very own Local Social media site is ready! To run it you can use laravel´s own local server [php artisan serve] or any server of your choice. Thanks for downloading! Let me know any feedback or possible issues you might have!

## Deployment

If you want to test it out visit http://18.191.134.123/, sorry for the lack of a domain, and create your user, make posts, follow and like other users, and whatever you might want! The project is deployed on an AWS free tier ubuntu server so don´t expect lightning speeds lol. 

## Contributing

Make account and post, would like to see it handle larger amounts of users at the same time, probably poorly but still. 

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Jafar Jabbarzadeh via [jafar.jabbaroff@gmail.com](mailto:jafar.jabbaroff@gmail.com).

## Troubleshooting contact

For any issues regarding the code, be it something not working properly or with my attempts at explaining, even for suggestions, contact directly through my LinkedIn https://www.linkedin.com/in/jafarjabbarzadeh/. I´m still fairly new to this so issues can exist. Thanks!

## Built With

* [PHP] v7.4
* [Laravel] v8.9
* [VUE] v2.6.12
* [NPM] v6.14.5
* [Node] v12.18.2
* [Composer] v1.10.13
* [HTML/CSS] Test CRM

## Author

* **Jafar Jabbarzadeh** - *Fully stacked* - [linkedIn](https://www.linkedin.com/in/jafarjabbarzadeh/)

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Acknowledgments

* [FreeCodeCamp](https://www.youtube.com/channel/UC8butISFwT-Wl7EV0hUK0BQ) for the amazing courses
* Thanks Stack Overflow
* Coffee
* Education?

