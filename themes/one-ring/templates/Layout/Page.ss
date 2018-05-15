<!-- BEGIN PAGE TITLE/BREADCRUMB -->
<div class="parallax colored-bg pattern-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">$Title</h1>

                <div class="breadcrumb">
                    $Breadcrumbs
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE TITLE/BREADCRUMB -->


<!-- BEGIN CONTENT -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="main col-sm-8">
                <h1 class="section-title">Nunc enim nulla</h1>
                $Content
                $Form
            </div>

            <div class="sidebar gray col-sm-4">
                <% if $Menu(2) %>
                    <h2 class="section-title">In this section</h2>
                    <ul class="categories subnav">
                        <% loop $Menu(2) %>
                            <li><a href="$Link" class="$LinkingMode">$MenuTitle</a></li>
                        <% end_loop %>
                    </ul>
                <% end_if %>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->