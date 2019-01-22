<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../head.php';?>
	<style>
	.countdown {
		text-align: center;
		bottom: 40px;
		width: 100%;
		color: #232220;
		margin: 0 auto;
	}
	.countdown .timer {
		max-width: 500px;
		height: 100px;
		margin: auto;
	}
	.days,
	.hours,
	.minutes,
	.seconds {
		margin: 10px 0;
		width: 24%;
		float: left;
		font-size: 45px;
		font-weight: thin;
		text-align: center;
	}
	.days,
	.hours,
	.minutes {
		border-right: 2px solid #232220;
	}
	.days:after {
		content: "days";
		font-size: 12px;
		position: relative;
		left: 3px;
	}
	.hours:after {
		content: "h";
		font-size: 12px;
		position: relative;
		left: 3px;
	}
	.minutes:after {
		content: "min";
		font-size: 12px;
		position: relative;
		left: 3px;
	}
	.seconds:after {
		content: "sec";
		font-size: 12px;
		position: relative;
		left: 3px;
	}
	.page-info-section {
		background: url("https://source.unsplash.com/1920x460/?datacenter");
	}
	.countdown img {
		width: 200px;
		padding-bottom: 50px;
	}
	</style>
</head>
<body>

    <?php include '../menu.php';?>

	<!-- Page info section -->
	<section class="page-info-section" data-paroller-factor="0.5">
		<div class="container">
			<h1 data-aos="fade-down" data-aos-duration="2000">ZelNodes</h1>
			<div data-aos="zoom-in" data-aos-duration="500" class="site-beradcamb">
				<a href="<?php echo $base_url;?>/" class="lhome">Home </a>
				<i class="fa fa-angle-right"></i><span>ZelNodes</span>
			</div>
		</div>
	</section>
	<div class="page-info-section-line"></div>
	<!-- Page info end -->


	<!-- Timer section -->
	<section class="about-section spad">
		<div class="container center">
			<div data-aos="fade-down" data-aos-duration="1000" class="row">
				<div class="countdown">
					<!-- <img src="../img/Acadia Logo.png"> -->
					<h2>Countdown to ZelNodes</h2>
					<div class="blockheight">Current Blockheight:</div>
					<div id="clockdiv" class="timer">
						<div class="days"></div>
						<div class="hours"></div>
						<div class="minutes"></div>
						<div class="seconds"></div>
					</div>
					<h5>ZelNodes estimated activation on height: 278,000</h5>
					<h5>Estimated release date of  ZelNodes Source: 31st January 2019</h5>
					<h5>Estimated launch of ZelNodes/Rewards: 21st February 2019</h5>
					<br>
					<br>
					<div>
						<a href="https://medium.com/@ZelOfficial/zelnodes-dates-specs-network-upgrade-payout-cycles-et-al-8c5b84fbbf70" class="site-btn sb-gradients mt-5" target="_blank">ZelNode Release/Activation Info</a>
					</div>
					<div>
						<a href="/img/ZelNode_Infographic_v2.png" class="site-btn sb-gradients mt-5" target="_blank">ANN Infographic</a>
						<a href="https://medium.com/@ZelOfficial/zelnodes-the-decentralized-scalable-high-availability-computing-network-57c1b4245fbd" class="site-btn sb-gradients mt-5" target="_blank">ZelNode Theory & Req's</a>
						<a href="https://medium.com/@ZelOfficial/zelnodes-zel-partners-with-service-providers-for-rollout-c4b0aa8895e2" class="site-btn sb-gradients mt-5" target="_blank">VPS Partnerships</a>
					</div>
					<div>
						<a href="" class="site-btn sb-gradients mt-5" target="_blank">Installation Resources (Under Construction)</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Timer section end -->

	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div data-aos="fade-right" data-aos-duration="1000"  class="col-lg-6 offset-lg-0 about-text">
					<h2>ZelNodes Info</h2>
					<h5>
						<ul>
							<li>Scalable, decentralized computational network</li>
							<li>3 tiers of ZelNodes <a href="#specs">System Specs</a></li>
							<li>Node ownership & physical location fully decentralized</li>
							<li>Run via VPS or your own bare metal</li>
							<li>Earn ZelCash 24 hours a day <a href="#rewards">Operator Rewards</a></li>
						</ul>
					</h5>
					<p>Hardware will be supplied by node operators, who in turn are rewarded in ZelCash for supplying the network with dedicated processing power. There are multiple options for supplying computing power, including renting from a VPS provider, renting a dedicated server to host multiple ZelNodes, or purchasing a server outright and hosting it in a data center or well-equipped home/office.</p>
					<p><b>Note: </b>The monthly cost to either rent or run dedicated hardware is significantly higher than earlier projects' masternodes and should be researched thoroughly by a potential node operator. ZelNodes do much more than simply validate transactions.</p>
				</div>
				<div data-aos="fade-left" data-aos-duration="1000"  class="col-lg-6 offset-lg-0 about-text">
					<h2>Highlights</h2>
					<ul>
						<li>High-availability</li><br>
						<li>Hundreds of Nodes at launch <a rel="tooltip" title="Launch expectations based on rich list, trading volumes, community outreach and questionaires, dedicated hardware hosters, and other factors. This is an estimate."><i class="fas fa-info-circle"></i></a></li><br>
						<li># of Nodes not artificially limited <a rel="tooltip" title="Nodes at any tier are only limited by what the public dictates is acceptable rewards and the maximum supply of ZelCash. There is no upper limit of any tier implemented by the project."><i class="fas fa-info-circle"></i></a></li><br>
						<li>VPS discounts through our partners</li><br>
						<li>Support via Discord for Node operators</li><br>
						<li>3 levels of ZelNode ownership</li><br>
						<li>Nodes will power future dapps, smart contracts, sidechains & asset layers</li><br>
						<li>Source code available January 31, 2019</li><br>
						<li>Network upgrade & Nodes launch February 21, 2019 <a href="#launch">Details</a></li><br>
						<li>Benchmarking must meet minimum specs, uptime requirement: > 97% <a rel="tooltip" title="Benchmarking will be performed per tier and based on results from the equivalently-spec'd DigitalOcean Droplet for the specs below. Uptime requirement allows for ~ 40 minutes downtime per day for maintenance, unforseen issues, etc."><i class="fas fa-info-circle"></i></a></li><br>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->

	<!-- ZelNodes -->
	<a name="specs"></a>
	<section class="features-section spad gradient-bg">
		<div class="container text-white">
			<div data-aos="fade-down" data-aos-duration="1000" class="section-title text-center">
				<h2>ZelNodes</h2>
				<h3>3 tiers of computational nodes, allowing anyone to participate</h3>
			</div>
			<div class="row">
				<div data-aos="zoom-in" data-aos-duration="500" class="col-md-6 col-lg-4 feature">
					<i class="ti-layout-grid2-alt"></i>
					<div class="feature-content">
						<h4>ZelNode Basic</h4>
						<p>10,000 ZEL</p>
						<ul>
							<li>2 vCore</li>
							<li>4GB RAM</li>
							<li>50GB SSD</li>
							<li>2.5TB Bandwidth</li>
						</ul>
					</div>
				</div>
				<div data-aos="zoom-in" data-aos-duration="500" class="col-md-6 col-lg-4 feature">
					<i class="ti-layout-grid3-alt"></i>
					<div class="feature-content">
						<h4>ZelNode Super</h4>
						<p>25,000 ZEL</p>
						<ul>
							<li>4 vCore</li>
							<li>8GB RAM</li>
							<li>150GB SSD</li>
							<li>4TB Bandwidth</li>
						</ul>
					</div>
				</div>
				<div data-aos="zoom-in" data-aos-duration="500" class="col-md-6 col-lg-4 feature">
					<i class="ti-layout-grid4-alt"></i>
					<div class="feature-content">
						<h4>ZelNode BAMF</h4>
						<p>100,000 ZEL</p>
						<ul>
							<li>8 vCore</li>
							<li>32GB RAM</li>
							<li>600GB SSD</li>
							<li>6TB Bandwidth</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ZelNodes end -->

	<!-- Reward Structure -->
	<a name="rewards"></a>
	<section id="about" class="about-section spad">
		<div class="container">
			<div data-aos="fade-right" data-aos-duration="1000" class="row">
				<div class="col-lg-6 offset-lg-6 about-text">
					<h2>Reward Structure</h2>
					<h5>The block reward is split 75% POW / 25% ZelNode operators, for each and every block. The rewards for ZelNode ownership is designed to be stable and long-term. This will not be a "10,000% ROI masternode" project that dies 1 week after launch. We promote ZelCash accumulation, not dumping.</h5>
					<p>Of the 25% ZelNode block share, 15% goes to Basics, 25% to Supers, and 60% to BAMFs. Each chunk of rewards is split among the operators at that tier, e.g. if there are 100 BAMF ZelNodes in operation, each operator would receive:</p>
					<p><b>150 * [(0.25 * 0.60) / 100] = 0.225 ZelCash every ~2 minutes</b></p>
					<p>(150 Zel per block, 2 minute target find time).</p>
				</div>
			</div>
			<div data-aos="fade-left" data-aos-duration="1000" class="about-img">
				<div class="offset-lg-3 about-text">
					<div class="pieID pie"></div>
					<ul class="pieID legend">
						<li>
						<em>Basic</em>
						<span>3.75</span>
						</li>
						<li>
						<em>Super</em>
						<span>6.25</span>
						</li>
						<li>
						<em>BAMF</em>
						<span>15</span>
						</li>
						<li>
						<em>POW</em>
						<span>75</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Reward Structure end -->
	<!-- Launch process start -->
	<section id="launch" class="about-section spad gradient-bg">
		<div class="container text-white">
			<div data-aos="fade-left" data-aos-duration="1000" class="row">
				<div class="about-text">
					<a name="launch"></a>
					<h2>Launch Details</h2>
					<br><br><h5>ZelNodes rollout requires both a ZelCash network upgrade and the ZelNodes daemon set up and running on your VPS/dedicated server. To minimize launch issues, these large items cannot be performed on the same day, and time to correct any errors and support node operators needs to be set aside.</h5><br>
					<h5>There will be a 3-week buffer between code release and ZelNode rewards turning on to allow time for the network upgrade and operators to stand up their nodes, implement server security, and network testing.</h5><br>
					<h3>During this time, we will also implement features to set up your control wallet using ZelCore light addresses and have written and video instructions with install scripts available. This will be hugely beneficial to operators ease-of-use as typically masternode projects require a full node payments wallet with fully synced chain data.</h3>
				</div>
			</div>
		</div>
	</section>
	<!-- Reward Structure end -->
    <?php include '../footer.php';?>

    <?php include '../scripts.php';?>

    <script>
    $(document).ready(function(){
        $.MultiLanguage('<?php echo $base_url;?>/lang/charity.json');
	});
	</script>
	<script>
	$(document).ready(function() {
	"use strict";
  
	var msDay   = 86400000,
		msHour  = 3600000,
		msMin   = 60000,
		msSec   = 1000,
		conDate = new Date(),
		$days = $('.days'),
		$hours = $('.hours'),
		$mins = $('.minutes'),
		$sec = $('.seconds');

	$.getJSON('https://zel.coinblockers.com/api/stats', function(data) {
		let forkHeight=278000;
		let blockTime=120;
		let currentHeight = `${data.pools.zelcash.poolStats.networkBlocks}`
		let blocksLeft = forkHeight - currentHeight;
		let timeLeft = blocksLeft * blockTime;

		conDate.setSeconds(conDate.getSeconds() + timeLeft);

		$( "div.blockheight" ).html("Current Blockheight: "+currentHeight);
	});
  
	function SplitDiff(time) {
		var nums = '',
		remainder = 0;
    
		nums = Math.floor(time / msDay);
		remainder = time % msDay;

		nums += ':' + Math.floor(remainder / msHour);
		remainder = remainder % msHour;

		nums += ':' + Math.floor(remainder / msMin);
		remainder = remainder % msMin;

		nums += ':' + Math.floor(remainder / msSec);
	
		return nums.split(':');
	}
  
	function DisplayTime(splitTime) {
		$days.html(splitTime[0]);
		$hours.html(splitTime[1]);
		$mins.html(splitTime[2]);
		$sec.html(splitTime[3]);
	}

	function loop() {
		var splitTime;
		splitTime = SplitDiff(conDate - Date.now());
		DisplayTime(splitTime);
    
		setTimeout(loop, 1000);
	}

	loop();
	});
    </script>
	<script>
	function sliceSize(dataNum, dataTotal) {
		return (dataNum / dataTotal) * 360;
	}
	function addSlice(sliceSize, pieElement, offset, sliceID, color) {
		$(pieElement).append("<div class='slice "+sliceID+"'><span></span></div>");
		var offset = offset - 1;
		var sizeRotation = -179 + sliceSize;
		$("."+sliceID).css({
			"transform": "rotate("+offset+"deg) translate3d(0,0,0)"
		});
		$("."+sliceID+" span").css({
			"transform"       : "rotate("+sizeRotation+"deg) translate3d(0,0,0)",
			"background-color": color
		});
	}
	function iterateSlices(sliceSize, pieElement, offset, dataCount, sliceCount, color) {
		var sliceID = "s"+dataCount+"-"+sliceCount;
		var maxSize = 179;
		if(sliceSize<=maxSize) {
			addSlice(sliceSize, pieElement, offset, sliceID, color);
		} else {
			addSlice(maxSize, pieElement, offset, sliceID, color);
			iterateSlices(sliceSize-maxSize, pieElement, offset+maxSize, dataCount, sliceCount+1, color);
		}
	}
	function createPie(dataElement, pieElement) {
		var listData = [];
		$(dataElement+" span").each(function() {
			listData.push(Number($(this).html()));
		});
		var listTotal = 0;
		for(var i=0; i<listData.length; i++) {
			listTotal += listData[i];
		}
		var offset = 0;
		var color = [
			"cornflowerblue", 
			"olivedrab", 
			"orange", 
			"tomato", 
			"crimson", 
			"purple", 
			"turquoise", 
			"forestgreen", 
			"navy", 
		];
		for(var i=0; i<listData.length; i++) {
			var size = sliceSize(listData[i], listTotal);
			iterateSlices(size, pieElement, offset, i, 0, color[i]);
			$(dataElement+" li:nth-child("+(i+1)+")").css("border-color", color[i]);
			offset += size;
		}
	}
	createPie(".pieID.legend", ".pieID.pie");
	</script>

</body>
</html>