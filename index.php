<?php get_header(); ?>
    <section class="hero">
        <p>Your creativity journey starts here.</p>
    </section>
    
    <section id="section-about">
       <i class="fab fa-audible logo-icon"></i>
        <p id="about-text">Digital Labs is a digital experience agency offering creative, development and conversion rate optimisation services that deliver high performing digital user experiences.</p>
    </section>
    
    <section id="section-what-we-do">
        <h1>What we do</h1>
        
        <?php include 'what-we-do.php' ?>
    </section>
<footer id="footer">
   <div id="partners-section">
       <h1>Who we work with</h1>
       <div id="partners-list">
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/ctm.png') ?>" alt="compare">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/sunday.png') ?>" alt="sunday times" id="sunday_times">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/thomas.png') ?>" alt="thomas cook">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/wgsn.svg') ?>" alt="wgsn">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/beagle.png') ?>" alt="beagle" id="beagle">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/affinion-logo.png') ?>" alt="affinion">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/tes.svg') ?>" alt="tes">
           </div>
           <div class="client">
               <img src="<?php echo get_theme_file_uri('/images/lottoland.png') ?>" alt="lottoland">
           </div>
       </div>
   </div>
   <div class="footer-text">
       <h1 class="footer-color">Say hello to digital labs</h1>
        <p id="call-text">Give us a call to discuss any project or to arrange a time to pop in to chat.</p>
        <p class="footer-color phone-number">020 3744 5525</p>
        <p class="footer-color email">hello@digital-labs.co.uk</p>
        <p id="address">55 Charlotte Road, Shoreditch, London, EC2A 3QF</p>
        <div id="footer-icons">
            <i class="fab fa-twitter footer-icon"></i>
            <i class="fab fa-linkedin-in footer-icon"></i>
        </div>
        <div id="footer-links">
            <a href="#">Creative</a>
            <a href="#">Development</a>
            <a href="#">Convertion Rate Optimisation</a>
            <a href="#">Work at Digital Labs</a>
            <a href="#">Get in Touch</a>
            <a href="#">Sitemap</a>
        </div>
        <p id="copyright">Copyright &copy; <?php echo date("Y") ?> Digital Labs</p>
        <p id="privacy">Using this website assumes that you consent to the use of cookies. For information on cookies used and how you can stop them please view our <span>Privacy & Cookie policy</span></p>
   </div>
</footer>

</body>
</html>

