<div class="rt-breadcump rt-breadcump-height with-logn-height">
    <div class="rt-page-bg rtbgprefix-cover" style="background-image: url(/assets/images/backgrounds/bredcump.png)">
    </div><!-- /.rt-page-bg -->
    <div class="container">
        <div class="row rt-breadcump-height with-logn-height">
            <div class="col-12">
                <div class="breadcrumbs-content">
                    <h3>Search Nearby Places</h3>
                    <div class="breadcrumbs">
                        <span class="divider"><i class="icofont-home"></i></span>
                        <a href="#" title="Home">Home</a>
                        <span class="divider"><i class="icofont-simple-right"></i></span>
                        search

                    </div><!-- /.breadcrumbs -->
                </div><!-- /.breadcrumbs-content -->
            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</div><!-- /.rt-bredcump -->

<section class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mx-auto col-md-7 mb-5 mb-lg-0">
                <div class="rt-sidebar-group">
                    <div class="rt-widget widget_rating">

                        <form action="#" class="row">
                            <h5>Keyword</h5>
                            <div class="rt-input-group mini" style="width: 100%;">
                                <input type="text" class="form-control" placeholder="Eg: Rice, Meat, Tea, Vegatables, Fruits, etc..." />
                            </div>
                            <h5 class="mt-4">Category</h5>
                            <div class="rt-input-group mini mb-3 mb-md-0" style="width: 100%;">
                                <select class="rt-selectactive banner-select" name="from" style="width: 100%;">
                                    <option>(Optional)</option>
                                    <?php foreach ($data['category'] as $cat) : if ($cat->parentID) { ?>
                                            <option value="<?= $cat->id; ?>"><?= $cat->name; ?></option>
                                    <?php }
                                    endforeach; ?>
                                </select>
                            </div>
                            <h5 class="mt-4">Search Radius (Km's)</h5>
                            <div class="rt-input-group mini mb-3 mb-md-0" style="width: 100%;">
                                <select class="rt-selectactive banner-select" name="from" style="width: 100%;">
                                    <option value="1" selected>1 Km's</option>
                                    <option value="3">2 Km's</option>
                                    <option value="3">3 Km's</option>
                                </select>
                            </div>
                            <h5 class="mt-4">Limit</h5>
                            <div class="rt-input-group mini mb-3 mb-md-0" style="width: 100%;">
                                <select class="rt-selectactive banner-select" name="from" style="width: 100%;">
                                    <option value="10" selected>10 Per page</option>
                                    <option value="20">20 Per page</option>
                                    <option value="30">30 Per page</option>
                                    <option value="40">40 Per page</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.rt-sidebar-group -->
            </div>
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">

            <?php foreach ($data['list']->data as $results) : ?>
                <div class="box-style__1 rt-mb-30">
                    <div class="hotel-inner-content row">
                        <div class="hotel-thumb col-md-3 mb-5 mb-md-0">
                            <div class="hotel-bg rtbgprefix-cover" style="
                      background-image: url(/assets/images/all-img/trip-1.jpg);
                    "></div>
                        </div>
                        <!-- /.hotel-thumb -->
                        <div class="hotel-text col-md-9">
                            <div class="top">
                                <h5>
                                    12 Day Beijing to Shanghai Discovery
                                    <span>
                                        <i class="icofont-star review"></i><i class="icofont-star review"></i>
                                        <i class="icofont-star review"></i><i class="icofont-star review"></i>
                                        <i class="icofont-star"></i></span>
                                </h5>
                                <p>Culture and lifestyle <span> - Leisure walking</span></p>
                            </div>
                            <!-- /.top -->
                            <div class="middle-text d-md-flex justify-content-md-between rt-mt-20">
                                <div class="left_column">
                                    <span class="badge rt-gradinet-badge pill rt-mr-10">4.3 <small>/5</small></span>
                                    <span class="primary-color">Excellent</span>
                                    <span class="f-size-12 text-878">( 86 Reviews )</span>
                                    <span class="text-555 f-size-16 d-block rt-mt-15"><span class="rt-mr-15"><i class="icofont-users-alt-5 primary-color rt-mr-4"></i>Family
                                            Trip</span>
                                        <span>
                                            <i class="icofont-user primary-color rt-mr-4"></i>Private
                                            Tour</span></span>
                                </div>
                                <!-- /.left- -->
                                <div class="right_column text-left text-md-right">
                                    <span class="d-block text-primary f-size-24 rt-semiblod title-font">$2707</span>
                                    <span class="d-block f-size-12 text-878">Per Person</span>
                                </div>
                                <!-- /.right -->
                            </div>
                            <!-- /.middle-text -->
                            <div class="footer-elements d-flex justify-content-between align-items-center align-items-end">
                                <div class="left">
                                    <a href="#">Customize & Request</a>
                                </div>
                                <!-- /.left -->
                                <div class="right">
                                    <a href="trip-2.html" class="rt-btn rt-gradient pill rt-sm3 text-uppercase">View
                                        Details</a>
                                </div>
                                <!-- /.right -->
                            </div>
                            <!-- /.footer-elements -->
                        </div>
                        <!-- /.hotel-text -->
                    </div>
                    <!-- /.hotel-inner-content -->
                </div>
            <?php endforeach; ?>


                <nav aria-label="Page navigation example">
                    <ul class="pagination rt-paganation justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="icofont-rounded-double-left"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="icofont-rounded-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">01</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="icofont-rounded-right"></i></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="icofont-rounded-double-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.col-lg-9 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>