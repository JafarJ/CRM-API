<h1 align="center"><b>SIMPLE CRM API</b></h1>

## Laravel 8.9 CRM API
Hey! I´m Jafar Jabbarzadeh, a wannabe software engineer from Las Palmas de Gran Canaria! https://www.linkedin.com/in/jafarjabbarzadeh/ And this is a Laravel 8.9 based CRM API ment to be used via an API development environment, including user roles and prospects management.

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
* [STEP-11. Seed the database.] Users can only be created by an authorized admin, so seeding your db will create your initial one, once your in, create another oficial one, login in to the new one and delete the seeded admin [php artisan db:seed]

To run it you can use laravel´s own local server [php artisan serve] or any server of your choice. Thanks for downloading! Let me know any feedback or possible issues you might have!

## Testing via API development environment
To use and test this CRM we will be using an API development environment, in this case [Postman](https://www.postman.com/)

* Once your project is installed, seeded and ready you´ll need to login to be able to do anything. Seeded admin credential are "Email" = "admin@gmail.com" and "Password" = "password".
* Once logged in you´ll have access to:
    ONLY ACCESIBLE TO ADMIN
    - /users to view all users.
    - /users/store to create a new user
    - /users/update to edit an existing user
    - /users/destroy to delete and existing user
    ACCESIBLE TO ALL
    - /prospects to view all prospects.
    - /prospects/store to create a new prospect
    - /prospects/update to edit an existing prospect
    - /prospects/destroy to delete and existing prospect
* Let´s for example create a new admin with our seeded admin:
    - To receive JSON responses add in Headers *Accept = application/json* and *Content-type = application/json*
    - Change the request to Post and YourLocalURL/users/store
    - In Body send as raw the following json:
        {
            "name":"NewAdmin",
            "email":"newadmin@gmail.com",
            "password":"actuallysecurepassword"
        }
     - And you have created a new user, now let´s change his status to Admin. Change the request to Post and YourLocalURL/users/update
     - In Body send as raw the following json:
        {
            "id":"2",
            "name":"NewAdmin",
            "email":"newadmin@gmail.com",
            "password":"actuallysecurepassword",
            "role":"admin"
        }
      - Now your new user is an admin. Let´s delete the seeded admin now. 
      - First URL/logout and URL/login with the new credentials.
      - Change the request to Post and YourLocalURL/users/destroy
      - In Body send as raw the following json:
        {
            "id":"1"
        }
      - Done! You are logged in your new admin and the original one is gone!

## Contributing

Leave feedback! That´s enough!

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

* Thanks Stack Overflow
* Coffee
* Education?

