<h1 align="center"><a href="https://github.com/DaffaAn/semantik-web.git" target="_blank">MLBB Database</a></h1>

## About Projects

This application is created based on a website which the author then named it MLBB Database. MLBB Database itself is a website that contains information about heroes on the game Mobile Legends: Bang Bang. the application of web semantics in the website is in the form of a search engine using SPARQL so that each input given will display results that match the inputted.

### Built With

- [Bootstrap](https://getbootstrap.com/)
- [XAMPP](https://www.apachefriends.org/download.html)
- [Apache Jena Fuseki](https://jena.apache.org/documentation/fuseki2/index.html)
- [NGROK](https://ngrok.com/)

## Requirements

<ul>
    <li>Git</li>
    <li>Composer</li>
    <li>XAMPP</li>
    <li>PHP 7.4</li>
    <li>Browser</li>
    <li>Apache Jena Fuseki</li>
    <li>NGROK</li>
</ul>

## Installation

1. Prepare and install all Requirements
2. Clone Project on XAMPP folder (../xampp/htdocs)
   ```sh
       git clone https://github.com/DaffaAn/semantik-web.git
   ```
3. Run Apache Jena Fuseki on root folder
   ```sh
       fuseki-server
   ```
4. Run NGROK on port 3030
   ```
       ngrok http 3030
   ```
5. Add turtle file on `/src/sparql/hero.ttl` to Apache Jena Fuseki on http://localhost:3030/
6. Run the app
   ```sh
       http://localhost/MLBB-Database/
   ```

## Author

| NPM          | Name                    |
| ------------ | ----------------------- |
| 140810190008 | Daffa Anov Arkan Javier |
