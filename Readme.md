# LaravelWebSite
 This is a simple web site using <i>Laravel</i>. Site also has an <i>Admin Panel</i> with <i>CRUD</i> operations for data management

## Prerequisits
  <ul>
    <li>Ensure you have PHP version 7.1.*</li>
    <li>Composer installed</li>
    <li>Laravel 5</li>
    <li>MySQL</li>
  </ul>
  
 ## Running the site
After you have cloned or downloaded the project, navigate to your corresponding directory
<ul>
  <li>
       Install all the dependencies as specified in the composer.lock file (in your terminal). <br/>
       composer install <br/>
       php artisan vendor:publish
  </li>
  <li>
      Copy the .env.example file to the .env file, and set the corresponding keys:
      <ul>
         <li>DB_CONNECTION</li>
         <li>DB_HOST</li>
         <li>DB_PORT</li>
         <li>DB_DATABASE</li>
         <li>DB_USERNAME</li>
         <li>DB_PASSWORD</li>
         <li>MAIL_DRIVER</li>
         <li>MAIL_HOST</li>
         <li>MAIL_PORT</li>
         <li>MAIL_USERNAME</li>
         <li>MAIL_PASSWORD</li>
         <li>MAIL_ENCRYPTION</li>
      </ul>
  </li>
  <li>Generate Application Key: php artisan key:generate</li>
    <li>Create the corresponding empty Database</li>
    <li>
       Execute the migrations and run the seeders <br/> 
       php artisan migrate <br/>
       composer dump-autoload <br/>
       php artisan db:seed <br/>
    </li>
     <li>
            Run the site <br/>
            php artisan serve --host=your_host --port=your_port <br/> 
            Alternatively, create a virtual host. <br/>
        </li>
      <li>In order to navigate to the <i>Admin Panel</i> go to APP_URL/admin </li>
  </ul>   
  
  Home Page<br/>
  ![ScreenShot](https://i.imgur.com/wLXQad6.png)
  
  About us<br/>
  ![ScreenShot](https://i.imgur.com/zUHUD4r.png)
  
  Services
  ![ScreenShot](https://i.imgur.com/SFhPO88.png)
  
  Portfolio
  ![ScreenShot](https://i.imgur.com/l8jjmP6.png)
  
  Clients
  ![ScreenShot](https://i.imgur.com/jLKgwVO.png)
  
  Team
  ![ScreenShot](https://i.imgur.com/LizjCgh.png)
  
  Contact Us
  ![ScreenShot](https://i.imgur.com/Fgds2M0.png)
  
  
  ## Admin Panel
  Panel Admin - /admin
  
  All Pages
  ![ScreenShot](https://i.imgur.com/SSn88Ph.png)
  
  Add Page
  ![ScreenShot](https://i.imgur.com/ouCuaK0.png)
  
  Edit Page
  ![ScreenShot](https://i.imgur.com/JYCSHut.png)