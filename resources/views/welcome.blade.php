<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-family: Helvetica Neue, Helvetica, sans-serif;
            }

            .commit{
                background-color: yellow;
                font-size: 10px;
                font-weight: bold;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 66px;
                font-family: 'Lato';
                font-weight: 100;
            }

            .instructions{
               text-align: left;
                line-height: 1.4em;
            }

            code{
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Instructies</div>
                <ul class="instructions">
                    <li>Zorg voor een mini-app met 2 pagina's</li>
                    <li><span class="commit">git commit 1</span> Maak een migratie aan voor de databanktabellen</li>
                    <li><span class="commit">git commit 2</span> <code>route <a href="/deadlines/add">/deadlines/add</a></code>: Toevoegen aan databank via formulier:
                        <ul>
                            <li>Naam vak (vb: PHP2)</li>
                            <li>Naam opdracht (vb: Dribbble project)</li>
                            <li>Naam docent (vb: J. Hens)</li>
                            <li>Datum van deadline (vb: 24/12/2015)</li>
                        </ul>
                    </li>
                    <li><span class="commit">git commit 3</span> <code>route <a href="/deadlines">/deadlines/</a></code> toont u alle deadlines in chronologische volgorde (oudste bovenaan)</li>
                    <li><span class="commit">git commit 4</span> Zorg voor een filter (voorbije deadlines / actieve deadlines)</li>
                    <li>Zorg voor minstens drie records (1 in verleden en 2 in de toekomst)</li>
                    <li>Commits die gebeuren na 17u15 maken uw applicatie ongeldig.</li>
                </ul>
            </div>


        </div>
    </body>
</html>
