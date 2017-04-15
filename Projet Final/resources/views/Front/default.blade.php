<html>
<head>
    @include("Front.commun.header")
</head>
<body>
@include("Front.commun.alert")
<div id="main">
    @yield("content")
    @include("Front.commun.footer")
</div>
</body>
</html>