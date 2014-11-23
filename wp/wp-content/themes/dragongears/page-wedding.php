<?php
/*
Template Name: Wedding
*/
?>

<?php get_header("wedding"); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>">

        <div class="jumbotron">
            <h1><?php the_title(); ?></h1>

            <h2>Saturday, September 13, 2014</h2>

            <p>We look forward to having you join us at our wedding celebration and reception. We also have a Friday
                night game night and Sunday lunch planned for those who may be interested.</p>

            <p>This will be an informal event. Wear whatever you feel comfortable wearing.</p>
        </div>

        <section id="events">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-thumbnail" src="<?php bloginfo('template_url'); ?>/wedding/img/cspan.jpg"
                     alt="Generic placeholder image">

                <h2>Ceremony
                    <small><a href="https://foursquare.com/v/cupids-span/4ae1f187f964a520048921e3">Cupid's Span</a>
                    </small>
                </h2>
                <address>
                    Rincon Park<br>
                    Embarcadero at Folsom Street
                </address>

                <p>
                    Starting at 5pm
                </p>

                <p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ceremonyModal">
                        Map &raquo;</button>
                </p>

                <div id="ceremonyModal" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="ceremonyModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Cupid's Span</h4>

                                <address>
                                    Rincon Park<br>
                                    Embarcadero at Folsom Street
                                </address>
                            </div>

                            <div class="modal-body">
                                <img src="<?php bloginfo('template_url'); ?>/wedding/img/map-ceremony.png"
                                     class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <img class="img-thumbnail" src="<?php bloginfo('template_url'); ?>/wedding/img/thirstybear.jpg"
                     alt="Generic placeholder image">

                <h2>Reception
                    <small><a href="http://thirstybear.com/">Thirsty Bear Brewing Company</a></small>
                </h2>
                <address>
                    661 Howard Street, San Francisco, CA<br>
                    A variety of tapas and paella will be served.<br>
                </address>

                <p>
                    Starting at 6pm
                </p>

                <p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#receptionModal">
                        Map &raquo;</button>
                </p>

                <div id="receptionModal" class="modal fade" tabindex="-1" role="dialog"
                     aria-labelledby="receptionModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Thirsty Bear Brewing Company</h4>

                                <address>
                                    661 Howard Street<br>
                                    (Between 2nd and 3rd)
                                </address>
                            </div>

                            <div class="modal-body">
                                <img src="<?php bloginfo('template_url'); ?>/wedding/img/map-reception.png"
                                     class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object"
                             src="<?php bloginfo('template_url'); ?>/wedding/img/wicked-grounds.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <h2>Friday Night Gaming
                            <small><a href="http://www.wickedgrounds.com/">Wicked Grounds Café</a></small>
                        </h2>
                        <address>
                            289 8th Street, San Francisco, CA 94103
                        </address>

                        <p>
                            Wicked Grounds is a Kinky Café & Art Gallery. Anyone 18 years or older is welcome. Games
                            will be provided, but feel free to bring your own favorites. They sell pastries and food as well as non-alcoholic beverages.
                        </p>

                        <p>6pm to 10pm. Possibly followed by a trip to one or two bars in the area.</p>

                        <p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#wickedModal">Map &raquo;</button>
                        </p>

                        <div id="wickedModal" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="wickedModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Wicked Grounds Café</h4>

                                        <address>
                                            289 8th Street<br>
                                            (8th and Folsom)
                                        </address>
                                    </div>

                                    <div class="modal-body">
                                        <img
                                            src="<?php bloginfo('template_url'); ?>/wedding/img/map-wickedgrounds.png"
                                            class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object"
                             src="<?php bloginfo('template_url'); ?>/wedding/img/gotts.jpg" alt="...">
                    </a>

                    <div class="media-body">
                        <h2>Sunday Lunch
                            <small><a href="http://www.ferrybuildingmarketplace.com/gotts_roadside.php">Gott's Roadside at the Ferry Building</a></small>
                        </h2>
                        <address>San Francisco Ferry Bldg</address>

                        <p>Noon to 2pm

                        <p>

                        <p>Then strolling around the Ferry Building until 2pm at which time we can walk to Pier 40 for a cruise around the bay (3pm - 6pm). The cruise boards at 2:45pm. Details to follow.</p>

                        <p>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#gottsModal">Map &raquo;</button>
                        </p>

                        <div id="gottsModal" class="modal fade" tabindex="-1" role="dialog"
                             aria-labelledby="gottsModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Gott's Roadside at the Ferry Building</h4>

                                        <address>
                                            San Francisco Ferry Bldg
                                        </address>
                                    </div>

                                    <div class="modal-body">
                                        <img src="<?php bloginfo('template_url'); ?>/wedding/img/map-gotts.png"
                                             class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

        <section id="transportation">
            <div class="page-header">
                <h1>Getting Around</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Although San Francisco is known for its hills, the area where the wedding ceremony, reception and other events are being held is probably the flattest part of the city. There are no hills and it is very walkable if you're in reasonably good shape.
                    </p>
                    <p>
                        There are taxi cabs but they can be hard to flag down, especially if you're not in one of the more touristy parts of the city or heading out to the airport. Many people use <a href="https://www.uber.com/">Uber</a> which is a car service smartphone app for <a href="https://itunes.apple.com/us/app/uber/id368677368?mt=8">iPhone</a> and <a href="https://play.google.com/store/apps/details?id=com.ubercab">Android</a>. Uber drivers are usually limousine or town car drivers who drive for Uber in their spare time to make some extra cash. Even though Uber is more expensive than a cab, the cars are much nicer and more reliable.
                    </p>
                    <p>
                        <a href="http://www.sfmta.com/">Muni</a> is San Francisco's mass transit system, consisting of trains, buses and street cars. Several Muni train line run underneath Market Street near where our wedding will take place. Muni in the Financial District and SoMa can be a bit counter-intuitive because inbound trains run towards the bay and the Ferry Building while outbound trains go into the city.
                    </p>
                    <p>
                        <a href="http://www.bart.gov/guide/airport/inbound_sfo">Bay Area Rapid Transit</a> (BART) is the fast, easy, inexpensive way to get to San Francisco and around the Bay Area. Trains arrive at the SFO International Terminal every 15 minutes and it's just 30 minutes to downtown San Francisco. A one-way ticket from SFO to downtown is $8.25.
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-bookmark"></span><a href="http://www.visitsfbayarea.com/Article/Details/Getting-around-san-francisco">Getting Around San Francisco</a>
                    </p>
                </div>
            </div>
        </section>

        <section id="weather">
            <div class="page-header">
                <h1>San Francisco Weather</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Autumn weather in San Francisco is the most dependable.  Some say this is the best time of year to visit The City, and that the real summer here happens in September & October. Average temperatures rest in the low 70s, and consistently sunny skies inspire San Franciscans and tourists alike to head to the beach. But don't underestimate those bayside breezes. You'll want to pack a few layers just in case.
                    </p>
                    <p>
                        <span class="glyphicon glyphicon-bookmark"></span><a href="http://gocalifornia.about.com/od/casfmenu/ss/San_Francisco_by_Month_9.htm">What to Expect from San Francisco in September</a>
                    </p>
                </div>
            </div>
        </section>

        <section id="info">
            <div class="page-header">
                <h1>More Information</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://www.tripadvisor.com/Travel_Guide-g60713-San_Francisco_California.html">TripAdvisor San Francisco</a></p>
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://wikitravel.org/en/San_Francisco">Wikitravel San Francisco</a></p>
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://www.sanfrancisco.travel/">San Francisco Travel</a></p>
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://www.sanfrancisco.com/">SanFrancisco.com</a></p>
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://www.sfgate.com/sfguide/">SFGate San Francisco Guide</a></p>
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://www.thrillist.com/entertainment/san-francisco/18-things-you-have-to-explain-to-out-of-towners-about-sf-thrillist-san-francisco">18 Things You Have To Explain To Out-Of-Towners About SF</a></p>
                    <p><span class="glyphicon glyphicon-bookmark"></span><a href="http://www.thebolditalic.com/articles/5112-a-cheat-sheet-for-san-francisco-tourists-">A Cheat Sheet for San Franciso Tourists</a></p>
                </div>
            </div>
        </section>

        <section id="muttville">
            <div class="page-header"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="img-thumbnail" src="<?php bloginfo('template_url'); ?>/wedding/img/muttville.jpg"
                                 alt="Generic placeholder image">
                        </a>

                        <div class="media-body">
                            <h2>Muttville Senior Dog Rescue</h2>
                            <p>
                                In lieu of gifts, please donate to our favorite charity, <a href="http://www.muttville.org">Muttville Senior Dog Rescue</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>

    </div>

<?php endwhile; endif; ?>
<?php get_footer("wedding"); ?>
