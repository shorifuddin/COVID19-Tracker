<?php
        require_once('function/function.php');
        get_header();
        get_menu();
?>
		<!-- Banner Section start here -->
		<section class="banner-section home-3">
			<div class="banner-area">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-md-6 col-12">
							<div class="content-part">
                            <?php

                                $sel="SELECT * FROM covidtrack  ORDER BY id ASC LIMIT 1";
                                $alq=mysqli_query($con,$sel);
                                $data=mysqli_fetch_assoc($alq);
                            ?>
								<div class="banner-content">
                                    <h2>COVID-19 Tracker</h2>
                                    <h4>Totale Confirmed Corona Cases</h4>
                                    <h2 class="count-people"><?=$data['total_cases'] ?></h2>
                                    <ul class="lab-ul">
                                        <li>Active cases <span class="count-people"><?=$data['active_cases'] ?></span></li>
                                        <li>Recovered cases <span class="count-people"><?=$data['recover_cases'] ?></span></li>
                                        <li>Deaths <span class="count-people"><?=$data['deaths_cases'] ?></span></li>
                                    </ul>
                                    <a href="#" class="lab-btn style-2"><span>Meet the doctor</span></a>
								</div>
							</div>
                        </div>
						<div class="col-md-6 col-12">
                            <div class="banner-round">
                                <img src="assets/images/banner/home-3/01.png" alt="banner">
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
        <!-- Banner Section ending here -->
        
        <!-- about section start here -->
        <section class="about-section style-3 bg-about padding-tb" id="about">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="about-thumb">
                            <img src="assets/images/about/home-3/01.png" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="about-content">
                            <div class="ab-title">
                                <span>How Virus Spread</span>
                                <h3>How Contagion Coronavirus</h3>
                                <p>Don’t get shirty with mein owtto doing with me arse down the problems have it car boot happy days no biggie bevvy only awesome quid I,m goods info my theme flat the lttle rotter cheeky boot happy days</p>
                                <ul class="lab-ul">
                                <?php

                                    $sel="SELECT * FROM wbvirus  ORDER BY id ASC LIMIT 3";
                                    $alq=mysqli_query($con,$sel);
                                    while ($data=mysqli_fetch_assoc($alq)) {
                                 ?>
                                    <li>
                                        <div class="ab-thumb">
                                            <img src="upload/Symptoms/<?=$data['img'] ?>" alt="ab-thumb">
                                        </div>
                                        <div class="ab-content">
                                            <h6><?=$data['title'] ?></h6>
                                            <p><?=$data['decp'] ?>.</p>
                                        </div>
                                    </li>
                                <?php } ?>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section start here -->

        <!-- Service Section Start Here -->
		<section class="service-section home-3 padding-tb" style="background-image: url(assets/css/bg-image/service-bg.jpg);" id="symptoms">
            <div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Corona Virus Symptoms</h2>
                    <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
                </div>
                <div class="section-wrapper">
                    <div class="row no-gutters justify-content-center">

                    <?php

                        $sel="SELECT * FROM wbsym ORDER BY id ASC LIMIT 6 ";
                        $alq=mysqli_query($con,$sel);
                        while ($data=mysqli_fetch_assoc($alq)) {
                    ?>
                        <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-item style-2">
                                <div class="service-inner">
                                    <div class="service-thumb">
                                        <img src="upload/Symptoms/<?=$data['img'] ?>" alt="service">
                                    </div>
                                    <div class="service-content">
                                        <h4><?=$data['title'] ?></h4>
                                        <p><?=$data['decp'] ?>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section Ending Here -->

        <!-- about section start here -->
        <section class="about-section style-3 bg-about padding-tb">
            <div class="container">
                <div class="row justify-content-center align-items-center flex-row-reverse">
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="about-thumb">
                            <img src="assets/images/about/home-3/02.png" alt="about">
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="about-content">
                            <div class="ab-title">
                                <span>About (2020-nCoV)</span>
                                <h3>Prevention Coronavirus</h3>
                                <p>Don’t get shirty with mein owtto doing with me arse down the problems have it car boot happy days no biggie bevvy only awesome quid I,m goods info my theme flat the lttle rotter cheeky boot happy days</p>
                                <ul class="lab-ul">
                                    <li>
                                        <div class="ab-thumb">
                                            <img src="assets/images/about/icon/home-3/04.jpg" alt="ab-thumb">
                                        </div>
                                        <div class="ab-content">
                                            <h6>Wash Your Hands For 20sec</h6>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ab-thumb">
                                            <img src="assets/images/about/icon/home-3/05.jpg" alt="ab-thumb">
                                        </div>
                                        <div class="ab-content">
                                            <h6>Cover Nose and Mouth When Sneezing</h6>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ab-thumb">
                                            <img src="assets/images/about/icon/home-3/06.jpg" alt="ab-thumb">
                                        </div>
                                        <div class="ab-content">
                                            <h6>Wear A Mask If Available</h6>
                                            <p>Our comprehensive Online Marketing strategy will boost your website trafic hence monthly sales.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section start here -->

		<!-- Team Member Section Start here -->
        <div class="team-section home-2 padding-tb" style="background-image: url(assets/css/bg-image/service-bg.jpg);">
            <div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h2>Meet Our Best Doctors</h2>
					<p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
				</div>
				<div class="team-area">
					<div class="row justify-content-center align-items-center">
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
							<div class="team-item style-2">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="assets/images/team/01.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5 class="member-name">Dorothy M. Nickell</h5>
										<span class="member-dagi">Throat Specialist</span>
										<p class="member-details">Proce Aran Manu Proucs Rahe Conen Cuve Manu Produ Rahe Cuvaes Mana The Conen Testin Motin Was Procedur</p>
										<ul class="icon-style-list lab-ul">
											<li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
											<li><i class="icofont-envelope"></i><span>d.m.nickell@gmail.com</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
							<div class="team-item style-2">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="assets/images/team/02.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5 class="member-name">Billie R. Courtney</h5>
										<span class="member-dagi">Cardiologist</span>
										<p class="member-details">Proce Aran Manu Proucs Rahe Conen Cuve Manu Produ Rahe Cuvaes Mana The Conen Testin Motin Was Procedur</p>
										<ul class="icon-style-list lab-ul">
											<li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
											<li><i class="icofont-envelope"></i><span>b.r.courtney@gmail.com</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="team-item style-2">
								<div class="team-item-inner">
									<div class="team-thumb">
										<img src="assets/images/team/03.jpg" alt="team-membar">
									</div>
									<div class="team-content">
										<h5 class="member-name">Courtney A. Smith</h5>
										<span class="member-dagi">Rehabilitation Therapy</span>
										<p class="member-details">Proce Aran Manu Proucs Rahe Conen Cuve Manu Produ Rahe Cuvaes Mana The Conen Testin Motin Was Procedur</p>
										<ul class="icon-style-list lab-ul">
											<li><i class="icofont-phone"></i><span>+880 1234 567 890</span></li>
											<li><i class="icofont-envelope"></i><span>c.a.smith@gmail.com</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<!-- Team Member Section Ending here -->

        <!-- safe actions section start here -->
		<section class="safe-actions style-2 padding-tb bg-action">
			<div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
					<h2>How to Wash Your Hands</h2>
					<p>Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
				</div>
				<div class="row justify-content-center align-items-center" style=" counter-reset: topx;">
					<div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/01.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Wet Hands</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/02.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Apply Soap</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/03.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Rub Hands Palm to palm</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/04.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Lather The Back of Both Hands</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/05.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Scrub Between Your Fingers</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/06.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Rub The Back of Fingers on The Opposing Palm</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/07.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Clean Thumbs</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/08.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Wash Fingernails And Fingertips</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/09.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Rinse Hands</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/10.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Dry with a Single Use Towel</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/11.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Use The Towel to Rurn off The Foucet</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="safe-item">
                            <div class="safe-thumb">
                                <img src="assets/images/safe/home-3/12.jpg" alt="safe">
                            </div>
                            <div class="safe-content">
                                <h6>Your Hands Are Clean</h6>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</section>
        <!-- safe actions section ending here -->
        
        <!-- Service Section Start Here -->
		<section class="service-section home-3 style-2 padding-tb" style="background-image: url(assets/css/bg-image/service-bg.jpg);" id="prevention">
            <div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Prevention Coronavirus Covid-19</h2>
                    <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
                </div>
                <div class="section-wrapper">
                    <div class="row no-gutters">
                        <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-left">
                                <h3>What you should do</h3>
                                <div class="row no-gutters justify-content-center">
                                <?php

                                    $sel="SELECT * FROM predo ORDER BY id ASC LIMIT 4 ";
                                    $alq=mysqli_query($con,$sel);
                                    while ($data=mysqli_fetch_assoc($alq)) {
                                ?>
                                    <div class="col-12">
                                        <div class="service-item style-2">
                                            <div class="service-inner">
                                                <div class="service-thumb">
                                                    <img src="upload/Prevention/<?=$data['img'] ?>" alt="service">
                                                </div>
                                                <div class="service-content">
                                                    <h4><?=$data['title'];?></h4>
                                                    <p><?=$data['decp'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-right">
                                <h3>What you should avoid</h3>
                                <div class="row no-gutters justify-content-center">
                                <?php

                                    $sel="SELECT * FROM preavoid ORDER BY id ASC LIMIT 4 ";
                                    $alq=mysqli_query($con,$sel);
                                    while ($data=mysqli_fetch_assoc($alq)) {
                                ?>
                                    <div class="col-12">
                                        <div class="service-item style-2">
                                            <div class="service-inner">
                                                <div class="service-thumb">
                                                    <img src="upload/Prevention/<?=$data['img'] ?>" alt="service">
                                                </div>
                                                <div class="service-content">
                                                    <h4><?=$data['title'];?></h4>
                                                    <p><?=$data['decp'];?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Section Ending Here -->

        <!-- faq section start here -->
        <section class="faq-section bg-faq padding-tb" id="faq">
			<div class="faq-shape">
				<img src="assets/images/faq/shape/01.png" alt="action-shape">
			</div>
            <div class="container">
                <div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Frequently Ask Questions</h2>
                    <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
                </div>
                <div class="section-wrapper wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ul class="accordion lab-ul">
                            <?php

                                $sel="SELECT * FROM webfq ORDER BY fq_id ASC LIMIT 5 ";
                                $alq=mysqli_query($con,$sel);
                                while ($data=mysqli_fetch_assoc($alq)) {
                            ?>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6><?=$data['fq_qus'];?></h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p><?=$data['fq_ans'];?></p>
                                    </div>
                                </li>
                             <?php  } ?>
                                
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-8 col-12">
                            <ul class="accordion lab-ul">
                            <?php

                                $sel="SELECT * FROM webfq ORDER BY fq_id DESC LIMIT 5 ";
                                $alq=mysqli_query($con,$sel);
                                while ($data=mysqli_fetch_assoc($alq)) {
                                ?>
                                <li class="accordion-item">
                                    <div class="accordion-list">
                                        <div class="left">
                                            <div class="icon"><i class="icofont-info"></i></div>
                                        </div>
                                        <div class="right">
                                            <h6><?=$data['fq_qus'];?></h6>
                                        </div>
                                    </div>
                                    <div class="accordion-answer">
                                        <p><?=$data['fq_ans'];?></p>
                                    </div>
                                </li>
                            <?php  } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq section ending here -->

		<!-- Blog Section Start Here -->
		<section class="blog-section home-3 bgc-blog padding-tb" id="blog">
            <div class="container">
				<div class="section-header wow fadeInUp" data-wow-delay="0.3s">
                    <h2>Our Most Popular Blog</h2>
                    <p> Dynamically formulate fully tested catalysts for change via focused methods of empowerment Assertively extend alternative synergy and extensive web services.</p>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="post-item style-2">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/01.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">Conulting Reporting Qouncil Arei 
											Not Could More...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2020</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="post-item style-2">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/02.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">Financial Reporting Qouncil What Could More...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2020</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="post-item style-2">
                                <div class="post-item-inner">
                                    <div class="post-thumb">
                                        <a href="#"><img src="assets/images/blog/03.jpg" alt="lab-blog"></a>
                                    </div>
                                    <div class="post-content">
                                        <h5><a href="#">Consulting Reporting Qounc Arei Could More...</a></h5>
                                        <div class="author-date">
                                            <a href="#" class="date"><i class="icofont-calendar"></i>July 12, 2020</a>
                                            <a href="#" class="admin"><i class="icofont-ui-user"></i>Somrat Islam</a>
                                        </div>
                                        <p>Pluoresntly customize pranci an plcentered  customer service anding strategic amerials Interacvely cordinate performe</p>
                                        <div class="post-footer">
                                            <a href="#" class="text-btn">Read More<i class="icofont-double-right"></i></a>
                                            <a href="#" class="comments"><i class="icofont-comment"></i><span>2</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section Ending Here -->
        
        <!-- Contact Section Start Here -->

        <?php
		 $selban="SELECT * FROM coninfo ORDER BY con_id  DESC";
		 $Qb=mysqli_query($con,$selban);

		$contact=mysqli_fetch_assoc($Qb);
	

		?>
        <section class="contact-us padding-tb pb-0" id="contact">
            <div class="container">
                <div class="contact-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <ul class="contact-area lab-ul">
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="assets/images/contact/icon/01.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Our Location</h6>
                                        <p><?= $contact['con_location'];  ?> <br> New Elephant Road 1205</p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="assets/images/contact/icon/02.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Phone Number</h6>
                                        <p><?= $contact['con_phn'];  ?><br> +2154897369</p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="assets/images/contact/icon/03.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Email Address</h6>
                                        <p><?= $contact['con_email'];  ?></p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="assets/images/contact/icon/04.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Website Address:</h6>
                                        <p>http://<?= $contact['con_site'];  ?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                 <?php

                    if (!empty($_POST)) {
                    $name=htmlentities($_POST['name'],ENT_QUOTES);
                    $email=htmlentities($_POST['email'],ENT_QUOTES);
                    $address=htmlentities($_POST['address'],ENT_QUOTES);
                    $company=htmlentities($_POST['company'],ENT_QUOTES);
                    $message=htmlentities($_POST['message'],ENT_QUOTES);
                    $msg='Name: '.$name.'\n Email: '.$email.'\n Address: '.$address.'\n Company: '.$company.'\n Message: '.$message;

                    if (!empty($name)) {
                        $insert="INSERT INTO websms(name,email,address,company,sms)
                        VALUE ('$name','$email','$address','$company','$message')";

                        if(mysqli_query($con,$insert)){
                            
                            //mail("info@domain.com","Website Contact Message",$msg);
                            echo "Successfully Sent Messange";
                        }else{
                            echo "Failed To Sent Messange";
                        }

                        }else{
                            echo "Enter Your Name";
                        }
                    }
                ?>

                        <div class="col-lg-8 col-md-6 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
                            <form class="contact-form" action="" method="POST">
                                <input type="text" name="name" placeholder="Your Name" class="contact-input">
                                <input type="email" name="email" placeholder="Your Email" class="contact-input">
                                <input type="text" name="address" placeholder="Your Address" class="contact-input">
                                <input type="text" name="company" placeholder="Your Company" class="contact-input">
                                <textarea rows="5" name="message"class="contact-input" placeholder="Your Messages"></textarea>
                                <input type="submit" name="submit" value="Send Message" class="lab-btn">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section Ending Here -->

<?php
        get_footer();
?>