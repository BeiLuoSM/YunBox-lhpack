<?php //Template Name:contact
get_header(); ?>
<div class="about-child-banner">
    <img src="http://lhpack.hk1i1.yunclever.com/wp-content/themes/kadima/images/contact-1.png" class="img-responsive">
</div>
<?php get_template_part('breadcrums'); ?>
<div class="container contact-child">
    <div class="row kadima_blog_wrapper">
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputSubject">Subject</label>
                    <input type="text" class="form-control" id="exampleInputSubject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage">Message</label>
                    <textarea class="form-control" rows="6"></textarea>
                </div>
                <button type="submit" class="btn btn-default">SEND MESSAGE</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="col-xs-6">
                <span class="fa fa-envelope"></span>
                <p>linghai@vip.163.com</p>
            </div>
            <div class="col-xs-6">
                <span class="fa fa-phone"></span>
                <p>86-754-88686622</p>
            </div>
            <div class="col-md-12">
                <span class="fa fa-map-marker"></span>
                <p>Qishan North Industrial Area, Chaoshan Road, Shantou, China</p>
            </div>
        </div>
    </div>
</div>
<?php the_content( __( 'Read More' , 'kadima' ) ); ?>

<?php get_footer(); ?>