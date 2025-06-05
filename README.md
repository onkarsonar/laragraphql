<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Installation Laravel Graphql steps

1 . composer create-project laravel/laravel laragraphql (you can give any folder name instead of laragraphql).

2 . Lighthouse installation 
    2 . 1 . composer require nuwave/lighthouse
    2 . 2. php artisan vendor:publish --tag=lighthouse-schema

3 . Install Graphql Devtool - composer require mll-lab/laravel-graphiql

4 .  Config (Lighthouse / Graphql) - php artisan vendor:publish --tag=lighthouse-config

5 . Create Users table in db and insert data (if not done)

6 . Create Resolver file and folder to define resolver function  - App/Graphql/Resolver/fileResolver.php

7 . Add resolver file namespace in lighthouse.php - " 'resolvers' => 'App\\GraphQL\\Resolvers',"

8 . Write required function for CRUD like operation 

9 . Some sample queries

    9 . 1. to get data 
            query {
        userlist(first:2 page:1){
            data{
            id
            email
            name
            created_at
            updated_at
            }
            paginatorInfo{
            firstItem
            total
            hasMorePages
            }
            
        }
    }

    9 . 2. get data using email

        query {
            user (email:"omkar@gmail.com") {
                id
                name 
                email
            }
        }

    9 . 3 .  (use id for id based data) 
    query {
            userById(id:2) {
                id
                name
                email
            }
        }

    9 . 4 . Craete data

        mutation {
            createUser(
                input :{
                name:"kio"
                email:"kio2@gmail.com"
                }
            )
            {
                id
                name
                email
            }
        }

    9 . 5. update data

    mutation {
            updateUser(id:3
                input :{
                name:"kkk"
                email:"kkk@gmail.com"
                }
            )
            {
                id
                name
                email
            }
        }

    9 . 6 . Delete data

        mutation {
            deleteUser (id:3) {
                id
                name
                email
            }
        }



