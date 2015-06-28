<!-- Navigation -->
<?php $profile = Profile::where('users_id',$user->id)->get()->first(); ?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    @include('layouts.nav.sections.top')

    @include('layouts.nav.sections.left')

</nav>