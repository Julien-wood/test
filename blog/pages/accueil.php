<?php
            include "core/banner.php";
        ?>
<!--.welcome-area-->
<section class="welcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 pd-0">
                        <!-- Start single-item -->
                        <div class="item">
                            <div class="text">
                                <h2>01. donator</h2>
                                <p>Pellentesque eu malesuada nisi as<br>
                                    et condimen tum lorem.</p>
                                <a href="#">Soutenir</a>
                            </div>  
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pd-0">
                        <!-- Start single-item -->
                        <div class="item current">
                            <div class="text">
                                <h2>02. volunteer</h2>
                                <p>Pellentesque eu malesuada nisi as<br>
                                    et condimen tum lorem.</p>
                                <a href="#">Volontaire</a>
                            </div>  
                        </div>
                        <!-- End single-item -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 pd-0">
                        <!-- Start single-item -->
                        <div class="item">
                            <div class="text">
                                <h2>03. fundraise</h2>
                                <p>Pellentesque eu malesuada nisi as<br>
                                    et condimen tum lorem.</p>
                                <a href="#">Soutenir</a>
                            </div>  
                        </div>
                        <!-- End single-item -->
                    </div>
                </div> 
            </div>
        </section>
        <!--/welcome-area-->

        <!--Start progress-section -->
        <section class="progress-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <!-- Start single-item -->
                        <div class="single-item">
                            <div class="text">
                                <h5>help</h5>
                                <h2>rohingya child</h2>
                                <h4>for food!</h4>
                                <p>Pellentesque eu malsuada nisi has
                                    ellus eget et condmen tumg. Phase
                                    vitae posuere nisiat.</p>
                                <h6>DOnation Goal</h6>
                                <h3>382,542</h3>
                                <a href="#" class="btn-1">Donate Now</a>
                            </div>
                            <div class="circular-graph">
                                <div class="inner-box">
                                    <div class="graph-outer">
                                        <input type="text" class="dial" data-fgColor="#fb5e1c" data-bgColor="#EBEBEB" data-width="200" data-height="200" data-linecap=""  value="87">
                                        <span class="value">87</span>
                                        <p>completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Eind single-item -->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <!-- video-preview start -->
                        <div class="video-preview" style="background-image:url(design/images/blog/bg8.jpg);">
                            <ul class="v-container text-center">
                                <li>
                                    <a href="https://www.youtube.com/watch?v=rP2x7nrrDc4" class="html5lightbox"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/watch?v=rP2x7nrrDc4" class="html5lightbox" id="watch-video"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- video-preview end -->
                    </div>
                </div>
            </div>
</section>
<!--.blog-seciton-->

<section class="blog-seciton">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Les dernières<span> articles</span></h2>
                </div>
                <div class="row">
                <?php

                    $posts = get_posts();
                    foreach($posts as $post){
                ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Start single-item -->
                        <div class="blog-item">
                            <div class="img-holder">
                               <figure><a href="single-blog.html"><img src="design/images/blog/<?= $post->image ?>" alt="<?= $post->title ?>"></a></figure>
                            </div>
                            <div class="text">
                                <h4><a href="single-blog.html"><?= $post->title ?></a></h4>
                                <p><?= substr(nl2br($post->content),0,100); ?>...</p>
                                <h5><i class="fa fa-user" aria-hidden="true"></i><span><?= $post->name ?></span></h5>
                                <h5><i class="fa fa-calendar" aria-hidden="true"></i>Le : <span><?= date("d/m/Y à H:i",strtotime($post->date)); ?></span></h5>
                                <a href="index.php?page=post&id=<?= $post->id ?>"class="dont-btn">Lire l'article</a>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                <?php
                }

                ?>
                </div>
            </div>
</section>
        <!--/blog-seciton-->