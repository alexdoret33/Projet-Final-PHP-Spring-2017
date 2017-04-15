<html>
<head>
    @include("admin.commun.header")
</head>
<body>
@include("admin.commun.alert")
<div id="main">
    @yield("content")
    @include("admin.commun.footer")
</div>
</body>
</html>