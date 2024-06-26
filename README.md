Bachelor Degree Project using Laravel

## Project Description

Built a construction service marketplace system (web-based system):
- where clients and service providers can interact on a single platform.
- that can be managed and monitored by the administrator.
- where product or service information is provided by multiple third parties and all transactions are managed by the website owner (organization).

> This project, therefore, proposes developing a Construction Service Marketplace System for the construction sector businesses. 

## Modules and its function for each user


**1. Clients**

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Module</th>
      <th scope="col">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Register account and log in</td>
      <td>Clients need to register and are required to provide their verification IC for identification. Then they can log in after successfully registering.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>View service providers and their services</td>
      <td>Clients can browse and search the services list the system provides and compare the best suitable service by viewing the details.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Request service</td>
      <td>Clients can request their preferred service by filling up a form, and the system will send it to the selected service provider and wait for the approval.</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Make payment</td>
      <td>The clients can pay based on the quotation.</td>
    </tr>
  </tbody>
</table>


**2. Service Providers**


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Module</th>
      <th scope="col">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Register account and log in</td>
      <td>Service providers must register by filling out the required information and uploading SSM documents and a CIDB certificate. They must wait for approval from the organization to sell on the system.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Add and manage services</td>
      <td>Service providers can market their services to clients by uploading services to the system and adding services multiple times. They can manage the existing services by updating or deleting them.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Manage orders</td>
      <td>Service providers can manage their clients' orders and accept or reject clients' requests. Each order must have a work plan schedule by uploading it to the system for the clients to view and the organization to monitor the progress.</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>View payment progress</td>
      <td>Service providers can view their payment's expected release date and status. They can also view the list of released payments from past orders.</td>
    </tr>
  </tbody>
</table>

  
**3. Owner of The System (Organization)**


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Module</th>
      <th scope="col">Function</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Manage clients</td>
      <td>The organization must check and verify the clients' information and IC for identification and payment verification.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Manage service providers</td>
      <td>The organization must check requirements and verify service providers' licenses before approving them.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Manage and monitor order completion</td>
      <td>The organization can manage and monitor the service providers' order completion and quality control.</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Manage payment progress</td>
      <td>The organization can manage payment to the service providers' order, and it will release the amount based on the completion of the order.</td>
    </tr>
  </tbody>
</table>



## System's functional modules


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Module</th>
      <th scope="col">Function</th>
      <th scope="col">User</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Login</td>
      <td>Login to the system</td>
      <td>All users</td>
    </tr>
    <tr>
      <th scope="row" rowspan="2">2</th>
      <td  rowspan="2">Service</td>
      <td>View and browse a list of services</td>
      <td>Users</td>
    </tr>
    <tr>
      <td>Create, manage and advertise services</td>
      <td>Service providers</td>
    </tr>
    <tr>
      <th scope="row" rowspan="3">3</th>
      <td rowspan="3">Order</td>
      <td>Order service</td>
      <td>Clients</td>
    </tr>
    <tr>
      <td>Manage clients' order </td>
      <td>Service providers</td>
    </tr>
    <tr>
      <td>Monitor order completion by the providers</td>
      <td>The organization</td>
    </tr>
    <tr>
      <th scope="row" rowspan="3">4</th>
      <td rowspan="3">Payment</td>
      <td>Pay the ordered service</td>
      <td>Clients</td>
    </tr>
    <tr>
      <td>Receive payment by the organization</td>
      <td>Service providers</td>
    </tr>
    <tr>
      <td>Manage the payment between clients and service providers</td>
      <td>The organization</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Clients</td>
      <td>Manage clients</td>
      <td>The organization</td>
    </tr>
    <tr>
      <th scope="row" rowspan="2">6</th>
      <td  rowspan="2">Service providers</td>
      <td>Add portfolio and receive clients' feedback</td>
      <td>Service providers</td>
    </tr>
    <tr>
      <td>Manage service providers</td>
      <td>The organization</td>
    </tr>
  </tbody>
</table>



## Technical Requirements

1. PHP
2. Laravel
3. MySQL
5. BootStrap


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
