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

    <div class="masonry-portfolio" id="masonry">
        <div class="container-fluid">
            <div class="masonry">
                <div class="item first-item col-md-4 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_1.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>Succulents <em>chambray</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_1.png">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_2.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>Biodiesel <em>squid</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_2.png">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_3.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>raclette <em>taxidermy</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_3.png">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_5.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>freegan <em>aesthetic</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_4.png">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_6.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>taiyaki <em>vegan</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_5.png">
                      </div>
                  </div></a>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_9.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>disrupt <em>street</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_6.png">
                      </div>
                  </div></a>
                </div>
                <div class="item last-item col-md-8 col-sm-6 col-xs-12">
                  <a href="img/big_portfolio_item_4.png" data-lightbox="image-1"><div class="thumb">
                      <div class="hover-effect">
                          <div class="hover-content">
                              <h1>humblebrag <em>brunch</em></h1>
                              <p>Awesome Subtittle Goes Here</p>
                          </div>
                      </div>
                      <div class="image">
                          <img src="img/masonry_item_7.png">
                      </div>
                  </div></a>
                </div>
            </div>
        </div>
    </div>

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