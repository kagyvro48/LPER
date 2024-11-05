<!doctype html>
<html lang="fr">


@include("layouts.front.partials.head")
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader">
    <div class="preloader"><span></span><span></span></div>
</div>

<div id="main-wrapper">
    @include("layouts.front.partials.header")
    <main>@yield("body")</main>
    @include("layouts.front.partials.footer")
    @include("layouts.front.partials.modals")
    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa-solid fa-caret-up"></i></a>
</div>
@include("layouts.front.partials.scripts")
</body>
</html>
