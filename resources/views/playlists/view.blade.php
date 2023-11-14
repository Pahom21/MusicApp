<?php
    // Extending the default layout
    echo '@extends("layouts.default");'
?>
<?php
    echo '@section("title", $pageTitle);';
    echo '@section("pageID", $pageID);';
    echo '@section("content");';
?>

    <!-- .container -->
    <div class="container">

        <br/>

        <!-- breadcrumb -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="javascript:void(0)" onclick="location.href='/'" title="Home">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" onclick="location.href='/playlists'" title="Playlists">
                            Playlists
                        </a>
                    </li>

                    <li class="active">
                        <?php echo $pageTitle; ?>
                    </li>
                </ol>
            </div>
        </div>
        <!-- /breadcrumb -->

        <br/>

        <h1 class="text-center"><?php echo $pageTitle; ?></h1>

        <!-- .panel -->
        <div class="panel panel-primary">

            <!-- .panel-heading -->
            <div class="panel-heading">
                <h3><?php echo $playlist->name; ?> Tracks</h3>
            </div>
            <!-- /.panel-heading -->
            
            <!-- .panel-body -->
            <div class="panel-body">

                <ul class="list-unstyled">
                    <?php if($tracks->count() > 0): ?>
                        <?php $i = 1; ?>
                        <?php foreach($tracks as $track): ?>
                            <li><?php echo $i; ?>. <?php echo $track->title; ?> - <?php echo $track->artist_names; ?> <span class="pull-right"><button class="btn btn-warning btn-xs" data-content="<?php echo $playlist->id; ?>" value="<?php echo $track->id; ?>" onclick="removeTrackFromPlaylist(this);"  title="Remove <?php echo $track->title; ?> from Playlist"><i class="fa fa-ban"></i></button></span></li>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><div class="alert alert-default"><i class="fa fa-ban"></i> <?php echo $playlist->name; ?> has no tracks yet!</div></li>
                    <?php endif; ?>
                </ul>

            </div>
            <!-- /.panel-body -->

        </div>
        <!-- /.panel -->

    </div>
    <!-- /.container -->

<?php
    echo '@endsection;';
?>
