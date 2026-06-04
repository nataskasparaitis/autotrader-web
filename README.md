# AutoTrader



Car listing website built with Laravel.



## Features



- Car catalog with 100 seeded cars

- User favorites system

- Admin CRUD for cars and categories

- Authentication and authorization

- 10,000+ seeded users

- Docker-based deployment



## Requirements



- Ubuntu 24.04 VM (or any Linux distribution with Docker installed)

- Git

- SSH access to the VM



## Setup & Deployment



### 1. Copy run.sh



From this repository copy the run.sh file to your VM



### 2. Make the Setup Script Executable



```bash

chmod +x run.sh

```



### 3. Run the Setup Script



This will:



- Install Docker (if needed)

- Build and start containers

- Run database migrations

- Seed the database



```bash

./run.sh

```



The script will create:



- 10,000 users

- 100 cars

- 10 categories



## Accessing the Application



After the script finishes, open two terminals.



### Terminal 1: Create an SSH Tunnel



```bash

ssh -L 8000:localhost:80 -L 8080:localhost:8080 -p <port> <username>@<vm_ip>

```



Replace:



- `<port>` with your VM SSH port

- `<username>` with your VM username

- `<vm_ip>` with your VM IP address



### Terminal 2: Open the Application



Keep the SSH tunnel running and open your browser.



#### Website



```

http://localhost:8000

```



#### phpMyAdmin



```

http://localhost:8080

```



## Default Admin Account



**Email:** `admin@gmail.com`



**Password:** `adminadmin`



## Project Structure



```text

app/

├── Http/Controllers/    # Cars, categories, favorites, authentication

└── Models/              # Car, Category, User, Favorite



resources/

└── views/               # Blade templates



routes/

└── web.php              # Application routes



database/

└── seeders/             # 100 cars, 10 categories, 10,000 users

```



## Technologies



- Laravel 11

- PHP 8.5

- MySQL 5.7

- Docker & Docker Compose

- Nginx

- Custom CSS (responsive design)

- JavaScript (ES6) for AJAX favorites

