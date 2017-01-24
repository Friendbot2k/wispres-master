@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-logo animated fadeInDown animation-delay-5">artificial<span>reason</span></div>
            <p class="slogan text-center margin-bottom">Discover the <span>artificial reason</span> template. <br> A world of possibilities and customization for your website.</p>
            <img src="<%= assets %>img/demo/pre.png" alt="" class="img-responsive aligncenter">
        </div>
    </div> <!-- row -->

    <section class="margin-bottom">
        <p class="lead lead-lg text-center primary-color margin-bottom">Knows the <strong>Artificial Reason</strong> and surprise yourself</p>
       <div class="row">
            <div class="col-md-6">
                <h2 class="no-margin-top">Service List</h2>
                <ol class="service-list list-unstyled">
                    <li class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil suscipit cupiditate expedita hic earum vero sint, recusandae itaque, rem distinctio.</li>
                    <li class="wow fadeInUp">Totam porro sit, obcaecati quos quae iure tenetur, soluta voluptatem sapiente rerum ipsam delectus corporis voluptates voluptate, nulla mollitia pariatur.</li>
                    <li class="wow fadeInUp">Amet dolorum ullam, rerum ratione distinctio, quia iusto rem! Asperiores et quas, ratione in dolores dolorum doloribus magni suscipit labore!</li>
                    <li class="wow fadeInUp">Enim quas nesciunt sequi odit, ut quisquam vitae commodi animi placeat nihil saepe magnam aliquam, vero harum quae doloribus aut nostrum veniam alias!</li>
                    <li class="wow fadeInUp">Expedita doloribus vel nam fuga iusto aperiam maxime aut amet pariatur. Libero quidem, optio itaque ducimus. Nulla laboriosam voluptas voluptates.</li>
                </ol>
            </div>
            <div class="col-md-6">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default wow fadeInUp">
                    <div class="panel-heading panel-heading-link">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                          <i class="fa fa-lightbulb-o"></i> Talent and creativity
                        </a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati molestiae id ipsum ipsa repudiandae. Voluptatum, molestias, quas magnam repellat quos facilis sequi. Ullam optio eius deleniti dolore quasi doloribus ipsam incidunt perferendis.</p>
                        <p>Dolores, corrupti, laborum, officia sit aliquam doloremque accusantium nemo sunt veniam est incidunt perferendis minima obcaecati ex aperiam voluptatibus blanditiis eum suscipit magnam dolorum.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default wow fadeInUp">
                    <div class="panel-heading panel-heading-link">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                          <i class="fa fa-desktop"></i> Design and code
                        </a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dignissimos inventore cupiditate expedita saepe enim nobis nostrum? Laborum, laudantium, maiores, cupiditate, perspiciatis at ad accusamus corporis sed ipsam et velit!</p>
                        <p>Incidunt, harum itaque voluptatum asperiores recusandae explicabo maiores. Alias, quos, ex impedit at error id laborum fugit architecto qui beatae molestiae dolorum rem veritatis.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default wow fadeInUp">
                    <div class="panel-heading panel-heading-link">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                          <i class="fa fa-user"></i> Quality and Support
                        </a>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, rerum unde doloribus accusamus pariatur non expedita quibusdam velit totam obcaecati. Consequatur, deserunt, asperiores quam nisi earum voluptates animi labore tempore!</p>
                        <p>Dolorum, aliquam, totam labore saepe error a eum culpa assumenda sint laudantium ipsa iure ullam et dicta nesciunt repellendus optio voluptatibus reprehenderit odit.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="content-box box-primary">
                            <span class="icon-ar icon-ar-lg icon-ar-inverse icon-ar-white"><i class="fa fa-cloud"></i></span>
                            <h5 class="content-box-title">Primary Box</h5>
                            <p>Eveniet quo minima deserunt quisquam libero iste veritatis consectetur nulla.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="content-box box-primary">
                            <span class="icon-ar icon-ar-lg icon-ar-inverse icon-ar-white"><i class="fa fa-group"></i></span>
                            <h5 class="content-box-title">Primary Box</h5>
                            <p>Eveniet quo minima deserunt quisquam libero iste veritatis consectetur nulla.</p>
                        </div>
                    </div>
                </div>
            </div>
       </div>
   </section>
</div> <!-- container -->

