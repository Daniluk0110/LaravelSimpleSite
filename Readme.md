# LaravelWebSite
 This is a simple web site using <i>Laravel</i>. Site also has an <i>Admin Panel</i> for data management.

## Prerequisits
  Ensure you have PHP version 7.1.*
  
 ## Running the site
 After you have cloned or downloaded the project, navigate to the corresponding directory
  <ul>
     <li>
     Install all the dependencies as specified in the <i>composer.lock</i> file (in your terminal). <br/>
     cd LaravelWebSite <br/>
     composer install 
     </li>
     <li>Copy the <i>.env.example</i> file to the <i>.env</i> file, and set the corresponding keys</li>
     <li> Run the site <br/> php artisan serve --host=your_host --port=your_port <br/> Alternatively, create a virtual host. <br/>
     </li>
     <li>Execute the <i>migrations</i> and run the <i>seeders</i> <br/> php artisan migrate
     <br/>composer dump-autoload
     <br/>php artisan db:seed
     </li>
  </ul>   
  
  