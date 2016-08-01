<?php
    include 'includes/header.html';
    include 'includes/nav.html';
?>
<div class="container-fluid">
    <div class="row intro">
        <div class="content">
            <h2>PSL Paving Services</h2>
            <p>Specialist cleaning and sealing services</p>
            <a class="link view-1" role="button" href="#gallery">View Gallery</a>
            <a class="link view-2" role="button" href="#contact">Contact Us</a>
            <a class="chevron" role="button" href="#overview"><i class="fa fa-chevron-down" aria-hidden="true"></i></a>

        </div>
    </div>
    <div class="row overview" id="overview">
        <div class="col-md-10 col-md-offset-1">
        <h2>Welcome to PSL Paving Services</h2>
        <p>PSL Paving is a family run business offering a comprehensive range of repair and restoration services on a wide variety of paving materials for any application. We can provide solutions for any paved area whether it be a driveway, patio, walkway courtyard, or car park and we can work with a wide range of materials ranging from standard block paving through to concrete or tarmac. We offer a reliable, friendly and personal service and we operate throughout the whole of Nottinghamshire and the surrounding area.</p>
            <div class="col-sm-6 col-md-3 service">
                <img src="images/1.jpg" class="img-responsive center-block" alt="cleaning and restoration">
                <h3>Cleaning & Restoration</h3>
                <p>We offer specialised <a class="intro-1" href="#services" onclick="restTab()">cleaning and restoration</a> services which enable us to restore an old or badly stained area to its former glory removing weeds, moss, debris and stains along the way.</p>
            </div>
            <div class="col-sm-6 col-md-3 service">
                <img src="images/2.jpg" class="img-responsive center-block" alt="repairs and alterations">
                <h3>Repairs and Alterations</h3>
                <p>You may have a paved patio, drive or driveway which is damaged or in need of resizing, extending or some other form of <a class="intro-2" role="button" href="#services" onclick="repairsTab()">alteration</a>, we are able to carry out alterations and repairs on all types of paving.</p>
            </div>
            <div class="col-sm-6 col-md-3 service">
                <img src="images/3.jpg" class="img-responsive center-block" alt="clean only service">
                <h3>Clean Only Service</h3>
                <p>You may not need extensive restoration or repair services, you may just wish to keep your patio, drive or driveway as <a class="intro-3" role="button" href="#services" onclick="cleanTab()">clean</a> as it was the day it was installed. For you there is our <a class="intro-3" role="button" href="#services" onclick="cleanTab()">clean only</a> service.</p>
            </div>
            <div class="col-sm-6 col-md-3 service">
                <img src="images/4.jpg" class="img-responsive center-block" alt="new installations">
                <h3>New Installations</h3>
                <p>We are able to <a class="intro-4" role="button" href="#services" onclick="installationTab()">install new paving</a> for any use and in the same wide range of materials. As with all of our operations the install service is totally personalised and the work will be carried out by the business properietor.</p>
            </div>
        </div>
    </div>
    <div class="row services" id="services">
        <div class="col-md-8 col-md-offset-2">
            <h2>Our Services</h2>
            <ul class="nav nav-pills">
                <li class="tab-1 active"><a data-toggle="tab" href="#restoration">Full Restoration</a></li>
                <li class="tab-2"><a data-toggle="tab" href="#clean">Clean Only</a></li>
                <li class="tab-3"><a data-toggle="tab" href="#repairs">Repairs &amp; Alterations</a></li>
                <li class="tab-4"><a data-toggle="tab" href="#installations">New Installations</a></li>
            </ul>
            <div class="tab-content">
                <div id="restoration" class="tab-pane fade in active small-gutter">
                    <h3>PSL Paving Restoration Nottingham</h3>
                    <p>Our services provide solutions for virtually any block paving or tarmacadam restoration problem and in addition to making your refurbished area look good we also extend its life and resistance to damage by weather or normal wear and tear.</p>
                    <h4>Block Paving</h4>
                    <p>We use a proven process for refurbishing and restoring block paving.</p>
                    <ol>
                        <li>The surface is cleaned and prepared using specialist equipment.</li>
                        <li>Part of the sand is cleared from the joints to remove weed seeds and moss spores.</li>
                        <li>The joints are re-sanded using sterile kiln-dried sand.</li>
                        <li>Two coats of specially formulated resin seal is applied, the first coat is rolled by hand so the seal can be pressed into each joint for the maximum hardening of the sand joints.</li>
                        <li>The second coat is sprayed to give the whole area an even finish thus giving the drive the best protection from further weed growth and protecting the sub base from erosion.</li>
                    </ol>
                    <p>The images below give a step-by-step breakdown of the block paving restoration process, hover on them to read the descriptions:</p>
                    <div class="clearfix">
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">Even a drive as severe as this can be restored.</span>
                            </div>
                            <img src="images/5.png" class="img-responsive img-thumbnail" width="250" height="238" alt="Even a drive as severe as this can be restored">
                        </div>
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">Surface preparation is a vital part of the process.</span>
                            </div>
                            <img src="images/6.png" class="img-responsive img-thumbnail" width="250" height="238" alt="Even a drive as severe as this can be restored">
                        </div>
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">Re-sanding the joints for stability and protection.</span>
                            </div>
                            <img src="images/7.png" class="img-responsive img-thumbnail" width="250" height="238" alt="Re-sanding the joints for stability and protection">
                        </div>
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">The natural colours are enhanced and all joints are stabilised to increase strength across the whole structure.</span>
                            </div>
                            <img src="images/8.png" class="img-responsive img-thumbnail" width="250" height="238" alt="On completion">
                        </div>
                    </div>
                    <h4>Tarmacadam</h4>
                    <p>Tarmac drives and other areas can be made to look like new and stay looking good by being more resistant to fading and stains. We have specialist tools and equipment to facilitate restoration and repair in one process.</p>
                    <ol>
                        <li>The surface is thoroughly cleaned.</li>
                        <li>Damaged areas are cut and replaced with new bag tarmac.</li>
                        <li>Surface stains are treated and weeds removed.</li>
                        <li>A specially formulated Bitumenous Seal is applied by a pressurised spray or roller to give uniform coating.</li>
                    </ol>
                    <p>This process restores the tarmac to its original colour and re-seals the surface to prevent moisture ingress and the resultant deterioration.</p>
                    <div class="clearfix">
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay-2">
                                <span class="caption">The tarmac drive above is badly stained and had damaged areas.</span>
                            </div>
                            <img src="images/9.png" class="img-responsive img-thumbnail" width="250" height="216" alt="This tarmac drive above is badly stained and had damaged areas">
                        </div>
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay-2">
                                <span class="caption">The same drive after cleaning and re-treating.</span>
                            </div>
                            <img src="images/10.png" class="img-responsive img-thumbnail" width="250" height="216" alt="The same drive after cleaning and re-treating">
                        </div>
                    </div>
                    <h4>Imprinted Concrete</h4>
                    <p>As with all of our processes we have a specialist solution to the problems associated with imprinted concrete to enable us to refurbish your drive and protect it for the future.</p>
                    <ol>
                        <li>The surface is thoroughly prepared using specialist cleaning and degreasing equipment.</li>
                        <li>Tyre marks, oil and grease stains are removed.</li>
                        <li>Debris is removed.</li>
                        <li>Damaged areas can often be repaired using state of the art repair resins.</li>
                        <li>Surfaces can be tinted to meet your requirements.</li>
                        <li>Badly degraded areas are treated with heavy application of High Solids Resin.</li>
                        <li>A coat of a specially developed maintenance mix are applied.</li>
                        <li>The surface is then finished with a Matt or Gloss finish and a low slip finish where required.</li>
                    </ol>
                    <p>Imprinted Concrete can also be restored to a superb finish and protected for the future. Imprinted concrete restoration:</p>
                    <div class="clearfix">
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">An imprinted concrete drive in need of our TLC.</span>
                            </div>
                            <img src="images/11.png" class="img-responsive img-thumbnail" width="250" height="216" alt="imprinted-1"/>
                        </div>
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">Surface cleaning, weed removal and preparation for sealing and finishing.</span>
                            </div>
                            <img src="images/12.png" class="img-responsive img-thumbnail" width="250" height="216" alt="imprinted-2"/>
                        </div>
                        <div class="col-sm-4 col-md-3 step">
                            <div class="overlay">
                                <span class="caption">A finished drive looking like new after our treatment.</span>
                            </div>
                            <img src="images/13.png" class="img-responsive img-thumbnail" width="250" height="216" alt="imprinted-2"/>
                        </div>
                    </div>
                    <!--<p class="first">The images below show some typical scenarios and the result of restorations.</p>
                    <div class="clearfix">
                        <div class="col-sm-6 col-md-3">
                            <img src="images/before-1.png" class="img-responsive img-thumbnail" width="225" height="169" alt="before-1"/>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="images/after-1.png" class="img-responsive img-thumbnail" width="225" height="169" alt="after-1"/>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="images/before-2.png" class="img-responsive img-thumbnail" width="225" height="169" alt="before-2"/>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="images/after-2.png" class="img-responsive img-thumbnail" width="225" height="169" alt="after-2"/>
                        </div>
                    </div>-->
                </div>
                <div id="clean" class="tab-pane fade small-gutter">
                       <h3>PSL Paving Cleaning Nottingham</h3>
                       <p>PSL Paving offers a clean only service which means you can have your drive or patio professionally cleaned to maintain its look and keep its surface protection in top shape. Cleaning with a power washer can damage the surface of your paving and leave it susceptible to damage from water ingress and more liable to become clogged with weeds and algae bewtween the joints due to the sterilised sand being washed away.</p>
                       <p>We use a specialist flat surface cleaner which does not damage the structure of the paving. We can also clean walls and other garden structures as a part of total cleaning package. The pictures below show a before and after comparison to demonstrate how effective the cleaning services can be:</p>
                       <div class="clearfix">
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                <span class="caption">Before we cleaned the paving.</span>
                               </div>
                               <img src="images/before-3.png" class="img-responsive img-thumbnail" width="250" height="188" alt="before-3"/>
                           </div>
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                   <span class="caption">After we cleaned the paving.</span>
                               </div>
                               <img src="images/after-3.png" class="img-responsive img-thumbnail" width="250" height="188" alt="after-3"/>
                           </div>
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                   <span class="caption">Power washing damages paving, why not let us clean it professionally to maintain the look and life of your drive or patio.</span>
                               </div>
                               <img src="images/18.png" class="img-responsive img-thumbnail" width="250" height="188" alt="before-3"/>
                           </div>
                       </div>
                   </div>
                   <div id="repairs" class="tab-pane fade small-gutter">
                       <h3>PSL Paving Repairs and Alterations Nottingham</h3>
                       <p>In addition to our <a class="repairs-1" data-toggle="tab" href="#installations">new drive or patio installation</a> services in Nottingham, PSL Paving are able to carry out repairs or alterations to existing drives, paths, patios, courtyards and other slabbed or paved areas.</p>
                       <p>We are able to extend or reshape existing areas and <a class="repairs-2" data-toggle="tab" href="#restoration">refurbish</a> as we go to give a look of continuity, subject of course to the availability of the same materials that were used to create the original.</p>
                       <p>If your existing drive or patio has simply fallen into disrepair through age or lack of maintenance it is possible for us to repair or simply <a class="repairs-3" data-toggle="tab" href="#restoration">refurbish</a> to bring back that good as new look.</p>
                       <p>We are also able to provide practical solutions to drainage problems such as replacing or repairing existing linear drains or installing new ones. Please call the number below for advice.</p>
                       <p>Before and after our alterations experts got to work:</p>
                       <div class="clearfix">
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                   <span class="caption">Before we altered the paving.</span>
                               </div>
                               <img src="images/19.png" class="img-responsive img-thumbnail" width="250" height="188" alt="before-4"/>
                           </div>
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                   <span class="caption">After we altered the paving.</span>
                               </div>
                               <img src="images/20.png" class="img-responsive img-thumbnail" width="250" height="188" alt="after-4"/>
                           </div>
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                   <span class="caption">Before we altered the paving.</span>
                               </div>
                               <img src="images/21.png" class="img-responsive img-thumbnail" width="250" height="188" alt="before-4"/>
                           </div>
                           <div class="col-sm-4 col-md-3 step">
                               <div class="overlay-2">
                                   <span class="caption">After we altered the paving.</span>
                               </div>
                               <img src="images/22.png" class="img-responsive img-thumbnail" width="250" height="188" alt="after-4"/>
                           </div>
                       </div>
                   </div>
                   <div id="installations" class="tab-pane fade small-gutter">
                       <h3>Paving Installation by PSL Nottingham</h3>
                       <p>PSL Paving offers a new installation service on all types of block paving or slabbed areas.</p>
                       <p>Call <a href="tel:01159566779">0115 9566779</a> for a <strong>FREE</strong> quotation on a new:</p>
                       <ul>
                           <li>Drive.</li>
                           <li>Patio.</li>
                           <li>Path.</li>
                           <li>Terrace.</li>
                           <li>Courtyard.</li>
                           <li>Car Park.</li>
                       </ul>
                       <p class="first">All installations are carried out to the highest standards of workmanship and are guaranteed. We are able to install new block paved drives or patios and slabbed areas to your specification utilising the slabs of your choice:</p>
                       <div class="clearfix">
                           <div class="col-sm-4 col-md-3 step">
                               <img src="images/23.png" class="img-responsive img-thumbnail" width="250" height="216" alt="newinstallations-1"/>
                           </div>
                           <div class="col-sm-4 col-md-3 step">
                               <img src="images/24.png" class="img-responsive img-thumbnail" width="250" height="216" alt="newinstallations-2"/>
                           </div>
                       </div>
                   </div>
            </div>
        </div>
    </div>
    <div class="row gallery" id="gallery">
        <div class="col-md-12">
            <h2>PSL image gallery</h2>
            <?php include "includes/gallery.html"; ?>
        </div>
    </div>
    <div class="row contact" id="contact">
        <div class="col-md-8 col-md-offset-2">
            <h2>Contact Us</h2>
            <form method="post" action="PHP/pslmail.php">
                <h3>Your Details</h3>
                <div class="form-group">
                    <label for="name" class="sr-only">Full Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="sr-only"> Email</label>
                    <input type="email" id="email" class="form-control" placeholder="E-mail Address" required>
                </div>
                <div class="form-group">
                    <label for="mobile" class="sr-only">Mobile No</label>
                    <input type="text" id="mobile" class="form-control" placeholder="Mobile Number" required>
                </div>
                <div class="form-group">
                    <label for="tele-number" class="sr-only">Telephone No</label>
                    <input type="text" id="tele-number" class="form-control" placeholder="Telephone number" required>
                </div>
                <div class="form-group">
                    <h3>Which of our services interests you?</h3>
                    <div class="checkbox-inline">
                        <label>
                            <input type="checkbox" value="">Cleaning Services
                        </label>
                    </div>
                    <div class="checkbox-inline">
                        <label>
                            <input type="checkbox" value="">Restoration Services
                        </label>
                    </div>
                    <div class="checkbox-inline">
                        <label>
                            <input type="checkbox" value="">New Installations
                        </label>
                    </div>
                    <div class="checkbox-inline">
                        <label>
                            <input type="checkbox" value="">Repairs/Alterations
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <h3>What time of day would you prefer us to call?</h3>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Morning
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Afternoon
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Evening
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Weekend
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="optradio">Don't Call
                    </label>
                </div>
                <div class="form-group">
                    <h3>If you have a specific query, please type it in the box below. We will answer as soon as possible.</h3>
                    <label for="message" class="sr-only">Message</label>
                    <textarea class="form-control" id="message" rows="7" cols="100" placeholder="Your message"></textarea>
                </div>
                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