<section class="section-lines">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="home-devices">
                    <h3>The template for all devices</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sapiente, nam sunt rem beatae architecto cupiditate numquam consectetur dolorum aliquam suscipit adipisci expedita vel quaerat illum aperiam facere inventore officia.</p>
                    <p>Consequuntur sed ipsum eius minima eum velit soluta accusamus omnis maiores modi quae mollitia consectetur adipisci.</p>
                    <ul class="icon-devices">
                        <li class="active"><a href="#desktop" data-toggle="tab"><i class="fa fa-desktop"></i></a></li>
                        <li><a href="#laptop" data-toggle="tab"><i class="fa fa-laptop"></i></a></li>
                        <li><a href="#tablet" data-toggle="tab"><i class="fa fa-tablet"></i></a></li>
                        <li><a href="#mobile" data-toggle="tab"><i class="fa fa-mobile"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="desktop">
                        <img src="<%= assets %>img/demo/mac.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="laptop">
                        <img src="<%= assets %>img/demo/macpro.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="tablet">
                        <img src="<%= assets %>img/demo/ipad.png" alt="" class="img-responsive">
                    </div>
                    <div class="tab-pane" id="mobile">
                        <img src="<%= assets %>img/demo/iphone.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="margin-bottom">
        <div class="row">
            <div class="col-md-12">
                <h2 class="right-line">Features</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-icon wow fadeInUp">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-cloud"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin">Cloud Computing</h3>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-icon wow fadeInUp">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-desktop"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin">Web Design and SEO</h3>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-icon wow fadeInUp">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-tablet"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin">Mobile and Tablet Apps</h3>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-icon wow fadeInUp">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-wordpress"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin">Wordpress Themes</h3>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-icon wow fadeInUp">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-graduation-cap"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin">Training and development</h3>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="text-icon wow fadeInUp">
                    <span class="icon-ar icon-ar-lg"><i class="fa fa-paper-plane-o"></i></span>
                    <div class="text-icon-content">
                        <h3 class="no-margin">Customer service</h3>
                        <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                    </div>
                </div>
            </div>
        </div> <!-- row -->
    </section>
</div> <!-- container -->
@endsection



