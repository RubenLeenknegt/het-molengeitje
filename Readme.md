# Het Molengeitje

## Screenshots of the website
### Hero + navbar
<img width="1919" height="936" alt="Screenshot 2026-05-03 202925" src="https://github.com/user-attachments/assets/c4ad63b2-f2a2-4cd0-aae0-0c95420b85fc" />

### Dropdown menu
<img width="1919" height="927" alt="Screenshot 2026-05-03 202935" src="https://github.com/user-attachments/assets/bc757bf3-242f-426f-8003-fb08d1fa9bd3" />

### Cards block
<img width="1919" height="734" alt="Screenshot 2026-05-03 203210" src="https://github.com/user-attachments/assets/e19c8743-94ee-4da5-9b4f-3f5a697dbb97" />

### Feature split
<img width="1919" height="943" alt="Screenshot 2026-05-03 203256" src="https://github.com/user-attachments/assets/8f160bac-62fd-4b91-88d5-71aba11696eb" />

### Secondary feature split
<img width="1918" height="847" alt="Screenshot 2026-05-03 203402" src="https://github.com/user-attachments/assets/3a75a729-f11a-412e-a023-a105eaf57b23" />

### Showcase block
<img width="1919" height="873" alt="Screenshot 2026-05-03 203426" src="https://github.com/user-attachments/assets/9ea4cb38-06fd-497c-a2d9-371781a577c3" />

### Inverted feature split
<img width="1919" height="755" alt="Screenshot 2026-05-03 203500" src="https://github.com/user-attachments/assets/98efbb65-4796-42ee-92d1-abdd77a83f74" />

### FAQ block
<img width="1919" height="927" alt="Screenshot 2026-05-03 203534" src="https://github.com/user-attachments/assets/926bd66f-5133-413b-8021-5c9708699f0d" />

### Footer
<img width="1919" height="941" alt="Screenshot 2026-05-03 203617" src="https://github.com/user-attachments/assets/e95c75ec-0137-492f-8942-094c59278a8e" />


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

