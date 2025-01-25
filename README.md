# CodeIgniter 4 Project Installation Guide
## Requirements

Before starting, ensure you have the following installed on your system:

- **PHP** (version 7.4 or newer)
- **Composer** (dependency manager for PHP)
- A local web server (e.g., Apache or Nginx)

## Installation Steps

1. **Fork the Repository**

   - Go to the repository URL in your browser.
   - Click the `Fork` button in the top-right corner to create a copy of the repository under your GitHub account.

2. **Clone Your Forked Repository**

   Clone the forked repository to your local machine using Git:

   ```bash
   git clone https://github.com/<your-username>/<repository-name>.git
   ```
3. **Navigate to the Project Directory**
   
   Move into the project folder:
   
    ```bash
   cd <repository-name>
    ```
4. **Install Dependencies**

   Install all required dependencies using Composer:
   
   ```bash
    composer install
5. **Set Up Environment Configuration**

   Copy the `.env.example` file to `.env`:
   
     ```bash
     cp .env.example .env
  
7. **Run the Application**

   ```bash
   php spark serve