<!-- <div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="right-line">Mega comparison table price</h2>
            <p class="lead lead-lg text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit hic, vel quisquam natus itaque nemo odit eveniet laborum facilis dolor omnis quia.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 hidden-sm hidden-xs pricing-col">
            <div class="pricing-table pricing-table-description">
               <div class="pricing-table-head ">
                   <h3 class="pricing-desc-title">Pay Monthly</h3>
               </div>
               <ul  class="pricing-table-content">
                   <li>
                       <i class="fa fa-globe"></i>Domains
                   </li>
                   <li>
                       <i class="fa fa-briefcase"></i>Subdomains
                   </li>
                   <li>
                       <i class="fa fa-cloud-upload"></i>Diskspace
                   </li>
                   <li>
                       <i class="fa fa-envelope"></i>Email Addresses
                   </li>
                   <li>
                       <i class="fa fa-inbox"></i> MySQL Databases
                   </li>
                   <li>
                       <i class="fa fa-gift"></i>Google AdWords Credits
                   </li>
                   <li>
                       <i class="fa fa-terminal"></i>SSH Access
                   </li>
                   <li>
                       <i class="fa fa-location-arrow"></i>Message from Users List
                   </li>
                   <li>
                       <i class="fa fa-code"></i>PHP 5, Python, Node.js
                   </li>
                   <li>
                       <i class="fa fa-dashboard"></i>Scheduled Lock Screen
                   </li>
                   <li>
                       <i class="fa fa-cogs"></i>Ports Controls
                   </li>
                   <li>
                       <i class="fa fa-wrench"></i>Customisable Templates
                   </li>
                   <li>
                       <i class="fa fa-umbrella"></i>SSL Certificate
                   </li>
                   <li>
                       <i class="fa fa-gavel"></i>Premium DNS
                   </li>
                   <li>
                       <i class="fa fa-phone"></i>Phone and Web Support
                   </li>
               </ul>
           </div>
        </div>
        <div class="col-md-2 pricing-col">
            <div class="pricing-table">
                <div class="pricing-table-head">
                    <h2>
                        Begginer<span>Officia deserunt mollitia</span>
                    </h2>
                    <h3 class="price">
                        $ <i>4</i>.99
                        <span class="hidden-md hidden-lg">Per Month</span>
                    </h3>
                </div>
                <ul class="pricing-table-content">
                    <li>
                        1
                        <span class="hidden-md hidden-lg">Domains</span>
                    </li>
                    <li>
                        10<span class="hidden-md hidden-lg">Subdomains</span>
                    </li>
                    <li>
                        10 GB<span class="hidden-md hidden-lg">Diskspace</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Email Addresses</span>
                    </li>
                    <li>
                        1
                        <span class="hidden-md hidden-lg"> MySQL Databases</span>
                    </li>
                    <li>
                        $50<span class="hidden-md hidden-lg">Google AdWords Credits</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">SSH Access</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Message from Users List</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Ports Controls</span>
                    </li>
                    <li>
                        <i class="fa fa-times">
                        </i><span class="hidden-md hidden-lg">Customizable Templates</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">SSL Certificate</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Premium DNS</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                    </li>
                </ul>
                <div class="pricing-table-footer">
                    <a href="#" class="btn btn-ar btn-block btn-success"><i class="fa fa-shopping-cart"></i> Sign Up</a>
                </div>
            </div>
        </div>
        <div class="col-md-2 pricing-col">
            <div class="pricing-table">
                <div class="pricing-table-head">
                    <h2>
                        Professional<span>Officia deserunt mollitia</span>
                    </h2>
                    <h3 class="price">
                        $ <i>99</i>.99
                        <span class="hidden-md hidden-lg">Per Month</span>
                    </h3>
                </div>
                <ul class="pricing-table-content">
                    <li>
                        1
                        <span class="hidden-md hidden-lg">Domains</span>
                    </li>
                    <li>
                        10<span class="hidden-md hidden-lg">Subdomains</span>
                    </li>
                    <li>
                        10 GB<span class="hidden-md hidden-lg">Diskspace</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Email Addresses</span>
                    </li>
                    <li>
                        1
                        <span class="hidden-md hidden-lg"> MySQL Databases</span>
                    </li>
                    <li>
                        $50<span class="hidden-md hidden-lg">Google AdWords Credits</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">SSH Access</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Message from Users List</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Ports Controls</span>
                    </li>
                    <li>
                        <i class="fa fa-times">
                        </i><span class="hidden-md hidden-lg">Customizable Templates</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">SSL Certificate</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Premium DNS</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                    </li>
                </ul>
                <div class="pricing-table-footer">
                    <a href="#" class="btn btn-ar btn-block btn-success"><i class="fa fa-shopping-cart"></i> Sign Up</a>
                </div>
            </div>
        </div>
        <div class="col-md-2 pricing-col">
            <div class="pricing-table">
                <div class="pricing-table-head">
                    <h2>
                        Expert<span>Officia deserunt mollitia</span>
                    </h2>
                    <h3 class="price">
                        $ <i>199</i>.99
                        <span class="hidden-md hidden-lg">Per Month</span>
                    </h3>
                </div>
                <ul class="pricing-table-content">
                    <li>
                        1
                        <span class="hidden-md hidden-lg">Domains</span>
                    </li>
                    <li>
                        10<span class="hidden-md hidden-lg">Subdomains</span>
                    </li>
                    <li>
                        10 GB<span class="hidden-md hidden-lg">Diskspace</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Email Addresses</span>
                    </li>
                    <li>
                        1
                        <span class="hidden-md hidden-lg"> MySQL Databases</span>
                    </li>
                    <li>
                        $50<span class="hidden-md hidden-lg">Google AdWords Credits</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">SSH Access</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Message from Users List</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Ports Controls</span>
                    </li>
                    <li>
                        <i class="fa fa-times">
                        </i><span class="hidden-md hidden-lg">Customizable Templates</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">SSL Certificate</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Premium DNS</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                    </li>
                </ul>
                <div class="pricing-table-footer">
                    <a href="#" class="btn btn-ar btn-block btn-success"><i class="fa fa-shopping-cart"></i> Sign Up</a>
                </div>
            </div>
        </div>
        <div class="col-md-2 pricing-col">
            <div class="pricing-table border-fix-pricing">
                <div class="pricing-table-head">
                    <h2>
                        Ultimate<span>Officia deserunt mollitia</span>
                    </h2>
                    <h3 class="price">
                        $ <i>499</i>.99
                        <span class="hidden-md hidden-lg">Per Month</span>
                    </h3>
                </div>
                <ul class="pricing-table-content">
                    <li>
                        1
                        <span class="hidden-md hidden-lg">Domains</span>
                    </li>
                    <li>
                        10<span class="hidden-md hidden-lg">Subdomains</span>
                    </li>
                    <li>
                        10 GB<span class="hidden-md hidden-lg">Diskspace</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Email Addresses</span>
                    </li>
                    <li>
                        1
                        <span class="hidden-md hidden-lg"> MySQL Databases</span>
                    </li>
                    <li>
                        $50<span class="hidden-md hidden-lg">Google AdWords Credits</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">SSH Access</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Message from Users List</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Ports Controls</span>
                    </li>
                    <li>
                        <i class="fa fa-times">
                        </i><span class="hidden-md hidden-lg">Customizable Templates</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">SSL Certificate</span>
                    </li>
                    <li>
                        <i class="fa fa-times"></i>
                        <span class="hidden-md hidden-lg">Premium DNS</span>
                    </li>
                    <li>
                        <i class="fa fa-check"></i>
                        <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                    </li>
                </ul>
                <div class="pricing-table-footer">
                    <a href="#" class="btn btn-ar btn-block btn-success"><i class="fa fa-shopping-cart"></i> Sign Up</a>
                </div>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container --> -->