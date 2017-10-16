<div class="fat-footer small">
<div class="small-12 large-4 columns">

<a href="http://www.pitzer.edu/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pitzer_logo_sans_colleges_white-transparent.png" alt="Pitzer College Logo" width="279" height="91" /></a>
<?php
	if(function_exists('get_field')){
		// Footer Contact Information
		$office = get_field('office' , 'option');
		$location = get_field('location' , 'option');
		$phone = get_field('phone' , 'option');
		$address = get_field('address' , 'option');
		$email = get_field('email' , 'option');
	}
 ?>

<ul>
    <li>Contact us</li>
    <li><strong class="text-orange"><?php if( $email ) : 
		
		echo '<a href="mailto:' . $email . '">' . $office . '</a>'; 
	else :
		echo $office; 
	endif;		

	?></strong></li>
    <li class="small"><?php echo $location; ?></li>
    <li class="small"><?php echo $phone; ?></li>
    <li class="small"><?php echo $address; ?></li>
</ul>
<?php get_template_part( 'acf/social-networks' ); ?>
</div>
    <div class="small-12 large-2 columns">
<ul class="small">
    <li><a href="/advancement/">Giving</a></li>
    <li><a href="/directories/">Directories</a></li>
    <li><a href="/emergency-information-preparedness/">Emergency</a></li>
    <li><a href="/maps/">Campus Maps</a></li>
</ul>

<ul class="tiny">
    <li class="large"><strong><a href="http://pitweb.pitzer.edu/">About</a></strong></li>
    <li><a href="/president/">President's Office</a></li>
    <li><a href="/administration/">Administration</a></li>
    <li title="Presidential Search"><a href="http://pitweb.pitzer.edu/presidential-search/">Presidential Search</a></li>
    <li><a href="/claremont-colleges/">The Claremont Colleges</a></li>
</ul>
    </div>
    
    <div class="small-12 large-2 columns tiny">
<ul>
    <li class="large"><strong><a href="http://pitweb.pitzer.edu/academics/">Academics</a></strong></li>
	<li><a href="/registrar/academic-calendar/">Academic Calendar</a></li>
	<li><a href="http://pitweb.pitzer.edu/clc/">Campus Life Committee</a></li>
	<li><a href="http://pitweb.pitzer.edu/academics/catalogs/">Course Catalogs</a></li>
	<li><a href="http://pitweb.pitzer.edu/academics/faculty-achievements/">Faculty Achievements</a></li>
	<li><a href="http://pitweb.pitzer.edu/academics/faculty/">Faculty Directory</a></li>
	<li><a href="http://pitweb.pitzer.edu/iglas/fellowships-scholarships/">Fellowships and Scholarships</a></li>
    	<li><a href="http://pitweb.pitzer.edu/academics/field-groups/">Field Groups</a></li>
</ul>
    </div>
    
    <div class="small-12 large-2 columns tiny">
<ul>
	<li class="large"><strong><a href="/admission/">Admission &amp;<br />Financial Aid</a></strong></li>
	<li><a href="/admission/apply/">Applying</a></li>
	<li><a href="/admission/admission-and-financial-aid/admission-events/">Events</a></li>
	<li><a href="/admission/frequently-asked-questions/">Frequently Asked Questions</a></li>
	<li><a href="/admission/visiting-campus/">Visiting Campus</a></li>
	<li><a href="/admission/explore/">Explore Pitzer</a></li>
</ul>

    </div>
    <div class="small-12 large-2 columns tiny">
<ul>
	<li class="large"><strong>Quicklinks</strong></li>
	<li><a href="https://mycampus2.pitzer.edu/ics/">MyCampus2 Portal</a></li>
	<li><a href="/human-resources/">Human Resources</a></li>
	<li><a href="https://mail.google.com/a/students.pitzer.edu">Email for Students</a></li>
	<li><a href="http://email.pitzer.edu/">Email for Faculty &amp; Staff</a></li>
	<li title="Access Lynda.com"><a href="http://www.pitzer.edu/information_technology/lynda/" target="_blank">Lynda.com</a></li>
	<li title="Box Cloud Storage"><a href="https://pitzer.app.box.com/login">Box Cloud Storage</a></li>
	<li><a href="https://sakai.claremont.edu:8443/portal/site/">Sakai</a></li>
	<li><a href="http://forms.pitzer.edu/web-feedback-form/">Website Feedback</a></li>
</ul>
    </div>
</div><!-- .fat-footer -->
