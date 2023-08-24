<!doctype html>
<html lang="en">
<?php include("head_links.php"); ?>


<body>
<!-- navbar start -->
<?php
  $page = 'index';
  include 'navbar.php';

  ?>

<style>
   /* Banner style start for all 3 views */
@media only screen and (max-width: 767px) {
    .carousel-inner .carousel-item img {
        height: 200px;
        max-width: 100%;
    }

    .carousel-caption h5 {
        font-size: 18px;
        display: flex;
        justify-content: center;
    }

    .carousel-caption p {
        font-size: 18px;
        display: inline;
    }
}

.carousel-caption {
    display: grid;
    place-items: center;
    height: 100%;
    text-align: center;
}

.carousel-caption h5 {
    text-align: center;
    font-size: 35px;
    letter-spacing: 15px;
    max-width: 80%;
    margin: 0;
    padding-top: 25px;
    color: white;
    font-family: 'Montserrat', sans-serif;
}

/* Separate h1 and p in carousel-caption */
.carousel-caption h5,
.carousel-caption p {
    display: block;
    margin: 0;
    padding: 5px; /* Add padding for spacing */
}

.carousel-caption h5{
  margin-top:50px;
}
.carousel-caption p {
    margin-top: -50px;
}

/* Additional styles for p element */
.carousel-caption p {
    font-size: 13px;
}

/* Banner style start end for all 3 views */
/* .banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(5, 5, 5, 0.5); 
} */

.carousel-item img {
    width: 1600px;
    height: 382px;
    object-fit: cover;
}
@media only screen and (max-width: 500px) {
    .carousel-caption {
        text-align: left;
    }

    .carousel-caption h5 {
        font-size: 20px;
        letter-spacing:10px;
        margin-bottom:30px;
        
    }

    .carousel-caption p {
        font-size: 9px;
    }
}


.terms-container {
  margin: 20px auto;
  padding: 20px;
  /* border: 1px solid #ddd; */
  background-color: white;
  max-width: 1100px;
}

.terms-container h2 {
  font-size: 18px;
  margin-bottom: 10px;
}

.terms-container p {
  /* font-size: 16px; */
  margin-bottom: 10px;
  font-family: montserrat;
  text-align: justify;
  color: black;
}
#text{
    color:white;
    text-decoration: none;
}
/* You can continue adding more styles as needed */
</style>


<!-- Banner Start -->


<div class="container-fluid p-0">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="banner-overlay"></div>
            <img src="images/policy_banner.jpg" class="d-block w-100" alt="..." style="image-rendering: auto;">
            <div class="carousel-caption">
                <h5>TERMS OF SERVICES </h5>
            
                <p><a id="text" href="index.php">Home</a> / TERMS OF SERVICES</p>
            </div>
        </div>
    </div>
</div>

<!-- Banner End -->


<div class="terms-container">
<h2><strong>OVERVIEW</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">This website is operated by Name Craft. Throughout the site, the terms “we”, “us” and “our” refer to Name Craft. Name Craft offers this website, including all information, tools and Services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any Services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and Services to you.</span></p>

<h2><strong>SECTION 1 - ONLINE STORE TERMS</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.
You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You must not transmit any worms or viruses or any code of a destructive nature.
A breach or violation of any of the Terms will result in an immediate termination of your Services.</span></p>
<strong>SECTION 2 - GENERAL CONDITIONS</strong>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We reserve the right to refuse Service to anyone for any reason at any time.
You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the Service is provided, without express written permission by us.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.</span></p>

<h2><strong>SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.</span></p>

<h2><strong>SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Prices for our products are subject to change without notice.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.

We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.
<h2><strong>SECTION 5 - PRODUCTS OR SERVICES </strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Certain products or Services may be available exclusively online through the website. These products or Services may have limited quantities and are subject to return or exchange only according to our Refund Policy</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor's display of any color will be accurate.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or Services that we offer. All descriptions of products or product pricing are subject to change at anytime without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. Any offer for any product or Service made on this site is void where prohibited.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We do not warrant that the quality of any products, Services, information, or other material purchased or obtained by you will meet your expectations, or that any errors in the Service will be corrected.</span></p>

