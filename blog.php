<?php
session_start();

// Проверяем, существует ли сессия с именем пользователя
if (!isset($_SESSION['username'])) {
    // Если сессия с именем пользователя не существует, перенаправляем пользователя на страницу входа
    header('Location: php/login.php');
    exit(); // После перенаправления следует завершить выполнение скрипта
}
?>
<?php

  include('partials/header.php');
  
?> 


    <div class="blog-entries">
        <div class="container">
            <div class="col-md-9">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="blog-post">
                                <img src="img/blog_post_1.png" alt="">
                                <div class="text-content">
                                    <span><a href="#">Admin</a> / <a href="#">16 September 2023</a> / <a href="#">Branding</a></span>
                                    <h2>Duis mollis orci vel lectus</h2>
                                    <p>Proin at augue quam. In laoreet arcu id lacus fringilla auctor. Etiam rutrum aliquet nisl, eu fermentum elit fermentum sed. Donec finibus urna sed sollicitudin egestas. In hac habitasse platea dictumst. 
                                    <br><br>Phasellus purus turpis, porta non lectus vitae, laoreet blandit diam. Suspendisse elementum ligula at purus gravida, vel malesuada dolor accumsan. Morbi finibus dapibus ex, ut finibus felis.</p>
                                    <div class="simple-btn">
                                        <a href="single-post.html">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-post">
                                <img src="img/blog_post_2.png" alt="">
                                <div class="text-content">
                                    <span><a href="#">Admin</a> / <a href="#">28 August 2023</a> / <a href="#">Lifestyle</a></span>
                                    <h2>Integer scelerisque odio elit</h2>
                                    <p>Aliquam erat volutpat. Donec condimentum ante nec sapien sodales, ut molestie mauris scelerisque. Maecenas in turpis sed odio pretium tempor. In libero tellus, maximus in accumsan id, posuere non urna. 
                                    <br><br>Fusce ex elit, congue vitae interdum et, sodales vitae purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque id egestas nibh. Curabitur convallis cursus pharetra. Curabitur non ligula id lacus pulvinar sollicitudin. Etiam quis tempus lectus, sed iaculis ex.</p>
                                    <div class="simple-btn">
                                        <a href="single-post.html">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="blog-post">
                                <img src="img/blog_post_3.png" alt="">
                                <div class="text-content">
                                    <span><a href="#">Admin</a> / <a href="#">31 July 2018</a> / <a href="#">Work Stuff</a></span>
                                    <h2>Nulla condimentum at dui eu</h2>
                                    <p>Cras ultrices ex sodales, vestibulum leo quis, volutpat mauris. In pretium vehicula dolor, sit amet ornare orci placerat sit amet. Nam non dolor sagittis, dignissim purus at, fringilla lacus. In aliquet, sapien ut lobortis molestie, lorem diam commodo leo, vitae eleifend diam justo ac velit.
                                    <br><br>ras felis purus, efficitur vel luctus a, ultrices vitae diam. Maecenas maximus vehicula aliquet. Donec scelerisque, diam id dapibus ultrices, tortor tellus eleifend arcu, maximus iaculis mi elit sit amet odio. Donec at mauris sit amet velit tempus semper.</p>
                                    <div class="simple-btn">
                                        <a href="single-post.html">continue reading</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="page-number">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="side-bar">
                    <div class="search">
                        <fieldset>
                            <input name="search" type="text" class="form-control" id="search" placeholder="Search..." required="">
                        </fieldset>
                    </div>
                    <div class="archives">
                        <div class="sidebar-heding">
                            <h2>Archives</h2>
                        </div>
                        <ul>
                            <li><a href="#">> 2023 September (4)</a></li>
                            <li><a href="#">> 2023 August (16)</a></li>
                            <li><a href="#">> 2023 July (5)</a></li>
                            <li><a href="#">> 2023 May (3)</a></li>
                            <li><a href="#">> 2023 February (27)</a></li>
                            <li><a href="#">> 2023 December (18)</a></li>
                            <li><a href="#">> 2023 November (12)</a></li>
                        </ul>
                    </div>
                    <div class="recent-posts">
                        <div class="sidebar-heding">
                            <h2>Recent Posts</h2>
                        </div>
                        <ul>
                            <li><a href="single-post.html">
                                <img src="img/recent_post_1.png" alt="Recent Post 1">
                                <div class="text">
                                    <h6>Duis mollis orci</h6>
                                    <span>15 September 2018</span>
                                </div>
                            </li></a>
                            <li><a href="single-post.html">
                                <img src="img/recent_post_2.png" alt="Recent Post 2">
                                <div class="text">
                                    <h6>Etiam quis tem</h6>
                                    <span>10 August 2018</span>
                                </div>
                            </li></a>
                            <li><a href="single-post.html">
                                <img src="img/recent_post_3.png" alt="Recent Post 3">
                                <div class="text">
                                    <h6>Proin at augue</h6>
                                    <span>16 July 2018</span>
                                </div>
                            </li></a>
                        </ul>
                    </div>
                    <div class="categories">
                        <div class="sidebar-heding">
                            <h2>Categories</h2>
                        </div>
                        <ul>
                            <li><a href="#">> Lifestyle (7)</a></li>
                            <li><a href="#">> Branding (9)</a></li>
                            <li><a href="#">> Nature (14)</a></li>
                            <li><a href="#">> Work Stuff (6)</a></li>
                            <li><a href="#">> Science (5)</a></li>
                        </ul>
                    </div>
                    <div class="latest-gallery">
                        <div class="sidebar-heding">
                            <h2>Latest Gallery</h2>
                        </div>
                        <ul>
                            <li><a href="#"></a><img src="img/latest_gallery_1.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_2.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_3.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_4.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_5.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_6.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_7.png" alt=""></a></li>
                            <li><a href="#"></a><img src="img/latest_gallery_8.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <footer>
                    <div class="container-fluid">
                        <div class="col-md-12">
                            <p>Copyright &copy; 2018 Company HighWay 
                
                | Designed by Sebastian Kychatyi</p>
                        </div>
                    </div>
                </footer>


      <!-- Modal button -->
    <div class="popup-icon">
      <button id="modBtn" class="modal-btn"><img src="img/contact-icon.png" alt=""></button>
    </div>  

    <!-- Modal -->
    <div id="modal" class="modal">
      <!-- Modal Content -->
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h3 class="header-title">Say hello to <em>Highway</em></h3>
          <div class="close-btn"><img src="img/close_contact.png" alt=""></div>    
        </div>
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="col-md-6 col-md-offset-3">
            <form id="contact" action="" method="post">
                <div class="row">
                    <div class="col-md-12">
                      <fieldset>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                      </fieldset>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php

include('partials/section.php');

    ?> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>
</html>