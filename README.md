# Pokemon Web App

This project is a simple web application using PHP for managing and exchanging Pokemon cards. Users can view a catalog of Pokemon cards, initiate card exchanges, and track exchange history.

## Features

- **Catalogue** : View a list of Pokemon cards with basic details.
- **Echange (Exchange)** : Initiate card exchanges with other users.
- **Historique (History)** : View the history of card exchanges.
- **Admin Panel** : Add new Pokemon cards through an admin panel.

## Table of Contents

- [Prerequisites](#Prerequisites)
- [Installation](#Installation)
- [Usage](#Usage)
- [Database tables](#Database-tables)
- [Files](#Files)
- [Contributing](#Contributing)

## Prerequisites
Ensure that you have PHP and a MySQL-compatible database (e.g., MySQL, MariaDB) installed on your server.

## Installation
1. Clone the repository :
```bash
git clone https://github.com/RubnK/pokemon-web-app.git
```
2. Navigate to the project directory :
```bash
cd pokemon-web-app
```
3. Set up a local development server (e.g., using [XAMPP](https://www.apachefriends.org/) or [MAMP](https://www.mamp.info/)).
4. Create a MySQL database.
5. Import the pokemon.sql file into your database to set up the required tables and sample data.
6. Update the config.php file with your database connection details.

## Usage
1. Start your local development server.
2. Visit the application in your web browser (e.g., http://localhost/pokemon-web-app).
3. Navigate through the catalog, initiate card exchanges, and view the exchange history.

## Database tables
- `color` : Information about colors.
- `type` : Information about Pokemon types.
- `pokemon` : Information about Pokemon cards.
- `pokemon_type` : Association between Pokemon cards and types.
- `echange` : Records of card exchanges.

## Files
- `index.php` : Displays the catalog of Pokemon cards.
- `carte.php` : Handles individual card details and user interactions.
- `echange.php` : Manages the card exchange process.
- `historique.php` : Displays the history of card exchanges.
- `menu.html` : Navigation menu.
- `modele_cartes.php` : Functions for interacting with the database.
- `design_carte.php` : Card display template.
- `pokemon.sql` : SQL script for database setup.
- `admin.php` : Admin panel for adding new Pokemon cards.
- `css/` : Folder containing stylesheets.

## Contributing
Feel free to contribute to the project by submitting issues or pull requests.