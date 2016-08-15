# cynthia

Cynthia Hodgson Music - Violin and piano performance and accompaniment in Woodstock, IL

This is the first site I built. Cynthia is an in-law of mine, a talented multi-instrumentalist from Woodstock, IL. She plays weddings and other events on the weekends. This mobile-responsive site is designed to help her increase bookings. For this project, I felt challenged by the lack of media, (I feel recordings or videos are necessary to promote musical services,) but confident that I achieved her desired art deco look. Built using HTML5, CSS3, JavaScript, Bootstrap, and PHP. And GIMP.


## Project Review
Hi Kate! Overall I think you've done a wonderful job designing a custom site for your client - one that is specifically tailored to her business, tastes, vision, needs and goals. I'm curious as to what Cynthia's feedback was. The bulk of my feedback and suggestions are regarding the code along with some suggestions for refinements to the UI and design.

### Code Edits &amp; Suggestions
- There's a `.idea` directory in the repository. For the sake of best practices, get that outta there!
- jQuery has been added twice in the HTML &lt;head&gt; tag. Just keep version 2.2.3
- I would remove all the `xmlns` attributes from the opening &lt;html&gt; tag. These may have been auto-generated by PhpStorm. They are for HTML 4/XHTML 1.0. You're using HTML5.
- Having spaces in the image file names is iffy - see lines 73, 251
- Change the `alt` attribute on her navbar brand image to be "Cynthia Hodgson Music". Update all alt attributes for SEO.
- I see a mix of Bootstrap's `.container` and `container-fluid` in your code. I would perhaps stick to one for a more cohesive layout.
- It looks like Google reCAPTCHA is now on version 1.2 now, so it makes sense that there were some changes to that. In our class we were using 1.1. (I still have yet to go through our documentation and update the examples.)
- `id="contact"` has been used twice - see lines 266, 267

### Design &amp; UI Suggestions
I think some minor adjustments to the design would go a long way to adding the final polish to the site. I've made some suggestions below.
- Consider adjusting the margins and/or padding around each content section for consistency. I see some variance between sections. Consistency here will improve the look and feel of the product as a whole.  
- Consider making the drop shadow beneath the header transparent. Use rgba.
- Regarding having problems with choppy parallax using stellar.js - Skyler and I have been experimenting with CSS-driven parallax that is insanely smooth. I don't have any examples up yet (added to the never-ending todo list!) - but I encourage you to do some research on this is you want to include this in the site. Here's one decent article I found here: [Pure CSS Parallax](http://keithclark.co.uk/articles/pure-css-parallax-websites/)
- I would remove the additional padding on the class `.text-justify`. It's shifting the text in a strange way on mobile - and I don't that it's really necessary here.  
- This is super minor - but I would also consider darkening the text a bit for some added contrast. I would aim closer to full black. As I was looking at the site for a while, it seemed a bit "washed out", and I felt that the text was fading away into the background a bit. I would also play around a bit with color and contrast to add a bit more visual impact - it can be small and subtle.
- The cursive script is pretty, but also pretty hard to read at smaller sizes. This is purely my opinion, but I think the headings could be bumped up in size a little. I think the quotes are a bit difficult to make out at their current size in that typeface too - I'd play around with it a little. Either a different size, or different font. Maybe a background... something to help the legibility. I would also not use it for your copyright text.
- I would adjust the color of the nav links on hover - the blue doesn't seem to go with the overall color scheme.
- Some custom jQuery can make the link jumps smoother! Take a look at [jQuery ScrollTo](https://github.com/flesler/jquery.scrollTo)
- Many of the images are too big and will load slow, especially on mobile over 3G. Try and get the images under 500kb using Photoshop or GIMP.
  - cynthia-home-background.jpg (6MB)
  - cynthia-home-picture.jpg (3.4MB)
  - cynthia-rates-and-terms-background.jpg (2.1MB)
  - cynthia-repertoire-background.jpg (4.9MB)
  - cynthia-testimonials-background.jpg (4.2MB)
  - cynthia-testimonials-picture.jpg (3MB)
