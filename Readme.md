# Het Molengeitje

## Screenshots of the website

## Installation

1. Copy `.env.example` to `.env` and fill in the database credentials.
2. Build and start the containers:
   ```bash
   docker compose up -d --build
   ```
3. Open a shell in the PHP container:
   ```bash
   docker compose exec php bash
   ```
4. Navigate to the theme directory
   ```bash
   cd wp-content/themes/het-molengeitje
   ```
5. Install dependencies:
   ```bash
   composer install
   npm install
   ```
6. Open `http://localhost:8080` and complete the WordPress setup wizard.
7. Activate your theme in WordPress.

## Development

- Run Tailwind build/watch:
  ```bash
  npm run watch
  ```

