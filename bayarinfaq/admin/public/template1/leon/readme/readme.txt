FILES
- index.html holds the entire content
- css/styles.css custom css styling
- js/scripts.js custom js code with settings for sliders, rotating text and more
- images folder contains all the images


PLUGINS
- Bootstrap https://getbootstrap.com/
- jQuery https://jquery.com/ 
- jQuery Easing https://jqueryui.com/easing/
- Magnific Popup https://dimsemenov.com/plugins/magnific-popup/
- Swiper https://swiperjs.com/
- Morphtext https://morphext.fyianlai.com/
- Font Awesome for icons https://fontawesome.com/


IMAGES
All images are included in the download package and can be reused in your projects. The ones mentioned below come for outside resources. The ones not mentioned come from inside resources. Either way you can use them for free in your project if you want.
- Mobile app UI kit used in screenshots: https://dribbble.com/shots/2398307-Phoenix-UI-Vol-1-for-iPhone-6-Free-PSD-Sketch
- Header section smartphone mockup in the Resources folder: header-smartphone.psd
- Description https://www.pexels.com/photo/woman-in-white-long-sleeved-shirt-holding-smartphone-sitting-on-tufted-sofa-920378/ 
- Details 1 section, Details 2 section and Download section smartphone mockup in the Resources folder: front-facing-smartphone.psd
- Details lightbox: https://www.pexels.com/photo/woman-in-white-t-shirt-holding-smartphone-in-front-of-laptop-914931/
- Features https://www.pexels.com/photo/marketing-coffee-camera-iphone-3568516/ 
- Features https://www.pexels.com/photo/marketing-camera-iphone-smartphone-3568517/
- Features https://www.pexels.com/photo/person-holding-a-phone-3098620/ 
- Video image https://www.pexels.com/photo/woman-in-white-top-holding-smartphone-lying-on-couch-920387/ 
- Details 1 https://www.pexels.com/photo/action-active-activity-adult-415188/ 
- Details 1 Lightbox: https://www.pexels.com/photo/woman-in-white-t-shirt-holding-smartphone-in-front-of-laptop-914931/
- Details 2 https://www.pexels.com/photo/person-pointing-at-black-and-gray-film-camera-near-macbook-pro-1051075/ 
- Testimonial authors: https://www.pexels.com/photo/photo-of-people-standing-near-blackboard-3184393/
- Article details image large: https://www.pexels.com/photo/photo-of-imac-near-macbook-1029757/ 
- Article details image small: https://www.pexels.com/photo/apple-office-internet-ipad-38544/


CREDITS
- Pixel 4 mockup by Asylab: https://www.asylab.com/  
- Phoenix Mobile App UI Kit by Adrian Chiran: https://dribbble.com/adrianchiran  
- Images by Pexels: https://www.pexels.com/


-----------------------------------------------------


Change Testimonials Slider Properties
- Open for editing js/scripts.js
- Find the section /* Card Slider - Swiper */
- And then fiddle with the settings using the documentation here: https://swiperjs.com/swiper-api


-----------------------------------------------------


Changing The Video Section Video
- Open for editing index.html
- Find the Video section
- Then find the following lines of code:

<!-- Video Preview -->
<div class="image-container">
  <div class="video-wrapper">
    <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
      <img class="img-fluid" src="images/video-preview.svg" alt="alternative">
      <span class="video-play-button">
        <span></span>
      </span>
    </a>
  </div> <!-- end of video-wrapper -->
</div> <!-- end of image-container -->
<!-- end of video preview -->

- And replace the video code fLCjQJCekTs with your new one which you can find on YouTube while using the Share option
- Save the file and refresh the browser window to see the changes
- To change the video preview image
- In the lines of code above replace video-preview.svg with your own image which you have previously saved in the images folder


-----------------------------------------------------


Change Statistics Numbers Values
- Open for editing index.html
- Find the section <!-- Statistics -->
- And then change the value of the data-count tag for each number


-----------------------------------------------------