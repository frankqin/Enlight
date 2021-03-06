<!-- Navigation toolbar (top) -->
<nav class="topbar">
    <div class="fill">
        <div class="container">

            <!-- Project name -->
            <a class="brand" href="{url action=index}">
                Blog - Enlight
            </a> <!-- //Project name -->

            <!-- Main navigation -->
            <ul class="nav">
                <li{if $activeMenu=="index"} class="active"{/if}>
                    <a href="{url action=index}">Home</a>
                </li>

                <li{if $activeMenu=="listing"} class="active"{/if}>
                    <a href="{url controller=listing action=index}">All Posts</a>
                </li>
            </ul> <!-- //Main navigation -->

            <!-- Basic search component -->
            <form action="{url controller=search}" class="pull-right" method="post">
                <input type="text" name="searchTerm" placeholder="Search...">
            </form> <!-- //Basic search component -->

        </div>
    </div>
</nav> <!-- //Navigation toolbar (top) -->