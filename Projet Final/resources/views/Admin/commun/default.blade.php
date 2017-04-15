<html>
    <head>
        @include("front.commun.header")
    </head>
    <body>
    @include("front.commun.alert")

    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">

            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/Projet/public">Accueil</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link disabled" href="#">Disabled</a>
            </div>
        </div>
    </nav>

        <div id="main" class="container">
            @yield("content")
            @include("front.commun.footer")
        </div>
    </body>
</html>