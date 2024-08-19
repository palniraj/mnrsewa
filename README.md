<p align="center">
<a href="https://mnrsewa.nirajpal.com.np/">
<img src="public/images/mnrSewa_dlogo.png"  alt="logo" height="100px" width="200"/>
</a>

<h3 align="center">Make your work easy by all in one online service platform</h3>
</p>

<p align="center">
<img src="https://img.shields.io/github/workflow/status/palniraj/mnrsewa/build" alt="github actions" />

<a href="https://github.com/palniraj/mnrsewa/blob/main/LICENSE" target="_blank">
<img alt="License: MIT" src="https://img.shields.io/github/license/palniraj/mnrsewa" />
</a>
</p>

<p align="center">
<a href="https://mnrsewa.nirajpal.com.np/">View Demo</a>
·
<a href="https://github.com/palniraj/mnrsewa/issues">Report Bug</a>
·
<a href="https://github.com/palniraj/mnrsewa/issues">Request Feature</a>
</p>

<p align="center">
MnrSewa is a user-friendly web application designed to connect people with the services they need. It combines a recommendation system with an e-commerce platform to make finding and offering services easier and more efficient.
</p>

> ⚠️ This is pre-released (experimental) version of [mnrSewa website](https://mnrsewa.nirajpal.com.np/). That means we are still working to improve the site and breaking changes may occur anytime. So please avoid providing your real profile details as the app isn't fully secure and data may get erased any time. Meanwhile, you can help us by [raising an issue](https://github.com/palniraj/mnrsewa/issues/new/choose) if you find any bugs in the project.

## Key Features:

- **Personalized Recommendations**:
Choose your interests, like IT services or plumbing, and get tailored suggestions for service providers in those areas.

- **E-commerce Platform**:
MnrSewa hosts a variety of vendors, letting you find and compare different service providers all in one place.

- **Opportunities for Service Providers**:
Freelancers and companies can use MnrSewa to reach new customers and grow their business.

- **Multi-language Support**:
Available in multiple languages, including Nepali, to make it accessible for everyone.

- **Location-Based Suggestions**:
The app finds your location and recommends the best nearby service providers for quick and timely help.

- **Fair Pricing**:
Service charges are based on the distance between you and the service provider, ensuring fair rates.

- **Smart Recommendations**:
The app learns from user patterns to improve service suggestions over time.

- **User Reviews**:
Leave reviews for service providers to help others choose the best options.

- **Benefits for Everyone**:
MnrSewa benefits freelancers, companies, and customers by creating a connected and efficient service ecosystem.

## Website Flow
#### for freelancer or company
- Register and login
- Profile Update
- Add and update Services
- View Order and complete

#### for customer
- Register and login
- Profile Update
- Search Service
- Cart Service
- Order Service
- View Order Status
- Review

#### for admin
- Login
- Statistics Dashboard
- Add Service Category
- User Management(Approve, Reject - Portfolio Profiles)


## Tech Stack

- **Frontend** : HTML, CSS, Bootstrap, JavaScript, Jquery
- **Backend** : PHP, Laravel, AJAX
- **Database** : Mysql
- **Deployment** : AWS ec2 or Server, Client & Postgress Database hosted on Heroku
- **Tech modules** : Authentication, Authorization, Role Based Dashboard Pannel(Admin, Customer, Freelancer, Company), Service Recommendation, Create Protfolio and add Services, Book and Order, Search, Cart Services, etc.

## Local Development

Before running app locally make sure that you've install flowiing things in your machine:

- PHP version >= _v7.1_
- Composer version >= v2.4_
- Mysql
- Laravel >= v7
- Download and install [XAMPP](https://www.apachefriends.org/download.html) as database toolkit for easy database setup. (Optional)

#### Step 1: Clone the repo

```sh
https://github.com/palniraj/mnrsewa.git
```

#### Step 2 : Install dependencies

cd into the directory

```sh
 cd mnrsewa
```

In the root folder do:

```sh
  # Install the composer, laravel project dependencies
  
  composer install
```

#### Step 3 : Configuration

1.  Create `.env` file in the root directory.

```sh
  touch .env
```

2. Open [.env.example](./.env.example) file, copy everything

3. Paste the content in `.env` file

4. Create database named `mnrsewa` with [phpmyadmin] or `mysql-cli` from your terminal. _(You don't have to create tables for database)_

```sh
  sudo mysql
```
```sql
  CREATE database mnrsewa;
```

5. Again open `.env` file and replace fields like `DB_DATABASE`, `DB_USERNAME` , `DB_PASSWORD` with your own credentials and save.


6. Set application key 

```sh
  php artisan key:generate
```
7. And Migrate with

```sh
  php artisan migrate --seed
```
Or
```sh
  php artisan migrate:fresh --seed
```
8. Storage Link
```sh
  php artisan storage:link
```

_The configuration is quite hard tbh, if you encounter any problems in setup you can directy create [issue](github.com/palniraj/mnrsewa/issues). We will try to work on that._

#### Step 4: Usage

Now, you can run application by

```sh
php artisan serve

# website runs on http://localhost:8000 

```

#### Login Credentials for admin panel
```sh
 email: admin@mnrsewa.com  
 password : admin#1234
 ```
 ```sh
 email: customer@mnrsewa.com  
 password : customer#1234
  ```
 ```sh
 email: freelancer1@mnrsewa.com  
 password : freelancer#1234
  ```
 ```sh
 email: info@sofsee.com        
 password: company#1234
  ```

## Contributing

Contributions, issues and feature requests are welcome. After cloning & setting up project locally, you can just submit a PR to this repo and it will be deployed once it's accepted.
Read [CONTRIBUTING.md](https://github.com/palniraj/mnrsewa/blob/main/CONTRIBUTING.md) for complete contributing guidelines.

## Contributors

- WIP

## License

Copyright © 2021 [Niraj Pal](https://nirajpal.com.np).
This project is MIT licensed.