<h2><strong>SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e‑mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">For more details, please review our Refund Policy</span></p>

<h2><strong>SECTION 7 - OPTIONAL TOOLS</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We may provide you with access to third-party tools over which we neither monitor nor have any control nor input.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You acknowledge and agree that we provide access to such tools ”as is” and “as available” without any warranties, representations or conditions of any kind and without any endorsement. We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.</span></p>
Any use by you of the optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We may also, in the future, offer new Services and/or features through the website (including the release of new tools and resources). Such new features and/or Services shall also be subject to these Terms of Service.</span></p>

<h2><strong>SECTION 8 - THIRD-PARTY LINKS</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Certain content, products and Services available via our Service may include materials from third-parties.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Third-party links on this site may direct you to third-party websites that are not affiliated with us. We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or Services of third-parties.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We are not liable for any harm or damages related to the purchase or use of goods, Services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party's policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.</span></p>

<h2><strong>SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">If, at our request, you send certain specific submissions (for example contest entries) or without a request from us, you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, 'comments'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion to be unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e‑mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.</span></p>

<h2><strong>SECTION 10 - PERSONAL INFORMATION</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Your submission of personal information through the store is governed by our Privacy Policy.</span></p>

<h2><strong>SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).
We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.</span></p>

<h2><strong>SECTION 12 - PROHIBITED USES</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.</span></p>

<h2><strong>SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We do not guarantee, represent or warrant that your use of our Service will be uninterrupted, timely, secure or error-free.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">We do not warrant that the results that may be obtained from the use of the Service will be accurate or reliable.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You agree that from time to time we may remove the Service for indefinite periods of time or cancel the Service at any time, without notice to you.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You expressly agree that your use of, or inability to use, the Service is at your sole risk. The Service and all products and Services delivered to you through the Service are (except as expressly stated by us) provided 'as is' and 'as available' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">In no case shall Name Craft, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, Service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the Service or any products procured using the Service, or for any other claim related in any way to your use of the Service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the Service or any content (or product) posted, transmitted, or otherwise made available via the Service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.</span></p>

<h2><strong>SECTION 14 - INDEMNIFICATION</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You agree to indemnify, defend and hold harmless Name Craft and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, Service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.</span></p>

<h2><strong>SECTION 15 - SEVERABILITY</strong></h2>
In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.
<h2><strong>SECTION 16 - TERMINATION</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes.</span></p>
&nbsp;

These Terms of Service are effective unless and until terminated by either you or us. You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site.
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).</span></p>

<h2><strong>SECTION 17 - ENTIRE AGREEMENT</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">These Terms of Service and any policies or operating rules posted by us on this site or in respect to the Service constitutes the entire agreement and understanding between you and us and governs your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service).</span></p>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.</span></p>

<h2><strong>SECTION 18 - GOVERNING LAW</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of India.</span></p>

<h2><strong>SECTION 19 - CHANGES TO TERMS OF SERVICE</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">You can review the most current version of the Terms of Service at any time at this page.
We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.</span></p>

<h2><strong>SECTION 20 - CONTACT INFORMATION</strong></h2>
<p style="color: #000000; font-size: 16px;"><span style="color: #000000;">Questions about the Terms of Service should be sent to us at contact.namecraft@gmail.com.
Our contact information is posted below:
contact.namecraft@gmail.com
No. 664, 5th Cross
Koramangala 4th Block
(Near Maharaja Signal)
Bangalore - 560034
9845012914
[INSERT BUSINESS REGISTRATION NUMBER]
[INSERT VAT NUMBER]</span></p>


</div>



<?php include("footer.php");?>

</body>

</html>